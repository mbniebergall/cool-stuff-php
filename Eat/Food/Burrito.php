<?php

namespace Eat\Food;

use \Eat;

class Burrito implements Eat\Food, Eat\Prepare
{
    public function prepare()
    {
        echo '<div>Fill tortilla with great food</div>';
        return $this;
    }

    public function eat()
    {
        echo '<div>Eat burrito with your hands or a fork</div>';
        return $this;
    }

}