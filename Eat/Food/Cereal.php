<?php

namespace Eat\Food;

use \Eat;

class Cereal implements Eat\Food, Eat\Prepare
{
    public function prepare()
    {
        echo '<div>Pour cereal and milk in a bowl</div>';
        return $this;
    }

    public function eat()
    {
        echo '<div>Eat cereal with a spoon</div>';
        return $this;
    }

}