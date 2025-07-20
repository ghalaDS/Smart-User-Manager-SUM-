<?php
include 'db.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "UPDATE users SET status = 1 - status WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $stmt->close();
}
?>
