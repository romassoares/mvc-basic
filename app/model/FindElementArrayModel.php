<?php

namespace App\model;

class FindElementArrayModel
{
    public static function index($array, $target): string
    {
        return (in_array($target, $array)) ? "sim" : "não";
    }
}
