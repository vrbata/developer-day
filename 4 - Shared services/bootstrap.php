<?php

$mailerConfig = [
    'user'   => getenv('MAILER_USER'),
    'pass'   => getenv('MAILER_PASS'),
    'host'   => getenv('MAILER_HOST'),
    'port'   => getenv('MAILER_PORT'),
    'secure' => getenv('MAILER_SECURE')
];

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

$container->set('mailerConfig', $mailerConfig);

$container->share(Mailer::class, function (Container $c) {
    return new Mailer($c->get('mailerConfig'));
});