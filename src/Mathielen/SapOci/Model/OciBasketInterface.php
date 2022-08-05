<?php

namespace Mathielen\SapOci\Model;

use Doctrine\Common\Collections\Collection;

interface OciBasketInterface
{
	public function getItems(): Collection;
}
