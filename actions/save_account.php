<?php

// Account data variables
$ruc = $_POST['ruc'];
$bank = $_POST['bank'];
$account_type = $_POST['account_type'];
$account_number = $_POST['account_number'];
$observations = $_POST['observations'];


// MySQL Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "celeweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Get the user Id from the database using the ruc as a filter
$sql = "SELECT id FROM user WHERE ruc = '$ruc'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$user_id = $row['id'];

echo $user_id;

// Insert data into database
$sql = "INSERT INTO account (bank, account_type, account_number, observations, user_id)
VALUES ('$bank', '$account_type', '$account_number', '$observations', $user_id)";
$conn->query($sql);
$conn->close();

echo $sql;