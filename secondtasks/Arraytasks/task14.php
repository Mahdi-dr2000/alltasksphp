<?php


$array1 = array( 2, 0, 10, 12, 6);

for ($i = 0; $i < count($array1); $i++) {
    for ($j = $i + 1; $j < count($array1); $j++) {
        if ($array1[$i] >$array1[$j]) {
            $temp = $array1[$i];
            $array1[$i] = $array1[$j];
            $array1[$j] = $temp;
        }
    }
}
echo $array1[1];

?>