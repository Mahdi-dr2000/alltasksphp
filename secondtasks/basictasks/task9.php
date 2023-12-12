<?php
$string1 = 'dragonball';
$string2 = 'dragonboll';

$length1 = strlen($string1);
$length2 = strlen($string2);

$minLength = min($length1, $length2);

for ($i = 0; $i < $minLength; $i++) {
    if ($string1[$i] !== $string2[$i]) {
        echo "First difference between two strings at position $i: \"$string1[$i]\" vs \"$string2[$i]\"";
        break;
    }
}

if ($length1 !== $length2 && $i === $minLength) {
    echo "Strings differ in length at position $minLength.";
}
