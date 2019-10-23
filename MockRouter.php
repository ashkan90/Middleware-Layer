<?php


class MockRouter
{

    public function get(string $path, string $controller, string $func)
    {
        $mockRequest = new Request();
        $mockRequest->fillMock([
            'name' => 'emirhan',
            'surname' => 'ataman',
        ]);

        /**
         * @var Controller
         */
        $_controller = new $controller();
        $_controller->setRequest($mockRequest);
        $_controller->dispatch($func);
    }
}
