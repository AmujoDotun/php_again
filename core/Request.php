<?php

class Request
{
    public static function uri()
    {
       return trim(parse_url($_SERVER['REQUEST_URL'], PHP_URL_PATH), '/');
        // return trim($_SERVER['REQUEST_URI'], '/');
    }
}