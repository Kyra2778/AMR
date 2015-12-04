<?php

namespace CarsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OptionsController extends Controller
{
    public function indexAction()
    {
        return $this->render('CarsBundle:Options:index.html.twig');
    }
}
