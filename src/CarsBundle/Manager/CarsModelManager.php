<?php

namespace CarsBundle\Manager;

use CarsBundle\Entity\CarsModel;
use CarsBundle\Manager\AbstractManager;

class CarsModelManager extends AbstractManager
{
    protected $doctrine;

    public function __construct(Doctrine $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getEntityClass()
    {
        return "CarsBundle:CarsModel";
    }
}
?>