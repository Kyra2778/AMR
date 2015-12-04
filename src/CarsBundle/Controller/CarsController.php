<?php

namespace CarsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CarsController extends Controller
{
    public function homeAction()
    {
        return $this->render('CarsBundle:Cars:home.html.twig');
    }

    public function indexAction()
    {
        return $this->render('CarsBundle:Cars:index.html.twig');
    }

    public function allAction()
    {
        $cars = array();

        $cars[] = array(
            'marque' => 'Renault',
            'modele' => 'Megane 3 Estate',
            'type' => 'Particulier',
            'annee' => '2011',
        );

        $cars[] = array(
            'marque' => 'Peugeot',
            'modele' => '308 SW',
            'type' => 'Particulier',
            'annee' => '2010',
        );

        return $this->render('CarsBundle:Cars:list.html.twig', array('cars' => $cars));
    }
}
