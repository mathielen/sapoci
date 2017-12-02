<?php


namespace Mathielen\SapOci\Model;

use Assert\Assertion;

class Oci50BasketItem extends Oci40BasketItem
{
    private $tax;

    public static function create()
    {
        return new self();
    }

    /**
     * @return mixed
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param mixed $tax
     */
    public function setTax($tax)
    {
        Assertion::maxLength((string)$tax, 5, "tax max. length is 5");

        $this->tax = $tax;

        return $this;
    }

    public function getFields()
    {
        return parent::getFields() + [
                'NEW_ITEM-TAX' => $this->getTax()
            ];
    }
}
