<?php

namespace Cooks\Preparations;

use Cooks\Preparation;

class BeerAndHardRock implements Preparation
{
    /**
     *
     * @return string
     */
    public function __toString()
    {
        return 'drinks beer and listens to hardrock';
    }

}