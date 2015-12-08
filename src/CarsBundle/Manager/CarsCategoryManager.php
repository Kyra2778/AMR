<?php

namespace CarsBundle\Manager;

use CarsBundle\Entity\CarsCategory;
use CarsBundle\Manager\AbstractManager;

class CarsCategoryManager extends AbstractManager
{
    protected $doctrine;

    public function __construct(Doctrine $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getEntityClass()
    {
        return "CarsBundle:CarsCategory";
    }
}
?>