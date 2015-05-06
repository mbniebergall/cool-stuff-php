<?php

abstract class Pen
{
    protected $length;

    abstract public function usePen();

    abstract public function refuel();

    protected function setLength($length)
    {
        $this->length = (float) $length;
        return $this;
    }

    public function getLength()
    {
        return $this->length;
    }
}
