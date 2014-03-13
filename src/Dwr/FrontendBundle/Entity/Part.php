<?php

namespace Dwr\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Part
 *
 * @ORM\Table(name="parts")
 * @ORM\Entity
 */
class Part
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
     * @ORM\OneToMany(targetEntity="Word", mappedBy="part")
     */
    private $words;
    
    /**
     * @ORM\OneToMany(targetEntity="Grammary", mappedBy="part")
     */
    private $grammaries;
    
    /**
     * @ORM\OneToMany(targetEntity="Sentence", mappedBy="part")
     */
    private $sentences;


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
     * @return Part
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
        $this->word = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add word
     *
     * @param \Dwr\FrontendBundle\Entity\Word $word
     * @return Part
     */
    public function addWord(\Dwr\FrontendBundle\Entity\Word $word)
    {
        $this->word[] = $word;

        return $this;
    }

    /**
     * Remove word
     *
     * @param \Dwr\FrontendBundle\Entity\Word $word
     */
    public function removeWord(\Dwr\FrontendBundle\Entity\Word $word)
    {
        $this->word->removeElement($word);
    }

    /**
     * Get word
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWord()
    {
        return $this->word;
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
     * @return Part
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

    /**
     * Add sentences
     *
     * @param \Dwr\FrontendBundle\Entity\Sentence $sentences
     * @return Part
     */
    public function addSentence(\Dwr\FrontendBundle\Entity\Sentence $sentences)
    {
        $this->sentences[] = $sentences;

        return $this;
    }

    /**
     * Remove sentences
     *
     * @param \Dwr\FrontendBundle\Entity\Sentence $sentences
     */
    public function removeSentence(\Dwr\FrontendBundle\Entity\Sentence $sentences)
    {
        $this->sentences->removeElement($sentences);
    }

    /**
     * Get sentences
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSentences()
    {
        return $this->sentences;
    }
}
