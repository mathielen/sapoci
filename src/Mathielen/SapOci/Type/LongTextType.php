<?php

namespace Mathielen\SapOci\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class LongTextType extends AbstractType
{

	public static function isLongTextFieldname(string $formFieldName): bool
	{
		return preg_match('/^NEW_ITEM-LONGTEXT_\d+:132$/', $formFieldName);
	}

	public function buildView(FormView $view, FormInterface $form, array $options): void
	{
		//specification says the name should be "NEW_ITEM-LONGTEXT_n:132[]"
		$view->vars['name'] .= '[]';
		$view->vars['full_name'] .= '[]';
	}

	public function getParent(): string
	{
		return HiddenType::class;
	}

}