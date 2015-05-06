<?php

namespace Eat;

abstract class Drink
{
    public function pour()
    {
        echo '<div>Pour the drink</div>';
        return $this;
    }

    abstract public function prepare();
}