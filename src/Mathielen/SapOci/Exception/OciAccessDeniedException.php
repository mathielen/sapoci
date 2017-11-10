<?php

namespace Mathielen\SapOci\Exception;

class OciAccessDeniedException extends OciException
{
    public function __construct($token)
    {
        parent::__construct("OCI Access denied for token '$token'");
    }
}
