<?php

namespace App\model;

class LeasterNumberModel
{
    public static function index($array): int
    {
        $smaller = $array[0];
        foreach ($array as $value) {
            if ($value < $smaller) {
                $smaller = $value;
            }
        }
        return $smaller;
    }
}
