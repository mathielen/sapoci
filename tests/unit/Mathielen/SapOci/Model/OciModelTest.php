<?php

namespace Mathielen\SapOci\Model;

use PHPUnit\Framework\TestCase;

class OciModelTest extends TestCase
{
	/**
	 * @dataProvider getConstraintedMethodnames
	 */
	public function testConstraints($methodName): void
	{
		$cls = new Oci50BasketItem();

		try {
			$cls->{$methodName}(\str_repeat('x', 256));

			$this->fail('Should throw an exception!');
		} catch (\Assert\InvalidArgumentException $e) {
		}

		//check if an integer works
		$cls->{$methodName}(1);

		$this->assertTrue(true); //all good
	}

	public function getConstraintedMethodnames()
	{
		$rfl = new \ReflectionClass(Oci50BasketItem::class);

		$methodNames = [];
		foreach ($rfl->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
			$methodName = $method->getName();

			//only non-constrainted method
			if (\in_array($methodName, ['setDescription', 'setLongText'])) {
				continue;
			}
			if ('set' !== \substr($methodName, 0, 3)) {
				continue;
			}

			$methodNames[] = [$methodName];
		}

		return $methodNames;
	}
}
