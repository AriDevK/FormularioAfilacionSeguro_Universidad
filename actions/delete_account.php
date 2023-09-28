<?php

$id = $_GET['id'];
$dataId = $_GET['dataId'];

// MySQL Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "celeweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Remove account from table
$sql = "DELETE FROM account WHERE id = $id";
$conn->query($sql);
$conn->close();

header("Location: ../view.php?id=$dataId");