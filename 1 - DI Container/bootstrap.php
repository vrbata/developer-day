<?php

$container = new Container();
$container->set(new Model());
$container->set(new Template());
$container->set(new Controller($container->get(Model::class), $container->get(Template::class)));
$container->set(new Mailer());
