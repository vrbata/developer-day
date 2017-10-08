#On demand loading
## Problém
* container vytvoří všechny instance
* až následně se vykoná kód samotné aplikace

```php
// index.php
$mailer = $container->get(Mailer::class);
$mailer->send();

Trace:
Container.php:9:        string(21) "Container was created"
Model.php:7:            string(17) "Model was created"
Template.php:7:         string(20) "Template was created"
Controller.php:21:      string(22) "Controller was created"
Mailer.php:7:           string(18) "Mailer was created"
Mailer.php:12:          string(29) "Mailer method send was called"
```

## Řešení
* vytvářet instance až v moment, kdy jsou skutečně potřebné

```php
// index.php
$mailer = $container->get(Mailer::class);
$mailer->send();

Trace:
Container.php:9:        string(21) "Container was created"
Mailer.php:7:           string(18) "Mailer was created"
Mailer.php:12:          string(29) "Mailer method send was called"
```
* jako bonus řeší i nezávislost pořadí
```php
// index.php
$mailer = $container->get(Mailer::class);
$mailer->send();

Trace:
Container.php:9:        string(21) "Container was created"
Controller.php:21:      string(22) "Controller was created"
Model.php:7:            string(17) "Model was created"
Template.php:7:         string(20) "Template was created"
Mailer.php:12:          string(29) "Controller method show was called"
```