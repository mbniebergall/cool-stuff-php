<?php

namespace Eat\Drink;

use \Eat;

class Pop extends Eat\Drink
{
    public function prepare()
    {
        echo '<div>Throw in some dry ice for pop</div>';
        return $this;
    }
}