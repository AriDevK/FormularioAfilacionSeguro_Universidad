<?php
$id = $_GET['id'];

// MySQL Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "celeweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "DELETE FROM account WHERE user_id = $id";
$conn->query($sql);

$sql = "DELETE FROM user WHERE id = $id";
$conn->query($sql);

$conn->close();

header("Location: ../review.php");
