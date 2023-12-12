<?php
$string = "hi";
$uppercaseString = strtoupper($string);
echo $uppercaseString . "<br>";


$string = "HI";
$lowercaseString = strtolower($string);
echo $lowercaseString . "<br>";

$string = "hi";
$firstLetterUppercase = ucfirst($string);
echo $firstLetterUppercase . "<br>";

$string = "hi mr";
$eachWordCapitalized = ucwords($string);
echo $eachWordCapitalized . "<br>";
