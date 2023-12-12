<?php
function generateFloydsTriangle($n)
{
    $count = 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $count . " ";
            $count++;
        }
        echo "<br>";
    }
}

$nLines = 5;
generateFloydsTriangle($nLines);
