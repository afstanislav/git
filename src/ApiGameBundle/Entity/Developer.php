<?php

namespace ApiGameBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * Developer
 *
 * @ORM\Table(name="developer")
 * @ORM\Entity(repositoryClass="ApiGameBundle\Repository\DeveloperRepository")
 */
class Developer
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
     * @ORM\Column(name="nickname", type="string", length=100, unique=true)
     */
    private $nickname;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_line", type="string", length=255, nullable=true)
     */
    private $tagLine;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="smallint", nullable=true)
     */
    private $level;

    /**
     * @ORM\ManyToMany(targetEntity="DeveloperSkills", inversedBy="developer", cascade={"persist"})
     * @ORM\JoinTable(name="developer_to_skills")
     */
    private $skills;

    /**
     * @ORM\OneToMany(targetEntity="Fight", mappedBy="developer", cascade={"persist"})
     */
    private $fight;

    /**
     * Developer constructor.
     */
    public function __construct()
    {
        $this->skills = new ArrayCollection();
        $this->fight = new ArrayCollection();
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
     * Set nickname
     *
     * @param string $nickname
     *
     * @return Developer
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set tagLine
     *
     * @param string $tagLine
     *
     * @return Developer
     */
    public function setTagLine($tagLine)
    {
        $this->tagLine = $tagLine;

        return $this;
    }

    /**
     * Get tagLine
     *
     * @return string
     */
    public function getTagLine()
    {
        return $this->tagLine;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Developer
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
     * @param DeveloperSkills $skills
     */
    public function addSkills(DeveloperSkills $skills)
    {
        $this->skills->add($skills);
    }

    /**
     * @param DeveloperSkills $skills
     */
    public function removeSkills(DeveloperSkills $skills)
    {
        $this->skills->removeElement($skills);
    }

    /**
     * @return mixed
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param $skills
     *
     * @return $this
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * @param Fight $fight
     */
    public function addFight(Fight $fight)
    {
        $this->fight->add($fight);
    }

    /**
     * @param Fight $fight
     */
    public function removeFight(Fight $fight)
    {
        $this->fight->removeElement($fight);
    }
}

