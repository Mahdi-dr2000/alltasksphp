<?php
$file = 'file.txt';
if (file_exists($file)) {
   $lines=file($file);
   echo $numberoflines=count($lines);

} else {

    echo "File not Exsists";
}
