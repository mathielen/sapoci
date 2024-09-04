<?php

namespace Mathielen\SapOci;

use Mathielen\SapOci\FieldTransformer\FieldTransformerInterface;
use Mathielen\SapOci\Model\OciBasketInterface;
use Mathielen\SapOci\Model\OciBasketItemInterface;
use Mathielen\SapOci\Type\LongTextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormFactoryInterface;

class OciFormbuilderFactory implements OciFormbuilderFactoryInterface
{
	private FormFactoryInterface $formFactory;

	private array $defaultFormOptions;

	/**
	 * @var FieldTransformerInterface[]
	 */
	private array $fieldTransformers = [];

	public function __construct(FormFactoryInterface $formFactory, array $defaultFormOptions = ['csrf_protection' => false])
	{
		$this->formFactory = $formFactory;
		$this->defaultFormOptions = $defaultFormOptions;

		//default special field transformer for LONGTEXT
		$this->addFieldTransformer('NEW_ITEM-LONGTEXT',  new class implements FieldTransformerInterface {
			public function transform(string $fieldValue, int $lineNum, array &$formData): void {
				$formData['NEW_ITEM-LONGTEXT_'.$lineNum.':132'] = $fieldValue;
			}
		});
	}

	public function addFieldTransformer(string $fieldName, FieldTransformerInterface $fieldTransformer): void
	{
		$this->fieldTransformers[$fieldName] = $fieldTransformer;
	}

	protected function buildFormData(OciBasketInterface $basket): array
	{
		$formData = [];
		$lineNum = 1; //must start at 1

		/** @var OciBasketItemInterface $item */
		foreach ($basket->getItems() as $item) {
			foreach ($item->getFields() as $fieldName => $fieldValue) {
				if (null === $fieldValue) {
					continue;
				}

				if (isset($this->fieldTransformers[$fieldName])) {
					$this->fieldTransformers[$fieldName]->transform($fieldValue, $lineNum, $formData);

					continue;
				}

				$formData[$fieldName][$lineNum] = $fieldValue;
			}

			++$lineNum;
		}

		return $formData;
	}

	protected static function addFormField(FormBuilderInterface $formBuilder, string $formFieldName): void
	{
		if (LongTextType::isLongTextFieldname($formFieldName)) {
			$formBuilder->add($formFieldName, LongTextType::class);

			return;
		}

		$formBuilder->add($formFieldName, CollectionType::class, ['entry_type' => HiddenType::class, 'label' => false]);
	}

	public function factor(OciBasketInterface $basket): FormBuilderInterface
	{
		$formData = $this->buildFormData($basket);

		$formBuilder = $this
			->formFactory
			->createNamedBuilder('', FormType::class, $formData, $this->defaultFormOptions);

		foreach (\array_keys($formData) as $formFieldName) {
			self::addFormField($formBuilder, $formFieldName);
		}

		return $formBuilder;
	}
}
