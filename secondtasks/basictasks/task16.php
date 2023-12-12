<?php
$originalString = '\"\\1+2/3*2:2-3/4*3';
$cleanedString = preg_replace('/[^0-9]/', ' ', $originalString);

echo $cleanedString; 
