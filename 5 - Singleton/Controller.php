<?php

class Controller
{
    /**
     * @var \Model
     */
    private $model;

    /**
     * @var \Template
     */
    private $template;

    public function __construct(Model $model, Template $template)
    {
        $this->model    = $model;
        $this->template = $template;
    }

    public function show()
    {
        return $this->template->render('base.layout', $this->model->getData());
    }
}