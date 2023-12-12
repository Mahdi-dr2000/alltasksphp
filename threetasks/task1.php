<?php
function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$inputNumber = 3;

if (isPrime($inputNumber)) {
    echo $inputNumber . ' is a prime number';
} else {
    echo $inputNumber . ' is not a prime number';
}
