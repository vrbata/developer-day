<?php

class Container
{
    private $services;

    public function get($class)
    {
        return $this->services[$class] ?? $this->resolve($class);
    }

    private function resolve($class)
    {
        $constructor = (new ReflectionClass($class))->getConstructor();

        $resolvedParameters = [];
        if ($constructor) {
            $parameters = $constructor->getParameters();
            foreach ($parameters as $parameter) {
                $resolvedParameters[] = $this->get($parameter->getClass()->getName());
            }
        }

        return $this->services[$class] = new $class(...$resolvedParameters);
    }
}