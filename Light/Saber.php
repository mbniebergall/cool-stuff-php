<?php

namespace Light;

\Autoloader::registerAutoloader();

class Saber implements \Light
{
    protected $crystals = [];

    public function addCrystal(\Crystal $crystal)
    {
        $this->crystals[] = $crystal;
    }

    public function shine()
    {
        echo 'Shining light saber' . PHP_EOL;
        $this->doTheWave();
    }

    public function travel($x, $y, $z)
    {
        echo 'Saber light traveling ' . $x . ' ' . $y . ' ' . $z;
    }
}