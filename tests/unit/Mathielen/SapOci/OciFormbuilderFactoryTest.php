<?php

namespace Mathielen\SapOci;

use Doctrine\Common\Util\Debug;
use Mathielen\SapOci\Model\Oci40BasketItem;
use Mathielen\SapOci\Model\OciBasket;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\Test\FormBuilderInterface;

class OciFormbuilderFactoryTest extends TestCase
{

    /**
     * @var OciFormbuilderFactory
     */
    private $formBuilderFactory;

    protected function setUp()
    {
        $formFactory = $this
            ->getMockBuilder(FormFactoryInterface::class)
            ->getMock();

        $dispatcherMock = $this->getMockBuilder(EventDispatcherInterface::class)->getMock();
        $formBuilder = new FormBuilder(null, FormType::class, $dispatcherMock, $formFactory);

        $formFactory
            ->method('createNamedBuilder')
            ->will($this->returnValue($formBuilder));

        $this->formBuilderFactory = new OciFormbuilderFactory($formFactory);
    }

    public function testFactor()
    {
        $basket = new OciBasket();

        $item = new Oci40BasketItem();
        $item->setDescription('description');
        $item->setLongText('longtext');

        $basket->addItem($item);

        $formBuilder = $this->formBuilderFactory->factor($basket);

        $this->assertTrue($formBuilder->has('NEW_ITEM-DESCRIPTION'));
        $this->assertTrue($formBuilder->has('NEW_ITEM-LONGTEXT_1:132'));
    }

}
