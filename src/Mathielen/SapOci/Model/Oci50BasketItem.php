<?php

namespace Mathielen\SapOci\Model;

class Oci50BasketItem extends Oci40BasketItem
{
	private ?string $tax = null;

	public function getTax(): ?string
	{
		return $this->tax;
	}

	public function setTax(?string $tax = null): self
	{
		self::enforceLength('tax', 5, $tax);

		$this->tax = $tax;

		return $this;
	}

	public function getFields(): array
	{
		return parent::getFields() + [
				'NEW_ITEM-TAX' => $this->getTax(),
			];
	}
}
