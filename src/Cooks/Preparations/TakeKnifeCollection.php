<?php

namespace Cooks\Preparations;

use Cooks\Preparation;

class TakeKnifeCollection implements Preparation
{
    /**
     *
     * @return string
     */
    public function __toString()
    {
        return 'takes his collection of knives';
    }

}