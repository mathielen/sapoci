<?php

namespace Mathielen\SapOci\Exception;

use Symfony\Component\HttpFoundation\Request;

class OciAccessDeniedException extends OciException
{
    public function __construct(Request $request)
    {
        parent::__construct("OCI Access denied for call " . $request);
    }
}
