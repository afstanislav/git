<?php

namespace ApiGameBundle\Utils\DeveloperLevelStrategy;

/**
 * Class RandomStrategyDeveloperLevel
 */
class RandomStrategyDeveloperLevel implements DeveloperLevelStrategyInterface
{
    /**
     * Minimum random level
     */
    const MIN_LEVEL = 10;

    /**
     * Maximum random level
     */
    const MAX_LEVEL = 100;

    /**
     * @param $developer
     *
     * @return int
     */
    public function getStartDeveloperLevel($developer)
    {
        return mt_rand(self::MIN_LEVEL, self::MAX_LEVEL);
    }
}