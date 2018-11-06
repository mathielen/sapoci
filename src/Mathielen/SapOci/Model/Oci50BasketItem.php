<?php


namespace Mathielen\SapOci\Model;

class Oci50BasketItem extends Oci40BasketItem
{
    private $tax;

    public function getTax()
    {
        return $this->tax;
    }

    public function setTax($tax)
    {
        self::enforeLength($tax, 'tax', 5);

        $this->tax = $tax;

        return $this;
    }

    public function getFields(): array
    {
        return parent::getFields() + [
                'NEW_ITEM-TAX' => $this->getTax()
            ];
    }
}
