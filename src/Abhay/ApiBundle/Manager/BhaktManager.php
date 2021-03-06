<?php

namespace Abhay\ApiBundle\Manager;

use Symfony\Component\Security\Core\SecurityContextInterface;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;
use Symfony\Component\Validator\ValidatorInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\ConstraintViolationList;
use Abhay\ApiBundle\Entity\Bhakt;

/**
 * Bhakt Manager
 */
class BhaktManager 
{
   
    protected $doctrine;
   
    public function __construct(Doctrine $doctrine)
    {
        $this->doctrine = $doctrine; 
    }

     
    public function load($bhaktId = null)
    {
        

       
    }

    /**
     * Load All Filter groups
     *
     * @return array
     */
    public function loadAll()
    {
        $er = $this->doctrine->getManager()->getRepository('AbhayApiBundle:Bhakt');
        return $er->retrieveAll();
    }
    public function add($requestParams)
    {
        $bhakt = new bhakt();
        $bhakt->setAttributes($requestParams);
        $em = $this->doctrine->getManager();
        $em->persist($bhakt);
        $em->flush();
        return $bhakt;
    }

    
}

