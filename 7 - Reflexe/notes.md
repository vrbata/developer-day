#Reflexe
## Problém
* container musí obsahovat definice všech závislostí předem

```php
// bootstrap.php
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

// index.php
$controller = $container->get(Controler::class);
```

## Řešení
* závislosti zjišťovat dynamicky pomocí reflexe

```php
// boostrap.php
$container = new Container();

// index.php
$controller = $container->get(Controler::class);
```
