<?php

class Container
{
    private $services;

    public function set($service, $definition)
    {
        $this->services[$service] = $definition;
    }

    public function get($service)
    {
        if ($this->services[$service] instanceof Closure) {
            return $this->services[$service]($this);
        }

        return $this->services[$service];
    }
}