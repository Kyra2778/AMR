<?php

namespace CarsBundle\Entity;

use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\ORM\Mapping\ManyToMany;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cars
 *
 * @ORM\Table(name="cars")
 * @ORM\Entity(repositoryClass="CarsBundle\Repository\CarsRepository")
 */
class Cars
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
     * @ORM\Column(name="category", type="integer")
     */
    private $category;

    /**
     * @var int
     *
     * @ORM\Column(name="model", type="integer")
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255)
     */
    private $version;

    /**
     * @var CarsBundle\Entity\Options $options
     *
     * @ManyToMany(targetEntity="CarsBundle\Entity\Options", cascade={"persist"})
     * @JoinColumn(nullable=false)
     */
    private $options;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMeC", type="date")
     */
    private $dateMeC;

    /**
     * @var int
     *
     * @ORM\Column(name="kilometrage", type="integer")
     */
    private $kilometrage;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPortes", type="integer")
     */
    private $nbPortes;

    /**
     * @var string
     *
     * @ORM\Column(name="puissanceFiscale", type="string", length=6)
     */
    private $puissanceFiscale;

    /**
     * @var string
     *
     * @ORM\Column(name="puissanceDin", type="string", length=10)
     */
    private $puissanceDin;

    /**
     * @var string
     *
     * @ORM\Column(name="boiteVitesse", type="string", length=25)
     */
    private $boiteVitesse;

    /**
     * @var string
     *
     * @ORM\Column(name="energie", type="string", length=25)
     */
    private $energie;

    /**
     * @var string
     *
     * @ORM\Column(name="couleurInterieure", type="string", length=50)
     */
    private $couleurInterieure;

    /**
     * @var string
     *
     * @ORM\Column(name="couleurExterieure", type="string", length=50)
     */
    private $couleurExterieure;

    /**
     * @var bool
     *
     * @ORM\Column(name="firstHand", type="boolean")
     */
    private $firstHand;

    /**
     * @var int
     *
     * @ORM\Column(name="volumeCoffre", type="integer")
     */
    private $volumeCoffre;

    /**
     * @var int
     *
     * @ORM\Column(name="co2Emission", type="integer")
     */
    private $co2Emission;

    /**
     * @var string
     *
     * @ORM\Column(name="consommationVille", type="decimal", precision=4, scale=2)
     */
    private $consommationVille;

    /**
     * @var string
     *
     * @ORM\Column(name="consommationRoute", type="decimal", precision=4, scale=2)
     */
    private $consommationRoute;

    /**
     * @var string
     *
     * @ORM\Column(name="garantie", type="string", length=25)
     */
    private $garantie;

    /**
     * @var int
     *
     * @ORM\Column(name="prixAchat", type="integer")
     */
    private $prixAchat;

    /**
     * @var int
     *
     * @ORM\Column(name="prixTTCVoulu", type="integer")
     */
    private $prixTTCVoulu;

    /**
     * @var int
     *
     * @ORM\Column(name="prixTTCReel", type="integer")
     */
    private $prixTTCReel;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text")
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;


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
     * Set category
     *
     * @param integer $category
     *
     * @return Cars
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set model
     *
     * @param integer $model
     *
     * @return Cars
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return int
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set version
     *
     * @param string $version
     *
     * @return Cars
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set dateMeC
     *
     * @param \DateTime $dateMeC
     *
     * @return Cars
     */
    public function setDateMeC($dateMeC)
    {
        $this->dateMeC = $dateMeC;

        return $this;
    }

    /**
     * Get dateMeC
     *
     * @return \DateTime
     */
    public function getDateMeC()
    {
        return $this->dateMeC;
    }

    /**
     * Set kilometrage
     *
     * @param integer $kilometrage
     *
     * @return Cars
     */
    public function setKilometrage($kilometrage)
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    /**
     * Get kilometrage
     *
     * @return int
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    /**
     * Set nbPortes
     *
     * @param integer $nbPortes
     *
     * @return Cars
     */
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }

    /**
     * Get nbPortes
     *
     * @return int
     */
    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    /**
     * Set puissanceFiscale
     *
     * @param string $puissanceFiscale
     *
     * @return Cars
     */
    public function setPuissanceFiscale($puissanceFiscale)
    {
        $this->puissanceFiscale = $puissanceFiscale;

        return $this;
    }

    /**
     * Get puissanceFiscale
     *
     * @return string
     */
    public function getPuissanceFiscale()
    {
        return $this->puissanceFiscale;
    }

    /**
     * Set puissanceDin
     *
     * @param string $puissanceDin
     *
     * @return Cars
     */
    public function setPuissanceDin($puissanceDin)
    {
        $this->puissanceDin = $puissanceDin;

        return $this;
    }

    /**
     * Get puissanceDin
     *
     * @return string
     */
    public function getPuissanceDin()
    {
        return $this->puissanceDin;
    }

    /**
     * Set boiteVitesse
     *
     * @param string $boiteVitesse
     *
     * @return Cars
     */
    public function setBoiteVitesse($boiteVitesse)
    {
        $this->boiteVitesse = $boiteVitesse;

        return $this;
    }

    /**
     * Get boiteVitesse
     *
     * @return string
     */
    public function getBoiteVitesse()
    {
        return $this->boiteVitesse;
    }

    /**
     * Set energie
     *
     * @param string $energie
     *
     * @return Cars
     */
    public function setEnergie($energie)
    {
        $this->energie = $energie;

        return $this;
    }

    /**
     * Get energie
     *
     * @return string
     */
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * Set couleurInterieure
     *
     * @param string $couleurInterieure
     *
     * @return Cars
     */
    public function setCouleurInterieure($couleurInterieure)
    {
        $this->couleurInterieure = $couleurInterieure;

        return $this;
    }

    /**
     * Get couleurInterieure
     *
     * @return string
     */
    public function getCouleurInterieure()
    {
        return $this->couleurInterieure;
    }

    /**
     * Set couleurExterieure
     *
     * @param string $couleurExterieure
     *
     * @return Cars
     */
    public function setCouleurExterieure($couleurExterieure)
    {
        $this->couleurExterieure = $couleurExterieure;

        return $this;
    }

    /**
     * Get couleurExterieure
     *
     * @return string
     */
    public function getCouleurExterieure()
    {
        return $this->couleurExterieure;
    }

    /**
     * Set firstHand
     *
     * @param boolean $firstHand
     *
     * @return Cars
     */
    public function setFirstHand($firstHand)
    {
        $this->firstHand = $firstHand;

        return $this;
    }

    /**
     * Get firstHand
     *
     * @return bool
     */
    public function getFirstHand()
    {
        return $this->firstHand;
    }

    /**
     * Set volumeCoffre
     *
     * @param integer $volumeCoffre
     *
     * @return Cars
     */
    public function setVolumeCoffre($volumeCoffre)
    {
        $this->volumeCoffre = $volumeCoffre;

        return $this;
    }

    /**
     * Get volumeCoffre
     *
     * @return int
     */
    public function getVolumeCoffre()
    {
        return $this->volumeCoffre;
    }

    /**
     * Set co2Emission
     *
     * @param integer $co2Emission
     *
     * @return Cars
     */
    public function setCo2Emission($co2Emission)
    {
        $this->co2Emission = $co2Emission;

        return $this;
    }

    /**
     * Get co2Emission
     *
     * @return int
     */
    public function getCo2Emission()
    {
        return $this->co2Emission;
    }

    /**
     * Set consommationVille
     *
     * @param string $consommationVille
     *
     * @return Cars
     */
    public function setConsommationVille($consommationVille)
    {
        $this->consommationVille = $consommationVille;

        return $this;
    }

    /**
     * Get consommationVille
     *
     * @return string
     */
    public function getConsommationVille()
    {
        return $this->consommationVille;
    }

    /**
     * Set consommationRoute
     *
     * @param string $consommationRoute
     *
     * @return Cars
     */
    public function setConsommationRoute($consommationRoute)
    {
        $this->consommationRoute = $consommationRoute;

        return $this;
    }

    /**
     * Get consommationRoute
     *
     * @return string
     */
    public function getConsommationRoute()
    {
        return $this->consommationRoute;
    }

    /**
     * Set garantie
     *
     * @param string $garantie
     *
     * @return Cars
     */
    public function setGarantie($garantie)
    {
        $this->garantie = $garantie;

        return $this;
    }

    /**
     * Get garantie
     *
     * @return string
     */
    public function getGarantie()
    {
        return $this->garantie;
    }

    /**
     * Set prixAchat
     *
     * @param integer $prixAchat
     *
     * @return Cars
     */
    public function setPrixAchat($prixAchat)
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    /**
     * Get prixAchat
     *
     * @return int
     */
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * Set prixTTCVoulu
     *
     * @param integer $prixTTCVoulu
     *
     * @return Cars
     */
    public function setPrixTTCVoulu($prixTTCVoulu)
    {
        $this->prixTTCVoulu = $prixTTCVoulu;

        return $this;
    }

    /**
     * Get prixTTCVoulu
     *
     * @return int
     */
    public function getPrixTTCVoulu()
    {
        return $this->prixTTCVoulu;
    }

    /**
     * Set prixTTCReel
     *
     * @param integer $prixTTCReel
     *
     * @return Cars
     */
    public function setPrixTTCReel($prixTTCReel)
    {
        $this->prixTTCReel = $prixTTCReel;

        return $this;
    }

    /**
     * Get prixTTCReel
     *
     * @return int
     */
    public function getPrixTTCReel()
    {
        return $this->prixTTCReel;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     *
     * @return Cars
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Cars
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}

