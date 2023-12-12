<?php
$filename = 'php-basefiles.php';
if (file_exists($filename)) {
    $lastModifiedTime = filemtime($filename);

    $formattedTime = date("l, jS F, Y, g:ia", $lastModifiedTime);

    echo "Last modified: $formattedTime";
} else {
    echo "File '$filename' does not exist.";
}
