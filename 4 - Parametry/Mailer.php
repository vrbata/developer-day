<?php

class Mailer
{
    /** @var array */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function send()
    {
        return $this->config['user'];
    }
}