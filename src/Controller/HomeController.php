<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController
{
    private $twig;

    /**
     *  @var Environment
     */
    public function __construct($twig)
    {
        $this->twig = $twig;
    }

    public function index(): Response
    {
        return new response($this->twig->render('pages/home.html.twig'));
    }

}