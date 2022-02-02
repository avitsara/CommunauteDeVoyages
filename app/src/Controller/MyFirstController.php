<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MyFirstController extends AbstractController
{
    public function index() {
        return $this->render('distinct/index.html.twig');
    }
}