<?php
function calculateSum($firstInteger, $secondInteger)
{
    $sum = $firstInteger + $secondInteger;

    if ($firstInteger === $secondInteger) {
        $tripleSum = $sum * 3;
        return "( $firstInteger + $secondInteger ) * 3 = $tripleSum";
    } else {
        return "$firstInteger + $secondInteger = $sum";
    }
}

$firstInteger = 2;
$secondInteger = 2;

echo calculateSum($firstInteger, $secondInteger);
