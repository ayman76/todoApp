<?php

namespace Core;

// This class is responsible for set and get containers from anywhere in the application
//this help us from not repeating defining container in each file
class App
{
    protected static $container;

    /**
     * @param mixed $container
     */
    public static function setContainer($container): void
    {
        static::$container = $container;
    }

    /**
     * @return mixed
     */
    public static function getContainer()
    {
        return static::$container;
    }

    public static function resolve($key)
    {
        return static::$container->resolve($key);
    }


}