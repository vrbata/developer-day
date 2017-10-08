#Dependency injection


```php
class Controller
{
    private $model;
    
    private $template;
    
    public function __construct(Model $model, Template $template)
    {
        $this->model = $model;
        $this->tempalte = $template;
    }
    
    public function show()
    {
        return $this->template->render('base.layout', $this->model->getData());
    }
}
```