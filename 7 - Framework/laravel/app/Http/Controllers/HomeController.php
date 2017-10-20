<?php

namespace App\Http\Controllers;

use App\ArticleRepository;
use App\UserRepository;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    /**
     * @var \App\UserRepository
     */
    private $userRepository;
    /**
     * @var \App\ArticleRepository
     */
    private $articleRepository;

    public function __construct(UserRepository $userRepository, ArticleRepository $articleRepository)
    {
        $this->userRepository    = $userRepository;
        $this->articleRepository = $articleRepository;
    }

    public function show()
    {
        return '';
    }
}
