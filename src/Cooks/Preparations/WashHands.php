<?php

namespace Cooks\Preparations;

use Cooks\Preparation;

class WashHands implements Preparation
{
    /**
     *
     * @return string
     */
    public function __toString()
    {
        return 'washes hands';
    }

}