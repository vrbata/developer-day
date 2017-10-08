<?php

$model      = new Model();
$template   = new Template();
$controller = new Controller($model, $template);

echo $controller->show();
