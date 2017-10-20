#Framework
```php
class HomeController
{
    public function __construct(UserRepository $userRepository, ArticleRepository $articleRepository)
    {
        $this->userRepository    = $userRepository;
        $this->articleRepository = $articleRepository;
    }
}
```
```php
class UserRepository
{
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
}
```
```php
class ArticleRepository
{
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
}
```
## Laravel
```php
dependency-injection/8 - Framework/laravel/app/Logger.php:9:string 'App\Logger was constructed' (length=26)
dependency-injection/8 - Framework/laravel/app/Logger.php:9:string 'App\Logger was constructed' (length=26)
```

## Symfony
```php
dependency-injection/8 - Framework/symfony/src/AppBundle/Logger.php:9:string 'AppBundle\Logger was created' (length=28)
```
```php
protected function getAppBundle_Controller_HomeControllerService()
{
    $a = new \AppBundle\Logger();
    
    return $this->services['AppBundle\Controller\HomeController'] =
    new \AppBundle\Controller\HomeController(
        new \AppBundle\UserRepository($a),
        new \AppBundle\ArticleRepository($a)
        );
}
```

```php
class UserController extends Controller
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
```

```php
protected function getAppBundle_Controller_HomeControllerService()
{
    return $this->services['AppBundle\Controller\HomeController'] =
    new \AppBundle\Controller\HomeController(
    ${(
        $_ = isset($this->services['AppBundle\UserRepository'])
        ? $this->services['AppBundle\UserRepository']
        : $this->getAppBundle_UserRepositoryService()
    ) && false ?: '_'},
    new \AppBundle\ArticleRepository(
    ${(
        $_ = isset($this->services['AppBundle\Logger'])
        ? $this->services['AppBundle\Logger'] :
        $this->getAppBundle_LoggerService()
    ) && false ?: '_'}));
}
```


```yaml
# app/config/services.yml
services:
    # default configuration for services in *this* file
    _defaults:
        # automatically injects dependencies in your services
        autowire: true
        # automatically registers your services as commands, event subscribers, etc.
        autoconfigure: true
        # this means you cannot fetch services directly from the container via $container->get()
        # if you need to do this, you can override this setting on individual services
        public: false

    # makes classes in src/AppBundle available to be used as services
    # this creates a service per class whose id is the fully-qualified class name
    AppBundle\:
        resource: '../../src/AppBundle/*'
        # you can exclude directories or files
        # but if a service is unused, it's removed anyway
        exclude: '../../src/AppBundle/{Entity,Repository,Tests}'
```