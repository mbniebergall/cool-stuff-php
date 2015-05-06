<?php

namespace Eat\Meal;

use Eat,
    Eat\Food,
    Eat\Drink;

require_once __DIR__ . '/../../Autoloader.php';
\Autoloader::registerAutoloader();

class Lunch extends Eat\Meal
{
    public function eat()
    {
        echo '<div>Lunch in the ' . $this->timeOfDay . '</div>';
        $this->prepareMeal()
            ->duringTheMeal();
    }

    public function duringTheMeal()
    {
        $this->drink->pour();
        $this->food->eat();
        echo '<div>Chat with co-workers and catch up on social media</div>';
        return $this;
    }
}

$dinner = new Lunch('early afternoon');
$dinner->setFood(new Food\Burrito)
    ->setDrink(new Drink\Water)
    ->eat();
