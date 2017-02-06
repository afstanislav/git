<?php

namespace ApiGameBundle\Utils;

use ApiGameBundle\Entity\Fight;

/**
 * Interface FightInterface
 */
interface FightInterface
{
    public function fight(Fight $fight);
}