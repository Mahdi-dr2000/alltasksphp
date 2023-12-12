<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['employee_id'])) {
    $employee_id = $_POST['employee_id'];

    $sql = "DELETE FROM `employees` WHERE `id` = :employee_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':employee_id', $employee_id, PDO::PARAM_INT);

    try {
        $stmt->execute();
        $deletedRows = $stmt->rowCount();

        if ($deletedRows > 0) {
            header('Location: index.php');
            exit();
        } else {
            echo "No employee found with ID: $employee_id";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
