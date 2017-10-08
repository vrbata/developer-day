<?php

class Container
{
    private $classes;

    public function set($class)
    {
        $this->classes[get_class($class)] = $class;
    }

    public function get($class)
    {
        return $this->classes[$class];
    }
}