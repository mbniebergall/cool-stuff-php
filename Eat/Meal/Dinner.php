<?php

namespace Eat\Meal;

use Eat,
    Eat\Food,
    Eat\Drink;

require_once __DIR__ . '/../../Autoloader.php';
\Autoloader::registerAutoloader();

class Dinner extends Eat\Meal
{
    public function eat()
    {
        echo '<div>Dinner in the ' . $this->timeOfDay . '</div>';
        $this->prepareMeal()
            ->duringTheMeal();
    }

    public function duringTheMeal()
    {
        $this->drink->pour();
        $this->food->eat();
        echo '<div>Enjoy time with family and friends</div>';
        return $this;
    }
}

$dinner = new Dinner('evening');
$dinner->setFood(new Food\Pizza)
    ->setDrink(new Drink\Pop)
    ->eat();
