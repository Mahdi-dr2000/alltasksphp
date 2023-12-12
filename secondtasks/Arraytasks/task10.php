<?php
function convertToLowerCase($array)
{
    return array_map('strtolower', $array);
}

$colors = array("RED", "BLUE", "WHITE", "YELLOW");

$lowercaseColors = convertToLowerCase($colors);

echo "<pre>";
print_r($lowercaseColors);
echo "</pre>";
