<?php

$input='remove';
$length=strlen($input);
$newword='';

for($i=$length-1;$i>=0;$i--)
{
    $newword.=$input[$i];
}
echo $newword;

?>