<?php

require_once __DIR__ . '/bootstrap.php';

$mailer = $container->get(Mailer::class);
$mailer->send();
