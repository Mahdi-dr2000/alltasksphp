<?php
function checkNumber($number)
{
    if ($number > 0) {
        return 'Positive';
    } elseif ($number < 0) {
        return 'Negative';
    } else {
        return 'Zero';
    }
}

$inputNumber = -60;
$result = checkNumber($inputNumber);

echo "The number $inputNumber is $result";
