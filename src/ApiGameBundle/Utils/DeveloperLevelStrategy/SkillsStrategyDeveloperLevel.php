<?php

namespace ApiGameBundle\Utils\DeveloperLevelStrategy;

/**
 * Class SkillsStrategyDeveloperLevel
 */
class SkillsStrategyDeveloperLevel implements DeveloperLevelStrategyInterface
{
    const MAX_LIMIT_RATIO = 150;

    /**
     * @param $developer
     *
     * @return int
     */
    public function getStartDeveloperLevel($developer)
    {
        $sumRatio = 0;

        foreach ($developer->getSkills() as $skill) {
            $sumRatio += $skill->getRatio();
        }

        return floor($sumRatio * 100 / self::MAX_LIMIT_RATIO);
    }
}