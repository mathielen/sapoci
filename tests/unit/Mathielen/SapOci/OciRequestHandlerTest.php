<?php

namespace Mathielen\SapOci;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\MockArraySessionStorage;

class OciRequestHandlerTest extends TestCase
{

    /**
     * @expectedException \Mathielen\SapOci\Exception\OciInvalidRequestException
     * @expectedExceptionMessage Parameter HOOK_URL cannot be empty!
     */
    public function testHandleNoHookUrl()
    {
        $handler = new TestOciRequestHandler();
        $request = new Request();

        $handler->handle($request);
    }

    /**
     * @expectedException \Mathielen\SapOci\Exception\OciAccessDeniedException
     * @expectedExceptionMessage OCI Access denied for call
     */
    public function testHandleAccessDenied()
    {
        $handler = new TestOciRequestHandler(false);
        $request = new Request();

        $handler->handle($request);
    }

    public function testHandleHookUrlPostBeatsGet()
    {
        $handler = new TestOciRequestHandler();
        $request = new Request(['HOOK_URL' => 'my_get_hook'], ['HOOK_URL' => 'my_post_hook']);
        $request->setSession(new Session(new MockArraySessionStorage()));

        $handler->handle($request);

        $this->assertEquals(['hook' => 'my_post_hook'], $request->getSession()->get('oci'));
    }

    public function testHandleHookUrlOnlyGet()
    {
        $handler = new TestOciRequestHandler();
        $request = new Request(['HOOK_URL' => 'my_get_hook']);
        $request->setSession(new Session(new MockArraySessionStorage()));

        $handler->handle($request);

        $this->assertEquals(['hook' => 'my_get_hook'], $request->getSession()->get('oci'));
    }
}

class TestOciRequestHandler extends AbstractOciRequestHandler
{

    private $isValid;

    public function __construct($isValid = true)
    {
        $this->isValid = $isValid;
    }

    protected function isRequestValid(Request $request): bool
    {
        return $this->isValid;
    }
}
