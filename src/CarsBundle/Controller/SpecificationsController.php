<?php

namespace CarsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SpecificationsController extends Controller
{
    public function indexAction()
    {
        return $this->render('CarsBundle:Specifications:index.html.twig');
    }

    public function categoryListAction()
    {
        return $this->render('CarsBundle:Specifications:category_list.html.twig', array('categories' => array()));
    }

    public function brandListAction()
    {
        return $this->render('CarsBundle:Specifications:brand_list.html.twig', array('brands' => array()));
    }

    public function addBrandAction()
    {
        // On récupère la requête
        $request = $this->getRequest();

        if ($request->getMethod() = 'POST') {
            /*$name = 'Renault';

            $carsBrandManager = $this->get('cars.carsBrand');
            $brand = $carsBrandManager->newCarsBrand($name);*/
        }
        else {
            return $this->render('CarsBundle:Specifications:brand_add.html.twig', array('brand' => array()));
        }
    }

    public function modelListAction()
    {
        return $this->render('CarsBundle:Specifications:model_list.html.twig', array('models' => array()));
    }
}
