<?php

namespace Dwr\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sentence
 *
 * @ORM\Table(name="sentences")
 * @ORM\Entity(repositoryClass="Dwr\FrontendBundle\Entity\SentenceRepository")
 */
class Sentence
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @ORM\ManyToOne(targetEntity="Part", inversedBy="sentences")
     * @ORM\JoinColumn(name="part_id", referencedColumnName="id", nullable=false, onDelete="set null")
     */
    private $part;
    
    /**
     * @ORM\ManyToOne(targetEntity="Subpart", inversedBy="sentences")
     * @ORM\JoinColumn(name="subpart_id", referencedColumnName="id", nullable=false, onDelete="set null")
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
     * Set title
     *
     * @param string $title
     * @return Sentence
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Sentence
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Sentence
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set part
     *
     * @param \Dwr\FrontendBundle\Entity\Part $part
     * @return Sentence
     */
    public function setPart(\Dwr\FrontendBundle\Entity\Part $part)
    {
        $this->part = $part;

        return $this;
    }

    /**
     * Get part
     *
     * @return \Dwr\FrontendBundle\Entity\Part 
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Set subpart
     *
     * @param \Dwr\FrontendBundle\Entity\Subpart $subpart
     * @return Sentence
     */
    public function setSubpart(\Dwr\FrontendBundle\Entity\Subpart $subpart)
    {
        $this->subpart = $subpart;

        return $this;
    }

    /**
     * Get subpart
     *
     * @return \Dwr\FrontendBundle\Entity\Subpart 
     */
    public function getSubpart()
    {
        return $this->subpart;
    }
}
