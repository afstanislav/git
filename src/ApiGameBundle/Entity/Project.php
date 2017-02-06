<?php

namespace ApiGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="ApiGameBundle\Repository\ProjectRepository")
 */
class Project
{
    const PROJECT_ACTIVE = 1;

    const PROJECT_FINISHED = 2;

    /**
     * @var array
     */
    public static $levels = [
        'easy'   => 1,
        'medium' => 2,
        'hard'   => 3,
    ];
    
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="smallint")
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="experience_points", type="smallint")
     */
    private $experiencePoints;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="smallint")
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="days", type="smallint")
     */
    private $days;

    /**
     * Project constructor.
     */
    public function __construct()
    {
        $this->status = self::PROJECT_ACTIVE;
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
     * @return Project
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
     * Set level
     *
     * @param integer $level
     *
     * @return Project
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set experiencePoints
     *
     * @param integer $experiencePoints
     *
     * @return Project
     */
    public function setExperiencePoints($experiencePoints)
    {
        $this->experiencePoints = $experiencePoints;

        return $this;
    }

    /**
     * Get experiencePoints
     *
     * @return int
     */
    public function getExperiencePoints()
    {
        return $this->experiencePoints;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @param int $days
     */
    public function setDays($days)
    {
        $this->days = $days;
    }
}

