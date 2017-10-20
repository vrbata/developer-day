<?php

require_once __DIR__ . '/bootstrap.php';

$controller = $container->get(Controller::class);

echo $controller->show();