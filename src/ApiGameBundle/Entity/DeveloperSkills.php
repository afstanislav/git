<?php

namespace ApiGameBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * DeveloperSkills
 *
 * @ORM\Table(name="developer_skills")
 * @ORM\Entity(repositoryClass="ApiGameBundle\Repository\DeveloperSkillsRepository")
 */
class DeveloperSkills
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
     * @ORM\Column(name="name", type="string", length=50, unique=true)
     */
    protected $name;

    /**
     * @var int
     *
     * @ORM\Column(name="ratio", type="smallint")
     */
    private $ratio;

    /**
     * @ORM\ManyToMany(targetEntity="Developer", mappedBy="skills")
     */
    private $developer;

    /**
     * DeveloperSkills constructor.
     */
    public function __construct()
    {
        $this->developer = new ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     *
     * @return DeveloperSkills
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
     * Set ratio
     *
     * @param integer $ratio
     *
     * @return DeveloperSkills
     */
    public function setRatio($ratio)
    {
        $this->ratio = $ratio;

        return $this;
    }

    /**
     * Get ratio
     *
     * @return int
     */
    public function getRatio()
    {
        return $this->ratio;
    }
}

