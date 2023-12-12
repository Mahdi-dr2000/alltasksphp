<?php
function generateRandomPassword($chars, $length = 8)
{
    $charsLength = strlen($chars);
    $randomPassword = ' ';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = random_int(0, $charsLength - 1);
        $randomPassword .= $chars[$randomIndex];
    }

    return $randomPassword;
}

$givenString = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

$generatedPassword = generateRandomPassword($givenString, 8);

echo $generatedPassword;
