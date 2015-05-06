<?php

namespace Eat\Drink;

use \Eat;

class Water extends Eat\Drink
{
    public function prepare()
    {
        echo '<div>Turn on the faucet for water</div>';
        return $this;
    }
}