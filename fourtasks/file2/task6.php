<?php
$requestTime = $_SERVER['REQUEST_TIME'];

$requestDateTime = date('Y-m-d H:i:s', $requestTime);

echo "Page requested at: $requestDateTime";
