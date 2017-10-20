<?php

namespace AppBundle;

class UserRepository
{
    /**
     * @var \AppBundle\Logger
     */
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
}