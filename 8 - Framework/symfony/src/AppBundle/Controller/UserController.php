<?php

namespace AppBundle\Controller;

use AppBundle\ArticleRepository;
use AppBundle\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * @var \AppBundle\UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository    = $userRepository;
    }

    /**
     * @Route("/user", name="user")
     */
    public function indexAction(Request $request)
    {
        return new Response('');
    }
}
