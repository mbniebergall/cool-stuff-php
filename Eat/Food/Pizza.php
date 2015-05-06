<?php

namespace Eat\Food;

use \Eat;

class Pizza implements Eat\Food, Eat\Prepare
{
    public function prepare()
    {
        echo '<div>Bake pizza in the oven</div>';
        return $this;
    }

    public function eat()
    {
        echo '<div>Eat pizza with your hands</div>';
        return $this;
    }

}