<?php
$numericString = '2,543.12';
$cleanedString = str_replace(',', '', $numericString);

echo $cleanedString; 
