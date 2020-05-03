<?php

namespace Mathielen\SapOci;

use Mathielen\SapOci\Model\OciBasketInterface;
use Symfony\Component\Form\FormBuilderInterface;

interface OciFormbuilderFactoryInterface
{
	public function factor(OciBasketInterface $basket): FormBuilderInterface;
}
