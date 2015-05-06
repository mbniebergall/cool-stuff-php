<?php

namespace Pen;

use \Light;

require_once __DIR__ . '/../Autoloader.php';
\Autoloader::registerAutoloader();

class Laser extends \Pen
{
    protected $lightLaser;

    public function __construct(Light\Laser $lightLaser = null)
    {
        $this->lightLaser = $lightLaser;
    }

    protected function getLightLaser()
    {
        if (is_null($this->lightLaser)) {
            $this->lightLaser = new Light\Laser;
        }
        return $this->lightLaser;
    }

    public function usePen()
    {
        echo '<div>Using laser pen</div>';
        $this->getLightLaser()->shine();
    }

    public function refuel()
    {
        echo '<div>Refilling laser pen batteries</div>';
    }
}

$laser = new Laser;
$laser->usePen();
