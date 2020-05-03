<?php

namespace Mathielen\SapOci\Model;

use Doctrine\Common\Collections\Collection;

interface OciBasketInterface
{
	/**
	 * @return Collection
	 */
	public function getItems();
}
