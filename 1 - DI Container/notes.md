#DI Container

```php
$mailer = $container->get(Mailer::class);
$mailer = app()->make(Mailer::class);
```

```php
class Container
{
    public function set($class)
    
    public function get($class)   
}
```