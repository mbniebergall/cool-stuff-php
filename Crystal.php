<?php


class Crystal
{
    protected $color;

    protected $cut;

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setCut($cut)
    {
        $this->cut = $cut;
        return $this;
    }

    public function getCut()
    {
        return $this->cut;
    }

}