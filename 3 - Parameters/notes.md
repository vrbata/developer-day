#Parametry
## Problém
* pro vytvoření instance třídy potřebujeme jednoduché datové typy (int, string, array...)

```php
// index.php
$config = [
    'user' => 'john.doe@example.com',
    'pass' => 'rP745A*_',
    'host' => 'smtp.gmail.com',
    'port' => '465',
    'secure' => 'ssl'
];

$mailer = new Mailer($config);
$mailer->send();

```

## Řešení
* přidat parametry do containeru

```php
// index.php
$mailer = $container->get(Mailer::class);
$mailer->send();
```