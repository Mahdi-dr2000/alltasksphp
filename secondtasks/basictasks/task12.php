<?php
$originalString = 'The brown fox';
$insertString = 'quick';

$newString = substr_replace($originalString, $insertString . ' ', 4, 0);

echo $newString; 
?>
