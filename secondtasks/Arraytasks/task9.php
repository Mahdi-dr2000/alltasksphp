<?php
function convertToUpperCase($array)
{
    return array_map('strtoupper', $array);
}

$colors = array("red", "blue", "white", "yellow");

$uppercaseColors = convertToUpperCase($colors);

echo "<pre>";
print_r($uppercaseColors);
echo "</pre>";
