<?php

namespace Dwr\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Word
 *
 * @ORM\Table(name="words")
 * @ORM\Entity(repositoryClass="Dwr\FrontendBundle\Entity\WordRepository")
 */
class Word
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
     * @ORM\Column(name="english", type="string", length=255, nullable=true)
     */
    private $english;

    /**
     * @var string
     *
     * @ORM\Column(name="polish", type="string", length=255, nullable=true)
     */
    private $polish;

    /**
     * @ORM\ManyToOne(targetEntity="Part", inversedBy="words")
     * @ORM\JoinColumn(name="part_id", referencedColumnName="id", nullable=false)
     */
    private $part;
    
    /**
     * @ORM\ManyToOne(targetEntity="Subpart", inversedBy="words")
     * @ORM\JoinColumn(name="subpart_id", referencedColumnName="id", nullable=false)
     */
    private $subpart;

    
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
     * Set english
     *
     * @param string $english
     * @return Word
     */
    public function setEnglish($english)
    {
        $this->english = $english;

        return $this;
    }

    /**
     * Get english
     *
     * @return string 
     */
    public function getEnglish()
    {
        return $this->english;
    }

    /**
     * Set polish
     *
     * @param string $polish
     * @return Word
     */
    public function setPolish($polish)
    {
        $this->polish = $polish;

        return $this;
    }

    /**
     * Get polish
     *
     * @return string 
     */
    public function getPolish()
    {
        return $this->polish;
    }

    /**
     * Set part
     *
     * @param string $part
     * @return Word
     */
    public function setPart($part)
    {
        $this->part = $part;

        return $this;
    }

    /**
     * Get part
     *
     * @return string 
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Set subpart
     *
     * @param string $subpart
     * @return Word
     */
    public function setSubpart($subpart)
    {
        $this->subpart = $subpart;

        return $this;
    }

    /**
     * Get subpart
     *
     * @return string 
     */
    public function getSubpart()
    {
        return $this->subpart;
    }
}
