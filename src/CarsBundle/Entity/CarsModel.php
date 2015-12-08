<?php

namespace CarsBundle\Entity;

use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\ORM\Mapping\ManyToOne;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarsModel
 *
 * @ORM\Table(name="cars_model")
 * @ORM\Entity(repositoryClass="CarsBundle\Repository\CarsModelRepository")
 */
class CarsModel
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
     * @var CarsBundle\Entity\CarsBrand $brand
     *
     * @ManyToOne(targetEntity="CarsBundle\Entity\CarsBrand")
     * @JoinColumn(nullable=false)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return CarsModel
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}

