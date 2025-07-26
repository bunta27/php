<?php
function squareArea($base, $height)
{
    return $base * $height;
}
function triangleArea($base, $height)
{
    return $base * $height / 2;
}
function trapezoidArea($upperbase, $lowerbase, $height)
{
    return ($upperbase + $lowerbase) * $height / 2;
}

echo squareArea(2,5) . "<br/>";
echo triangleArea(9,6) . "<br/>";
echo trapezoidArea(3,2,6);