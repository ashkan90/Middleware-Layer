<?php

require './Singleton.php';
final class Application extends Singleton
{

    protected $queue = [];

    protected $onProcess;

    public function get(string $class) {
        return $this->queue[$class];
    }

    public function add(string $class)
    {
        $this->onProcess = $class;
        if (!isset($this->queue[$class])) {
            $this->queue[$class] = new $class;
        }

        return new static;
    }

//    public function addParameter(...$params): void
//    {
//        unset($this->queue[$this->onProcess]);
//
//        $this->queue[$this->onProcess] = new $this->onProcess();
//    }

    public function queueWorker(array $dependencies): void
    {
        foreach ($dependencies as $dependency) {
            $this->add($dependency);
        }
    }

}
