<?php

namespace Eat;

require_once __DIR__ . '/../Autoloader.php';
\Autoloader::registerAutoloader();

abstract class Meal
{
    protected $food;

    protected $drink;

    protected $timeOfDay;

    public function __construct(
        $timeOfDay,
        Food  $food  = null,
        Drink $drink = null
    ) {
        $this->timeOfDay = $timeOfDay;
        $this->food      = $food;
        $this->drink     = $drink;
    }

    public function setFood(Food $food)
    {
        $this->food = $food;
        return $this;
    }

    public function setDrink(Drink $drink)
    {
        $this->drink = $drink;
        return $this;
    }

    public function prepareMeal()
    {
        $this->food->prepare();
        $this->drink->prepare();
        return $this;
    }

    abstract public function duringTheMeal();
}