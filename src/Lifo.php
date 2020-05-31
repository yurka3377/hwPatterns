<?php

namespace App;

class Lifo
{
    private static $instance = null;
    private static $stackData = [];

    public function __construct() { }

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new static;
        }
        return self::$instance;
    }

    public function push($item)
    {
        array_push(self::$stackData, $item);
    }

    public function pop()
    {
        if (count(self::$stackData) > 0){
            return array_pop(self::$stackData);
        }else{
            throw new \Exception("Попытка извлечь элемент из пустого стека");
        }
    }
}

