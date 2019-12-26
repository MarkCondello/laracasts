<?php
class Request {

    public static function uri()
    {
        //gather just the url and trim forward slashes eg. about/culture
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function rootUrl()
    {
        return $_SERVER['HTTP_HOST'];
    }
}