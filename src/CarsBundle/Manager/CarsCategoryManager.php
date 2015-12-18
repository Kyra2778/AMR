<?php

namespace CarsBundle\Manager;

use CarsBundle\Entity\CarsCategory;
use CarsBundle\Manager\AbstractManager;

class CarsCategoryManager extends AbstractManager
{
    protected $doctrine;

    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getEntityClass()
    {
        return "CarsBundle:CarsCategory";
    }

    /**
     * Delete
     *
     * @see CarsBundle\Manager.AbstractManager::delete()
     */
    public function delete($entity) {
        parent::delete($entity);
    }


    public function deleteCarsCategoryById($id)
    {
        $categoryCar = $this->find($id);
        $name = $categoryCar->getLibelle();
        $this->delete($categoryCar);

        return true;
    }
}
?>