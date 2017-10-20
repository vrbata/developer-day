#Shared services
## Problém
* container vždy vytváří novou instanci třídy i když by nemusel

```php
// index.php
$firstMailer  = $container->get(Mailer::class);
$secondMailer = $container->get(Mailer::class);

var_dump($firstMailer === $secondMailer);

Trace:
Mailer.php:12:  string(18) "Mailer was created"
Mailer.php:12:  string(18) "Mailer was created"
index.php:13:   bool(false)
```

## Řešení
* cachovat vytvořené instance

```php
// index.php
$firstMailer  = $container->get(Mailer::class);
$secondMailer = $container->get(Mailer::class);

var_dump($firstMailer === $secondMailer);

Trace:
Mailer.php:12:  string(18) "Mailer was created"
index.php:13:   bool(true)
```
