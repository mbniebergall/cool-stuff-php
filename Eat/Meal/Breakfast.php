<?php

namespace Eat\Meal;

use Eat,
    Eat\Food,
    Eat\Drink;

require_once __DIR__ . '/../../Autoloader.php';
\Autoloader::registerAutoloader();

class Breakfast extends Eat\Meal
{
    public function eat()
    {
        echo '<div>Breakfast in the ' . $this->timeOfDay . '</div>';
        $this->prepareMeal()
            ->duringTheMeal();
    }

    public function duringTheMeal()
    {
        $this->drink->pour();
        $this->food->eat();
        echo '<div>Read something quietly during breakfast</div>';
        return $this;
    }
}

$breakfast = new Breakfast('morning');
$breakfast->setFood(new Food\Cereal)
    ->setDrink(new Drink\Juice)
    ->eat();
