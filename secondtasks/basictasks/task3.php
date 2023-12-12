<?php
$sentence = 'I am a full stack developer at orange coding academy';
$wordToCheck = 'Orange';

if (stripos($sentence, $wordToCheck) !== false) {
    echo 'Word Found!';
} else {
    echo 'Word Not Found!';
}
