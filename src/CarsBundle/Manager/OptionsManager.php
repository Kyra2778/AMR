<?php

namespace CarsBundle\Manager;

use CarsBundle\Entity\Options;
use CarsBundle\Manager\AbstractManager;

class OptionsManager extends AbstractManager
{
    protected $doctrine;

    public function __construct(Doctrine $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getEntityClass()
    {
        return "CarsBundle:Options";
    }
}
?>