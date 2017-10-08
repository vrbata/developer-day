<?php

require_once __DIR__ . '/bootstrap.php';

$firstMailer  = $container->get(Mailer::class);
$secondMailer = $container->get(Mailer::class);

var_dump($firstMailer === $secondMailer);