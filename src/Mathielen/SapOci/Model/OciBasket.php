<?php

namespace Mathielen\SapOci\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class OciBasket implements OciBasketInterface
{
	private Collection $items;

	public function __construct(Collection $items = null)
	{
		$this->items = $items ?: new ArrayCollection();
	}

	public function getItems(): Collection
	{
		return $this->items;
	}

	public function addItems(array $items): void
	{
		foreach ($items as $item) {
			$this->addItem($item);
		}
	}

	public function addItem(OciBasketItemInterface $basketItem): void
	{
		$this->items[] = $basketItem;
	}
}
