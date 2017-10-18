# Container lifecycle
```php
$container = new ContainerBuilder();
```
```php
// bundles, environment, debug mode...
$container->getParameterBag()->add($this->getKernelParameters());
```

```php
// přidání definice vlastních services a parametrů
foreach ($this->bundles as $bundle) {
    $bundle->build($container);
}
```

```php
// kompilace containeru
$container->compile();
```

```php
// compiler.php
foreach ($this->passConfig->getPasses() as $pass) {
    $pass->process($container); // AutowirePass, CheckCircularReferencesPass...
}
```

```php
$this->parameterBag = new FrozenParameterBag($this->parameterBag->all());
$this->compiled = true;
```

```php
$this->dumpContainer($cache, $container, $class, $this->getContainerBaseClass());
```