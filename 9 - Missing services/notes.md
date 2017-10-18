#Chybějící services
## Problém
* container nenajde požadovanou service
* Fatal error vs Exception
* Typy exceptions
```php
$logger = $container->get(\App\Logger::class);
$logger = app()->make(\App\Logger::class);
$logger = app()->get(\App\Logger::class);
```
## Laravel
```php
ReflectionException: Class App\Logger does not exist
```
```php
Illuminate\Contracts\Container\BindingResolutionException: Target [App\Logger] is not instantiable.
```
```php
Illuminate\Container\EntryNotFoundException
```

## Symfony
```php
Symfony\Component\DependencyInjection\Exception\AutowiringFailedException
```
```php
Symfony\Component\Debug\Exception\ClassNotFoundException
```
```php
Symfony\Component\DependencyInjection\Exception\AutowiringFailedException: Cannot autowire service "AppBundle\Controller\HomeController": argument "$logger" of method "__construct()" references class "AppBundle\Logger" but no such service exists.
```
```php
Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException
```