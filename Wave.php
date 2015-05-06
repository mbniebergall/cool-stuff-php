<?php

trait Wave
{
    protected $length;

    protected $amplitude;

    protected $frequency;

    public function setLength($length)
    {
        $this->length = (float) $length;
        return $this;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setAmplitude($amplitude)
    {
        $this->amplitude = (float) $amplitude;
        return $this;
    }

    public function getAmplitude()
    {
        return $this->amplitude;
    }

    public function doTheWave()
    {
        echo '<div><marquee height=50 behavior="alternate" direction="up">' .
            'Doing the wave...</marquee></div>';
    }
}
