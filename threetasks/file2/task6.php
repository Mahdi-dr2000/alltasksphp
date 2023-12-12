<?php
$number = 25;
$flag = false;
for ($i = 20; $i <= 50; $i++) {
    if ($number == $i) {
        $flag = true;
    }
}
if ($flag == true) {
    echo 'The number ' . $number . " in the range";
} else {
    echo 'The number ' . $number . " not  the range";
}
?>