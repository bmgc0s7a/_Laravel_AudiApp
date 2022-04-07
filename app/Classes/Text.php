<?php

namespace App\Classes;

class Text{

    public static function transformText(String $text):String {
        $text = strtolower($text);
        $arrayWords = explode('_', $text);
        return ucwords(implode(' ', $arrayWords));
    }

    public static function arrayTransform(array $array) : Array{
        $newarray = [];
        foreach($array as $item){
            array_push($newarray, Text::transformText($item));
        }
        return $newarray;
    }
}