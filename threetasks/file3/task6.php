<?php
function calculateFactorial($number)
{
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

$inputNumber = 5;
$factorialResult = calculateFactorial($inputNumber);

echo "The factorial of $inputNumber is: $factorialResult";
