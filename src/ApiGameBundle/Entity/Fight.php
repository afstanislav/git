<?php

namespace ApiGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fight
 *
 * @ORM\Table(name="fight")
 * @ORM\Entity(repositoryClass="ApiGameBundle\Repository\FightRepository")
 */
class Fight
{
    const FIGHT_ACTIVE = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="proposed_price", type="integer")
     */
    private $proposedPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="proposed_days", type="smallint")
     */
    private $proposedDays;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="smallint")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Developer", inversedBy="fight")
     */
    private $developer;

    /**
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $project;

    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param mixed $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     * Fight constructor.
     */
    public function __construct()
    {
        $this->status = self::FIGHT_ACTIVE;
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
     * Set proposedPrice
     *
     * @param integer $proposedPrice
     *
     * @return Fight
     */
    public function setProposedPrice($proposedPrice)
    {
        $this->proposedPrice = $proposedPrice;

        return $this;
    }

    /**
     * Get proposedPrice
     *
     * @return int
     */
    public function getProposedPrice()
    {
        return $this->proposedPrice;
    }

    /**
     * Set proposedDays
     *
     * @param integer $proposedDays
     *
     * @return Fight
     */
    public function setProposedDays($proposedDays)
    {
        $this->proposedDays = $proposedDays;

        return $this;
    }

    /**
     * Get proposedDays
     *
     * @return int
     */
    public function getProposedDays()
    {
        return $this->proposedDays;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Fight
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getDeveloper()
    {
        return $this->developer;
    }

    /**
     * @param mixed $developer
     */
    public function setDeveloper($developer)
    {
        $this->developer = $developer;
    }
}

