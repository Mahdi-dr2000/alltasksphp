<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j < 5 - $i + 1) {
            echo "1 ";
        } else {
            echo $i . " ";
        }
    }
    echo PHP_EOL;
}
