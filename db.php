<?php
$conn = new mysqli("localhost", "root", "", "lsf");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "connection done";
?>
