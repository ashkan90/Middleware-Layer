<?php


class Middleware
{
    public function __construct()
    {
        print "middleware run...";
    }

    public function mockHandle($request, $next)
    {
        if (isset($request->inputs['name'])) {
            $next();
        }
        dd("You're unwanted person. Go home!");
    }
}
