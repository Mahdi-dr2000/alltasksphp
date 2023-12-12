<?php
$string = 'The quick brown fox jumps over the lazy dog';

$words = explode(' ', $string);

$firstFiveWords = implode(' ', array_slice($words, 0, 5));

echo $firstFiveWords; 
