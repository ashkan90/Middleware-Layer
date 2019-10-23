<?php


class Singleton
{
    protected static $instances = [];

    public static function getInstance()
    {
        $subClass = static::class;
        if (!isset(self::$instances[$subClass])) {
            self::$instances[$subClass] = new static;
        }

        return self::$instances[$subClass];
    }

    public function __construct()
    {
    }

    public function __wakeup()
    {
    }

    public function __clone()
    {
    }
}
