<?php

namespace CarsBundle\Manager;

use CarsBundle\Entity\CarsOptions;
use CarsBundle\Manager\AbstractManager;

class CarsOptionsManager extends AbstractManager
{
    protected $doctrine;

    public function __construct(Doctrine $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getEntityClass()
    {
        return "CarsBundle:CarsOptions";
    }
}
?>