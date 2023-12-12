<?php
function printPattern($rows)
{
    for ($i = 1; $i <= $rows * 2 - 1; $i++) {
        if ($i <= $rows) {
            for ($j = $rows - 1; $j >= $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo chr(64 + $k) . " ";
            }
        } else {
            for ($j = $rows - 1; $j < $i - $rows; $j++) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= 2 * $rows - $i; $k++) {
                echo chr(64 + $k) . " ";
            }
        }
        echo "<br>";
    }
}

$numberOfRows = 5;
printPattern($numberOfRows);
