<?php


namespace Mathielen\SapOci;

use Mathielen\SapOci\Exception\OciAccessDeniedException;
use Mathielen\SapOci\Exception\OciInvalidRequestException;
use Symfony\Component\HttpFoundation\Request;

abstract class AbstractOciRequestHandler implements OciRequestHandlerInterface
{
    abstract protected function isRequestValid(Request $request): bool;

    protected function getHookUrlFromRequest(Request $request): string
    {
        //first check POST
        $hookUrl = $request->request->has('HOOK_URL') ? $request->request->get('HOOK_URL') : '';

        //then check GET
        if (empty($hookUrl)) {
            $hookUrl = $request->query->has('HOOK_URL') ? $request->query->get('HOOK_URL') : '';
        }

        return $hookUrl;
    }

    /**
     * @throws OciInvalidRequestException
     * @throws OciAccessDeniedException
     */
    public function handle(Request $request)
    {
        if (!$this->isRequestValid($request)) {
            throw new OciAccessDeniedException($request);
        }

        $hookUrl = $this->getHookUrlFromRequest($request);
        if (empty($hookUrl)) {
            throw new OciInvalidRequestException("Parameter HOOK_URL cannot be empty!");
        }

        $request->getSession()->set('oci', [
            'hook' => $hookUrl,
        ]);
    }
}
