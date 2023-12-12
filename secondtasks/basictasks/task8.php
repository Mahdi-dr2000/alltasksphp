<?php
$sentence = 'That new trainee is so genius.';
$newWord = 'Our';

$words = explode(' ', $sentence);

$words[0] = $newWord;

$modifiedSentence = implode(' ', $words);

echo $modifiedSentence;
