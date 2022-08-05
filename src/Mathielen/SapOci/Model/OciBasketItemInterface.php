<?php

namespace Mathielen\SapOci\Model;

interface OciBasketItemInterface
{
	public function getFields(): array;

	public static function addFieldToFormData(string $formFieldName, string $fieldValue, int $lineNum, array &$formData): void;
}
