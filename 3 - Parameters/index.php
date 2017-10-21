<?php

require_once __DIR__ . '/bootstrap.php';

$mailer = $container[Mailer::class];
echo $mailer->send();
