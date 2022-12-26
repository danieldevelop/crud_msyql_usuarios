<?php

include 'config.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    exit();
} 

if (!mysqli_select_db($conn, DB_BBDD)) {
    die("Error: " . mysqli_error($conn));
    exit();
}