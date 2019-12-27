<?php

namespace App\Core;

class App
{
    static $register = [
        'test' => 12345,
    ];

    public static function bind($key, $value){
        static::$register[$key] = $value;
        return static::$register;
    }

    public static function get($key)
    {
         if(array_key_exists($key, static::$register)){
            return static::$register[$key];
        } else {
             throw new Exception("There is no property {$key} found.");
         }
    }

}

