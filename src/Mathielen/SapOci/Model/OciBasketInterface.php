<?php

namespace Mathielen\SapOci\Model;

interface OciBasketInterface
{

	/**
	 * @return OciBasketItemInterface[]
	 */
	public function getItems(): iterable;
}
