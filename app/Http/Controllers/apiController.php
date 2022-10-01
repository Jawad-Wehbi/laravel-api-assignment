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

        sort($numbers);
        $tempArray = array();

        for ($j = 0; $j < count($str_lower); $j++) {
            $tempArray[$str_lower[$j]] = ord($str_lower[$j]) - 33;
        }
        for ($k = 0; $k < count($str_upper); $k++) {
            $tempArray[$str_upper[$k]] = ord($str_upper[$k]);
        }
        asort($tempArray);

        $result = '';
        foreach ($tempArray as $index => $value) {
            $result = $result . $index;
        }
        $result = $result . implode($numbers);

        echo  $result;

        return response()->json([
            "response" => "success",
            "result" => $result
        ]);
    }

}