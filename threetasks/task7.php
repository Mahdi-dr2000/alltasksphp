<?php
function isPalindrome($string)
{
    $cleanedString = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $string));

    $reversedString = strrev($cleanedString);

    if ($cleanedString === $reversedString) {
        return "Yes, it is a palindrome";
    } else {
        return "No, it is not a palindrome";
    }
}

$inputString = "Eva, can I see bees in a cave?";
$result = isPalindrome($inputString);

echo $result;
