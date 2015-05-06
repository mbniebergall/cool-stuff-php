<?php

namespace Eat\Drink;

use \Eat;

class Juice extends Eat\Drink
{
    public function prepare()
    {
        echo '<div>Squeeze the juice</div>';
        return $this;
    }
}