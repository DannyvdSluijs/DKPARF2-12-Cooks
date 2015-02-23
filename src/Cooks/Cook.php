<?php

namespace Cooks;

class Cook
{
    /**
     *
     * @var string
     */
    private $name;

    /**
     *
     * @var \Cooks\preparation[]
     */
    private $preparations = array();

    /**
     *
     * @param string $name
     * @param \Cooks\preparation[] $preparations
     */
    public function __construct($name, $preparations)
    {
        $this->name = $name;
        $this->preparations = $preparations;
    }

    /**
     *
     * @param \Cooks\Cooks\preparation $preparation
     * @return boolean
     */
    public function haspreparation(Cooks\preparation $preparation)
    {
        return (bool) count(array_filter($this->preparations, function (Cooks\preparation $prep) use ($preparation) {
            return (string) $prep === (string) $preparation;
        }));
    }

    /**
     *
     * @return string
     */
    public function prepare()
    {
        return sprintf('%s is preparing: %s', $this->name, implode(' and ', $this->preparations));
    }
}
