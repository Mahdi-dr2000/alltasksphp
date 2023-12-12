

<?php

function swap()
{
    $x = 12;
    $y = 10;

    $x = $x + $y;
    $y = $x - $y;
    $x = $x - $y;

    echo "x = " . $x . " y = " . $y;
}

swap();
?>