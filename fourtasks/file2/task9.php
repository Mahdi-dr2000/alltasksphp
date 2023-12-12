<?php
$cookie_name = "test";
$cookie_value = "cookies";
$expiry_time = time() + (86400 * 30); 
$cookie_path = "/";
$domain = ""; 
$secure = false; 
$httponly = true; 

setcookie($cookie_name, $cookie_value, $expiry_time, $cookie_path, $domain, $secure, $httponly);

if (isset($_COOKIE)) {
    echo "Retrieving Cookies:<br>";
    foreach ($_COOKIE as $name => $value) {
        echo "$name: $value<br>";
    }
}

if (isset($_COOKIE[$cookie_name])) {
    unset($_COOKIE[$cookie_name]);
    setcookie($cookie_name, '', time() - 3600, $cookie_path, $domain, $secure, $httponly);
    echo "<br>Cookie '$cookie_name' has been deleted.";
} else {
    echo "<br>Cookie '$cookie_name' does not exist.";
}
?>
