<?php

namespace AppBundle\Controller;

class HomeController extends Controller
{
    /**
     * @var \AppBundle\UserRepository
     */
    private $repository;

    public function __construct(\AppBundle\UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        return new Response('');
    }
}
