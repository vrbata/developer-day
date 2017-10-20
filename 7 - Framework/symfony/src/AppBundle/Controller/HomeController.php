<?php

namespace AppBundle\Controller;

use AppBundle\ArticleRepository;
use AppBundle\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * @var \AppBundle\UserRepository
     */
    private $userRepository;

    /**
     * @var \AppBundle\ArticleRepository
     */
    private $articleRepository;

    public function __construct(UserRepository $userRepository, ArticleRepository $articleRepository)
    {
        $this->userRepository    = $userRepository;
        $this->articleRepository = $articleRepository;
    }

    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        return new Response('');
    }
}
