<?php

namespace Mathielen\SapOci;

use Mathielen\SapOci\Model\OciBasketInterface;
use Mathielen\SapOci\Model\OciBasketItemInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\Form\FormFactoryInterface;

class OciFormbuilderFactory implements OciFormbuilderFactoryInterface
{
	/**
	 * @var FormFactory
	 */
	private $formFactory;

	private $csrfTokenEnabled;

	public function __construct(FormFactoryInterface $formFactory, bool $csrfTokenEnabled = true)
	{
		$this->formFactory = $formFactory;
		$this->csrfTokenEnabled = $csrfTokenEnabled;
	}

	protected function buildFormData(OciBasketInterface $basket): array
	{
		$formData = [];
		$i = 1; //must start at 1

		/** @var OciBasketItemInterface $item */
		foreach ($basket->getItems() as $item) {
			foreach ($item->getFields() as $fieldName => $value) {
				if (null === $value) {
					continue;
				}

				$item->addFieldToFormData($fieldName, $value, $i, $formData);
			}

			++$i;
		}

		return $formData;
	}

	protected function addFormField(FormBuilderInterface $formBuilder, $formFieldName): void
	{
		/*if (preg_match('/^NEW_ITEM-LONGTEXT/', $formFieldName)) {
			$formBuilder->add($formFieldName, HiddenType::class, ['label' => false]);
		} else {*/
		$formBuilder->add($formFieldName, CollectionType::class, ['entry_type' => HiddenType::class, 'label' => false]);
		//}
	}

	/**
	 * {@inheritdoc}
	 */
	public function factor(OciBasketInterface $basket): FormBuilderInterface
	{
		$formData = $this->buildFormData($basket);

		$defaultOptions = [];
		if ($this->csrfTokenEnabled) {
			$defaultOptions['csrf_protection'] = false;
		}

		$formBuilder = $this
			->formFactory
			->createNamedBuilder(null, FormType::class, $formData, $defaultOptions);

		foreach (\array_keys($formData) as $formFieldName) {
			$this->addFormField($formBuilder, $formFieldName);
		}

		return $formBuilder;
	}
}
