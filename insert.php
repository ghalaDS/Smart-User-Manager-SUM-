<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];

    if (!empty($name) && !empty($age)) {
        $stmt = $conn->prepare("INSERT INTO users (name, age, status) VALUES (?, ?, 1)");
        $stmt->bind_param("si", $name, $age);
        $stmt->execute();
        $stmt->close();
    }

    $conn->close();
    header("Location: index.html");
    exit;
}
?>
