<?php

class Controller
{

    protected $request;

    /**
     * @var Middleware::class
     */
    protected $middleware;

    public function setRequest(Request $req)
    {
        $this->request = $req;
    }

    public function dispatch($func)
    {
        print "controller run...";

        $this->middleware = app()->get(Middleware::class);

        $this->middleware->mockHandle($this->request, $this->handler($func));
    }

    public function handler($func)
    {
        return function () use ($func) {
            $this->{$func}();
        };
    }
}
