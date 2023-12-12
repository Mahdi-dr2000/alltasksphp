<?php
$host = 'localhost';
$dbname = 'employees';
$username = 'root';
$pass = '';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $pass);
   // echo "connect mysql sucsess";
} catch (PDOException  $e) {
    die('connection mysql Filed' . $e->getMessage());
}
?>