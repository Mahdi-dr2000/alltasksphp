<?php
function findLargest($numbers) {
    return max($numbers);
}

$inputNumbers = [1, 5, 9];
$largestNumber = findLargest($inputNumbers);

echo $largestNumber; 
