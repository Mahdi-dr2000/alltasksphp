<?php
function checkSum($firstInteger, $secondInteger)
{
    $sum = $firstInteger + $secondInteger;

    if ($sum === 30) {
        return $sum;
    } else {
        return false;
    }
}

$firstInteger = 10;
$secondInteger = 10;

$result = checkSum($firstInteger, $secondInteger);

if ($result !== false) {
    echo $result;
} else {
    echo 'false';
}
