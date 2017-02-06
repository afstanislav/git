<?php

namespace ApiGameBundle\Utils\DeveloperLevelStrategy;

/**
 * Interface DeveloperLevelStrategyInterface
 */
interface DeveloperLevelStrategyInterface
{
    /**
     * @param $developer
     *
     * @return mixed
     */
    public function getStartDeveloperLevel($developer);
}