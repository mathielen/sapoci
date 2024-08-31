<?php

namespace Mathielen\SapOci;

use Mathielen\SapOci\Model\Oci50BasketItem;
use Mathielen\SapOci\Model\OciBasket;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormFactoryInterface;

class OciFormbuilderFactoryTest extends TestCase
{

	private OciFormbuilderFactory $formBuilderFactory;

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
}
