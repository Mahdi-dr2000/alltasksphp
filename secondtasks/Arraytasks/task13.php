<?php
$startRange = 11;
$endRange = 20;
$quantity = 10;

$uniqueNumbers = [];

for ($i = 0; $i < $quantity; $i++) {
    do {
        $randomNumber = mt_rand($startRange, $endRange);
    } while (in_array($randomNumber, $uniqueNumbers));

    $uniqueNumbers[] = $randomNumber;
}

echo implode(" ", $uniqueNumbers);
