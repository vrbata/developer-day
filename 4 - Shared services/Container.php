<?php

class Container
{
    private $services;

    public function set($service, $definition)
    {
        $this->services[$service] = $definition;
    }

    public function share($service, Closure $definition)
    {
        $this->services[$service] = function (Container $container) use ($definition) {
            static $instance;

            if (null === $instance) {
                $instance = $definition($container);
            }

            return $instance;
        };
    }

    public function get($service)
    {
        if ($this->services[$service] instanceof Closure) {
            return $this->services[$service]($this);
        }

        return $this->services[$service];
    }
}