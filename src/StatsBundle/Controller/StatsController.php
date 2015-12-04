<?php

namespace StatsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatsController extends Controller
{
    public function indexAction()
    {
        return $this->render('StatsBundle:Stats:index.html.twig');
    }
}
