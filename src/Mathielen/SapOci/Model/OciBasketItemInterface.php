<?php

namespace Mathielen\SapOci\Model;

interface OciBasketItemInterface
{
	public function getFields(): array;

	public static function addFieldToFormData($formFieldName, $fieldValue, $lineNum, array &$formData);
}
