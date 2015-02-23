<?php

namespace Cooks\Preparations;

use Cooks\Preparation;

class PutApronOn implements Preparation
{
    /**
     *
     * @return string
     */
    public function __toString()
    {
        return 'puts on an apron';
    }

}