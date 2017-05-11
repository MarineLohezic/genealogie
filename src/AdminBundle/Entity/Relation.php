<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relation
 *
 * @ORM\Table(name="relation")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\RelationRepository")
 */
class Relation
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
     * @var string
     *
     * @ORM\Column(name="typeRelation", type="string", length=255)
     */
    private $typeRelation;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    
    

    /**
     * Set typeRelation
     *
     * @param string $typeRelation
     *
     * @return Relation
     */
    public function setTypeRelation($typeRelation)
    {
        $this->typeRelation = $typeRelation;

        return $this;
    }

    /**
     * Get typeRelation
     *
     * @return string
     */
    public function getTypeRelation()
    {
        return $this->typeRelation;
    }
}
