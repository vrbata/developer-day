<?php

class Database
{
    /**
     * @var \Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function query()
    {
        return $this->connection->execute();
    }
}