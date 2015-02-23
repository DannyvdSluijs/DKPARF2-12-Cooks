<?php

namespace Cooks;

class Context
{
    /**
     *
     * @var Cooks\Cook[]
     */
    private $cooks = array();

    /**
     *
     * @var Cooks\Preparations
     */
    private $preparations = array();

    /**
     * 
     */
    public function __construct()
    {
        $this->preparations['beerAndHardRock'] = new Preparations\BeerAndHardRock();
        $this->preparations['putApronOn'] = new Preparations\PutApronOn();
        $this->preparations['setClassicalMusicOn'] = new Preparations\SetClassicalMusicOn();
        $this->preparations['takeKnifeCollection'] = new Preparations\TakeKnifeCollection();
        $this->preparations['wasHands'] = new Preparations\WashHands();

        $this->cooks['jeroen'] = new Cook('Jeroen', array($this->preparations['putApronOn']));
        $this->cooks['christian'] = new Cook('Christian', array($this->preparations['putApronOn'], $this->preparations['takeKnifeCollection'], $this->preparations['setClassicalMusicOn']));
        $this->cooks['nini'] = new Cook('Nini', array($this->preparations['beerAndHardRock']));
        $this->cooks['leo'] = new Cook('Leo', array($this->preparations['beerAndHardRock']));
        $this->cooks['danny'] = new Cook('Danny', array($this->preparations['wasHands'], $this->preparations['putApronOn']));
    }

    /**
     *
     * @return string
     */
    public function prepareAllCooks()
    {
        $prepare = '';
        foreach ($this->cooks as $cook) {
            $prepare .= $cook->prepare() . PHP_EOL;
        }

        return $prepare;
    }
}
