<?php

namespace CarsBundle\Manager;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\DoctrineBundle\Registry as Doctrine;
use Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher;

use CarsBundle\Entity\CarsBrand;
use CarsBundle\Manager\AbstractManager;

class CarsBrandManager extends AbstractManager
{
    protected $doctrine;

    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getEntityClass()
    {
        return "CarsBundle:CarsBrand";
    }

    /**
     * Delete
     *
     * @see CarsBundle\Manager.AbstractManager::delete()
     */
    public function delete($entity) {
        parent::delete($entity);
    }


    public function deleteCarsBrandById($id)
    {
        $brandCar = $this->find($id);
        $name = $brandCar->getLibelle();
        $this->delete($brandCar);

        return true;
    }
}
?>