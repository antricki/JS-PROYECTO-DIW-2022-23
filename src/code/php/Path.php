<?php

namespace src\code\php;

class Path
{
    public static function root(): string 
    {
        return $_SERVER['HTTP_HOST']."/dashboard/";
    }

    public static function code(): string 
    {
        return Path::root()."src/code/";
    }

    public static function css(): string 
    {
        return Path::root()."src/code/css/";
    }

    public static function phpPath(): string 
    {
        return Path::root()."src/code/php/";
    }

    public static function js(): string 
    {
        return Path::root()."src/code/js/";
    }

    public static function assets(): string 
    {
        return Path::root()."src/assets/";
    }

    public static function icon(): string 
    {
        return Path::root()."src/assets/icon/";
    }

    public static function images(): string 
    {
        return Path::root()."src/assets/images/";
    }

    public static function videos(): string 
    {
        return Path::root()."src/assets/videos/";
    }
}
