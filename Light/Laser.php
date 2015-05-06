<?php

namespace Light;

\Autoloader::registerAutoloader();

class Laser implements \Light
{
    use \Wave;

    public function shine()
    {
        echo '<div>Shining laser light</div>';
        $this->doTheWave();
    }

    public function travel($x, $y, $z)
    {
        echo '<div>Laser traveling ' . $x . ' ' . $y . ' ' . $z . '</div>';
    }
}