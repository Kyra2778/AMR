<?php

namespace CarsBundle\Manager;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\DoctrineBundle\Registry as Doctrine;

/**
 * Abstract manager.
 *
 * @author Nathalie De Sousa <nathalie.de.sousa78@gmail.com>
 */
abstract class AbstractManager
{
    protected $doctrine;

    /**
     * Constructor
     *
     * @param Doctrine $doctrine
     */
    public function __construct(Doctrine $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    /**
     * Get Doctrine
     *
     * @return Doctrine
     */
    public function getDoctrine()
    {
        return $this->doctrine;
    }

    /**
     * Get Repository
     *
     * @return \Doctrine\ORM\EntityManager\EntityRepository
     */
    public function getRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository($this->getEntityClass());
    }

    /**
     * Get EntityManager
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEntityManager()
    {
        return $this->getDoctrine()->getManager();
    }

    /**
     * Add
     * Use the entity manager to add (persist) the given object
     *
     * @param object $entity
     */
    public function add($entity)
    {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();
    }

    /**
     * Update
     * Use the entity manager to update the given object
     *
     * @param object $entity
     */
    public function update($entity)
    {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();
    }

    /**
     * Remove
     * Use the entity manager to remove the given object
     *
     * @param object $entity
     */
    public function delete($entity)
    {
        $this->getEntityManager()->remove($entity);
        $this->getEntityManager()->flush();
    }

    /**
     * Magic call
     * Triger to repository methods call
     */
    public function __call($method, $args)
    {
        return call_user_func_array(array($this->getRepository(), $method), $args);
    }

    /**
     * Get Entity class name
     *
     * @return string
     */
    abstract function getEntityClass();
}

?>