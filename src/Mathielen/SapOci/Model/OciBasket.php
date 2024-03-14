<?php

namespace Mathielen\SapOci\Model;

use Assert\Assertion;

class OciBasket implements OciBasketInterface
{
	private array $items;

	public function __construct(array $items = [])
	{
		Assertion::allIsInstanceOf($items, OciBasketItemInterface::class);

		$this->items = $items;
	}

	public function getItems(): iterable
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
