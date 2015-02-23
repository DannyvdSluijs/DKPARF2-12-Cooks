<?php

namespace Cooks\Preparations;

use Cooks\Preparation;

class SetClassicalMusicOn implements Preparation
{
    /**
     *
     * @return string
     */
    public function __toString()
    {
        return 'sets classical music on';
    }

}