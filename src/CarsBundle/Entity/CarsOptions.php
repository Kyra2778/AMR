<?php

namespace CarsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarsOptions
 *
 * @ORM\Table(name="cars_options")
 * @ORM\Entity(repositoryClass="CarsBundle\Repository\CarsOptionsRepository")
 */
class CarsOptions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="cars", type="integer")
     */
    private $cars;

    /**
     * @var int
     *
     * @ORM\Column(name="options", type="integer")
     */
    private $options;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cars
     *
     * @param integer $cars
     *
     * @return CarsOptions
     */
    public function setCars($cars)
    {
        $this->cars = $cars;

        return $this;
    }

    /**
     * Get cars
     *
     * @return int
     */
    public function getCars()
    {
        return $this->cars;
    }

    /**
     * Set options
     *
     * @param integer $options
     *
     * @return CarsOptions
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get options
     *
     * @return int
     */
    public function getOptions()
    {
        return $this->options;
    }
}

