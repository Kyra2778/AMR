<?php

namespace CarsBundle\Manager;

use CarsBundle\Entity\Cars;
use CarsBundle\Manager\AbstractManager;

class CarsManager extends AbstractManager
{
    protected $doctrine;

    public function __construct(Doctrine $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getEntityClass()
    {
        return "CarsBundle:Cars";
    }
}
?>