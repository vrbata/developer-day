<?php

class Repository
{
    /**
     * @var \Database
     */
    private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function getData()
    {
        return $this->database->query();
    }
}