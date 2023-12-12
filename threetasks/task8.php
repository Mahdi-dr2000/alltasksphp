<?php



function remove()
{
    $array1 = array(2, 4, 7, 4, 8, 4);

    for ($i = 0; $i < count($array1); $i++) {
        $found = false;
        for ($j = $i + 1; $j < count($array1); $j++) {
            if ($array1[$i] === $array1[$j]) {
                $found = true;
                break;
            }
        }
        if ($found === true) {
            array_splice($array1, $i, 1);
            $i--; 
        }
    }
    return $array1;
}

$l = remove();
print_r($l);
