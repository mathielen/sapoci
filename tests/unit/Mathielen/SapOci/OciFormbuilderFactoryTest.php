<?php

namespace Mathielen\SapOci;

use Mathielen\SapOci\FieldTransformer\FieldTransformerInterface;
use Mathielen\SapOci\Model\Oci50BasketItem;
use Mathielen\SapOci\Model\OciBasket;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormFactoryInterface;

class OciFormbuilderFactoryTest extends TestCase
{
	/**
	 * @var OciFormbuilderFactory
	 */
	private $formBuilderFactory;

	protected function setUp(): void
	{
		$formFactory = $this
			->getMockBuilder(FormFactoryInterface::class)
			->getMock();

		$dispatcherMock = $this->getMockBuilder(EventDispatcherInterface::class)->getMock();
		$formBuilder = new FormBuilder(null, FormType::class, $dispatcherMock, $formFactory);

		$formFactory
			->method('createNamedBuilder')
			->willReturn($formBuilder);

		$this->formBuilderFactory = new OciFormbuilderFactory($formFactory);
	}

	public function testFactor(): void
	{
		$basket = new OciBasket();

		$item =
			Oci50BasketItem::create()
				->setDescription('description')
				->setLongText('longtext')
				->setTax(19);

		$basket->addItem($item);

		$formBuilder = $this->formBuilderFactory->factor($basket);

		$this->assertTrue($formBuilder->has('NEW_ITEM-DESCRIPTION'));
		$this->assertTrue($formBuilder->has('NEW_ITEM-LONGTEXT_1:132'));
		$this->assertTrue($formBuilder->has('NEW_ITEM-TAX'));
	}

	public function testFactorSpecialFieldTransformer(): void
	{
		$basket = new OciBasket();

		$item =
			Oci50BasketItem::create()
				->setDescription('description')
				->setLongText('longtext')
				->setTax(19);

		$basket->addItem($item);

		$this->formBuilderFactory->addFieldTransformer('NEW_ITEM-LONGTEXT', new class implements FieldTransformerInterface {
			public function transform(string $fieldValue, int $lineNum, array &$formData): void {
				$formData['NEW_ITEM-LONGTEXT_'.$lineNum.':132[0]'][] = $fieldValue;
			}
		});

		$formBuilder = $this->formBuilderFactory->factor($basket);

		$this->assertTrue($formBuilder->has('NEW_ITEM-DESCRIPTION'));
		$this->assertTrue($formBuilder->has('NEW_ITEM-LONGTEXT_1:132[0]')); //special field transformer adds a [0]
		$this->assertTrue($formBuilder->has('NEW_ITEM-TAX'));
	}
}
