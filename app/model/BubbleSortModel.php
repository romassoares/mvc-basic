<?php

namespace App\model;

class BubbleSortModel
{
    public static function index($array)
    {
        sort($array);
        return $array;
    }
}
