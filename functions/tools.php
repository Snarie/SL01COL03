<?php
/**
 * Created by: Stephan Hoeksema 2023
 * SL01COL03
 */
function characterCounterType($value) {
    echo $value . "<br>";
    echo strlen($value) . "<br>";
    echo gettype($value) . "<br>";
}

function changeColor() {
    if(date('H') < 12) {
        // op basis van de tijd wil ik de kleur veranderen.
        return "
            <style>
                    body {background-color : greenyellow;}
            </style>
        ";
    } else {
        // op basis van de tijd wil ik de kleur veranderen.
        return "
            <style>
                    body {background-color : purple;}
            </style>
        ";
    }
}
function dd($value) {
    die(var_dump($value));
}
function randomValue($array){
    return $array[array_rand($array)];
}