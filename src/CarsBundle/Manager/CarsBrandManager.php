<?php

namespace CarsBundle\Manager;

use Symfony\Component\HttpFoundation\Response;

use CarsBundle\Entity\CarsBrand;
use CarsBundle\Manager\AbstractManager;

class CarsBrandManager extends AbstractManager
{
    protected $doctrine;

    public function __construct(Doctrine $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getEntityClass()
    {
        return "CarsBundle:CarsBrand";
    }

    /**
     * Get Doctrine
     *
     * @see CarsBundle\Manager.AbstractManager::getDoctrine()
     */
    public function getDoctrine()
    {
        return $this->doctrine;
    }

    /**
     * Add
     *
     * @see CarsBundle\Manager.AbstractManager::add()
     */
    public function add($entity) {
        parent::add($entity);
    }


    public function newCarsBrand($name)
    {
        $carsBrand = new CarsBrand();
        $carsBrand->setLibelle($name);
        $this->add($carsBrand);

        $this->get('session')->getFlashBag()->add('info', 'La marque ' .$name. ' a bien été enregistrée.');
        return $carsBrand;
    }
}
?>