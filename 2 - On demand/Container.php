<?php

class Container
{
    private $services;

    public function set($service, Closure $definition)
    {
        $this->services[$service] = $definition;
    }

    public function get($service)
    {
        return $this->services[$service]($this);
    }
}