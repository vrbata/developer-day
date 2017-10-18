<?php

namespace App;

class ArticleRepository
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