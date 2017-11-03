<?php


namespace Mathielen\SapOci\Model;

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
        $this->tax = $tax;

        return $this;
    }
}
