<?php

namespace App;

class Logger
{
    public function __construct()
    {
        var_dump(self::class . ' was created');
    }
}