<?php
// User data variables
$client_type = $_POST['client_type'];
$ruc = $_POST['ruc'];
$social_reason = $_POST['social_reason'];
$address = $_POST['address'];
$department = $_POST['department'];
$province = $_POST['province'];
$district = $_POST['district'];
$phone = $_POST['phone'];
$legal_one = $_POST['legal_one'];
$legal_two = $_POST['legal_two'];
$signed_power = $_POST['signed_power'];
$electronic_box = $_POST['electronic_box'];
$company_contact = $_POST['company_contact'];

// MySQL Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "celeweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

    // Insert data into database
$sql = "INSERT INTO user (client_type, ruc, social_reason, address, department, province, district, phone, legal_one, legal_two, signed_power, electronic_box, company_contact)
VALUES ('$client_type', '$ruc', '$social_reason', '$address', '$department', '$province', '$district', '$phone', '$legal_one', '$legal_two', '$signed_power', '$electronic_box', '$company_contact')";
$conn->query($sql);
$conn->close();
