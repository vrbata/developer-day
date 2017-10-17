<?php

class IndexController extends ControllerBase
{
    public function indexAction()
    {
        $userRepository    = $this->di->get(App\UserRepository::class);
        $articleRepository = $this->di->get(App\ArticleRepository::class);
    }
}

