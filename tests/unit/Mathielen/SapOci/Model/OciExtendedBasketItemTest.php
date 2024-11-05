<?php

namespace Mathielen\SapOci\Model;

use PHPUnit\Framework\TestCase;

class OciExtendedBasketItemTest extends TestCase
{

	public function testSetOverriddenCustomField(): void
	{
		$sut = new OciExtendedBasketItem();
		$testString21Chars = \str_repeat('x', 21);
		$sut->setCustField4($testString21Chars);
		$this->assertEquals($testString21Chars, $sut->getCustField4());
	}
}

class OciExtendedBasketItem extends OciBaseBasketItem
{
	public function setCustField4(?string $custField4 = null): OciBaseBasketItem
	{
		$this->custField4 = $custField4;

		return $this;
	}
}
