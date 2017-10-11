<?php

namespace App;

class UserRepository
{
    /**
     * @var \App\Logger
     */
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
}