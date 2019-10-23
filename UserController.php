<?php


class UserController extends Controller
{
    public function __construct()
    {
        print("controller çalıştı");

    }

    public function mockIndex()
    {
        dd($this->request);
    }
}
