<?php

class Controller
{
    /**
     * @var \Repository
     */
    private $repository;

    /**
     * @var \Template
     */
    private $template;

    public function __construct(Repository $repository, Template $template)
    {
        $this->repository = $repository;
        $this->template   = $template;
    }

    public function show()
    {
        return $this->template->render('base.layout', $this->repository->getData());
    }
}