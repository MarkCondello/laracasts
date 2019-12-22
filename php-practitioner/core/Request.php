<?php
class Request {

    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');

    }

    public static function rootUrl()
    {
        return $_SERVER['HTTP_HOST'];

    }
}