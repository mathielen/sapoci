<?php

namespace Mathielen\SapOci\Exception;

class OciUserNotResolvedException extends OciException
{
	public function __construct(string $username)
	{
		parent::__construct("Could not resolve user '$username'");
	}
}
