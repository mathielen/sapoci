<?php


namespace Mathielen\SapOci\Model;

interface OciBasketItemInterface
{

    /**
     * Returns associated array of field=>value
     *
     * @return array
     */
    public function getFields();

    public static function addFieldToFormData($formFieldName, $fieldValue, $lineNum, array &$formData);
}
