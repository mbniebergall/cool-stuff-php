<?php

namespace Eat;

require_once __DIR__ . '/../Autoloader.php';
\Autoloader::registerAutoloader();

interface Food
{
    public function eat();
}