<?php

namespace CarsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SpecificationsController extends Controller
{
    public function indexAction()
    {
        return $this->render('CarsBundle:Specifications:index.html.twig');
    }
}
