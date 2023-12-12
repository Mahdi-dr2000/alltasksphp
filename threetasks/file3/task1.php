<?php
$numbers = '';
for ($i = 1; $i <= 10; $i++) {
    $numbers .= $i;
    if ($i < 10) {
        $numbers .= '-';
    }
}
echo $numbers;
