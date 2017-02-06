<?php

namespace ApiGameBundle\Utils\DeveloperLevelStrategy;

/**
 * Class DeveloperLevelStrategyContext
 */
class DeveloperLevelStrategyContext
{
    /**
     * @var SkillsStrategyDeveloperLevel|null
     */
    private $strategy = NULL;

    /**
     * DeveloperLevelStrategyContext constructor.
     *
     * @param $strategy
     */
    public function __construct($strategy)
    {
        switch ($strategy){
            case 'random':
                $this->strategy = new RandomStrategyDeveloperLevel();
                break;
            case 'skills':
                $this->strategy = new SkillsStrategyDeveloperLevel();
                break;
        }
    }

    /**
     * @param $developer
     *
     * @return int
     */
    public function getStartLevel($developer)
    {
        return $this->strategy->getStartDeveloperLevel($developer);
    }
}