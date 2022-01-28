<?php

namespace Simplex;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\EventDispatcher\Event;

class ResponseEvent
{
    private $request;
    private $response;

    public function __construct(Response $response, Request $request)
    {
        $this->response = $response;
        $this->request = $request;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }


}