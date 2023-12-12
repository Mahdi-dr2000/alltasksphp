<?php
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$averageTemperature = array_sum($temperatures) / count($temperatures);

sort($temperatures);

$lowestTemperatures = array_slice($temperatures, 0, 5);

$highestTemperatures = array_slice($temperatures, -5);

echo "Average Temperature is: " . number_format($averageTemperature, 1) . "<br>";

echo "List of five lowest temperatures: ";
echo implode(", ", $lowestTemperatures) . "<br>";

echo "List of five highest temperatures: ";
echo implode(", ", $highestTemperatures);
?>