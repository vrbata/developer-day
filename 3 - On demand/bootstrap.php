<?php

$container = new Container();


$container->set(Model::class, function (Container $c) {
    return new Model();
});

$container->set(Template::class, function (Container $c) {
    return new Template();
});

$container->set(Controller::class, function (Container $c) {
    return new Controller($c->get(Model::class), $c->get(Template::class));
});

$container->set(Mailer::class, function (Container $c) {
    return new Mailer();
});