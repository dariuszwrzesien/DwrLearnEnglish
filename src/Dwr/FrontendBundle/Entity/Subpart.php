<?php

namespace Dwr\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subpart
 *
 * @ORM\Table(name="subparts")
 * @ORM\Entity
 */
class Subpart
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
    /**
     * @ORM\OneToMany(targetEntity="Word", mappedBy="subpart")
     */
    private $words;
    
    /**
     * @ORM\OneToMany(targetEntity="Grammary", mappedBy="subpart")
     */
    private $grammaries;


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
     * Set name
     *
     * @param string $name
     * @return Subpart
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->words = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add words
     *
     * @param \Dwr\FrontendBundle\Entity\Word $words
     * @return Subpart
     */
    public function addWord(\Dwr\FrontendBundle\Entity\Word $words)
    {
        $this->words[] = $words;

        return $this;
    }

    /**
     * Remove words
     *
     * @param \Dwr\FrontendBundle\Entity\Word $words
     */
    public function removeWord(\Dwr\FrontendBundle\Entity\Word $words)
    {
        $this->words->removeElement($words);
    }

    /**
     * Get words
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * Add grammaries
     *
     * @param \Dwr\FrontendBundle\Entity\Grammary $grammaries
     * @return Subpart
     */
    public function addGrammary(\Dwr\FrontendBundle\Entity\Grammary $grammaries)
    {
        $this->grammaries[] = $grammaries;

        return $this;
    }

    /**
     * Remove grammaries
     *
     * @param \Dwr\FrontendBundle\Entity\Grammary $grammaries
     */
    public function removeGrammary(\Dwr\FrontendBundle\Entity\Grammary $grammaries)
    {
        $this->grammaries->removeElement($grammaries);
    }

    /**
     * Get grammaries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrammaries()
    {
        return $this->grammaries;
    }
}
