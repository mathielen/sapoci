<?php


namespace Mathielen\SapOci\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class OciBasket implements OciBasketInterface
{

    /**
     * @var Collection
     */
    private $items;

    public function __construct(Collection $items = null)
    {
        $this->items = $items ? $items : new ArrayCollection();
    }

    /**
     * @return Collection
     */
    public function getItems()
    {
        return $this->items;
    }

    public function addItem(OciBasketItemInterface $basketItem)
    {
        $this->items[] = $basketItem;
    }
}
