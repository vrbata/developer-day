#Cyklická závislost
## Problém
* Třída A potřebuje třídu B, která potřebuje třídu A
* Jak se o problému dozvím? On demand vs kompilace
```php
class A
{
    public function __construct(B $b)
    {
        $this->b = $b;
    }
}
```
```php
class B
{
    public function __construct(A $a)
    {
        $this->a = $a;
    }
}
```
## Laravel
```php
PHP Fatal error:  Maximum function nesting level of '1000' reached, aborting!
[:error] PHP 998. Illuminate\\Container\\Container->resolve() /laravel/vendor/laravel/framework/.../Container.php:586
[:error] PHP 999. Illuminate\\Container\\Container->getContextualConcrete() /laravel/vendor/laravel/framework/.../Container.php:613
[:error] PHP 1000. Illuminate\\Container\\Container->findInContextualBindings() /laravel/vendor/laravel/framework/.../Container.php:692

```

## Symfony
```php
Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException
```