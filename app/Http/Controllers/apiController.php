<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    function sorting(Request $str)
    {
        $n = strlen($str);
        $str_lower = array();
        $str_upper = array();
        $numbers = array();

        $i = 0;
        for ($i = 0; $i < $n; $i++) {
            if ($str[$i] >= 'a' && $str[$i] <= 'z')
                array_push($str_lower, $str[$i]);

            if ($str[$i] >= 'A' && $str[$i] <= 'Z')
                array_push($str_upper, $str[$i]);

            if ($str[$i] >= '0' && $str[$i] <= '9')
                array_push($numbers, $str[$i]);
        }


}