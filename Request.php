<?php


class Request
{

    public $inputs;
    public function __construct()
    {
        print "request run...";
    }

    public function fillMock(array $inputs)
    {
        $this->inputs = $inputs;
    }
}
