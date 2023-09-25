<?php

namespace Core;

//This class is responsible on storing and retrieving instances of classes like database class
// This prevent on writing the same logic in every class
class Container
{
    protected $bindings = [];

    //Add the instance in bindings
    public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }

    //Get the instance from the bindings to use it
    public function resolve($key)
    {
        if (!array_key_exists($key, $this->bindings)) {
            throw new \Exception("no matching binding found for {$key}");
        }
        return call_user_func($this->bindings[$key]);

    }
}