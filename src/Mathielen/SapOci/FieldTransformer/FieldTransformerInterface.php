<?php

namespace Mathielen\SapOci\FieldTransformer;

interface FieldTransformerInterface
{

	public function transform(string $fieldValue, int $lineNum, array &$formData): void;

}