<?php
function getNextLetter($char)
{
    if ($char === 'z') {
        return 'a';
    } elseif ($char >= 'a' && $char < 'z') {
        return chr(ord($char) + 1);
    } else {
        return "Invalid character or not a lowercase letter.";
    }
}

$sampleChar1 = 'a';
$sampleChar2 = 'z';

echo "Next letter of '$sampleChar1': " . getNextLetter($sampleChar1) . "<br>";
echo "Next letter of '$sampleChar2': " . getNextLetter($sampleChar2) . "<br>";
