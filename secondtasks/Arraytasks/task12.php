<?php
$words =  array("abcd", "abc", "de", "hjjj", "g", "wer");
for ($i = 0; $i < count($words); $i++) {
    for ($j = $i + 1; $j < count($words); $j++) {
        if (strlen($words[$i]) > strlen($words[$j])) {
            $temp = $words[$i];
            $words[$i] = $words[$j];
            $words[$j] = $temp;
        }
    }
}
echo "The shortest array length is" . strlen($words[0]);
echo "The longest  array length is" . count($words) - 1;
