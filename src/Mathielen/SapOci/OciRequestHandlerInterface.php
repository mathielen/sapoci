<?php


namespace Mathielen\SapOci;

use Symfony\Component\HttpFoundation\Request;

interface OciRequestHandlerInterface
{
    public function handle(Request $request);
}
