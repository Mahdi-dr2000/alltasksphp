<?php
include('config.php');
$name = $_POST['name'];
$address = $_POST['address'];
$salary = $_POST['salary'];

$sql = "INSERT INTO `employees`(`Name`, `Address`, `Salary`) VALUES (:name, :address,:salary)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':salary', $salary);

try {
    $stmt->execute();
    header('location:index.php');
} catch (PDOException $e) {
    echo "Error" . $e->getMessage();
}
