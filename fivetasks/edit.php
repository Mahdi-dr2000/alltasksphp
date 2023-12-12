<?php


include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employee_id = $_POST['employee_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $sql = "UPDATE `employees` SET `Name`=:name, `Address`=:address, `Salary`=:salary WHERE `id`=:employee_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':salary', $salary);
    $stmt->bindParam(':employee_id', $employee_id);

    try {
        $stmt->execute();
        header("location:index.php?edit=edit employee success");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>