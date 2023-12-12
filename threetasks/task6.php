<?php
function isArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;

    while ($temp != 0) {
        $remainder = $temp % 10;
        $sum += $remainder ** 3;
        $temp = (int)($temp / 10);
    }

    if ($number == $sum) {
        return "$number is Armstrong Number";
    } else {
        return "$number is not Armstrong Number";
    }
}

$inputNumber = 407;
$result = isArmstrongNumber($inputNumber);

echo $result; 
?>
