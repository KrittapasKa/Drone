<?php
$conn = new mysqli("localhost", "root", "", "shop");
if ($conn->connect_error) {
  die("failed: " . $conn->connect_error);
}
echo "success";
?>