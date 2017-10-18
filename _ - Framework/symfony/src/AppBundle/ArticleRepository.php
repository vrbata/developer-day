<?php

namespace AppBundle;

class ArticleRepository
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