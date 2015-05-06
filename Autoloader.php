<?php

class Autoloader
{
    public static function registerAutoloader()
    {
        spl_autoload_register(array('self', 'loader'), false);
    }

    public static function loader($className)
    {
        $fileName = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
        include_once $fileName;
    }

}