<?php

$host = '127.0.0.1';
$dbname = 'student_notes_manager';
$username = "root";
$password = "NewStrongPassword123!";

$conn = new MySQLI($host, $username, $password, $dbname);

if ($conn->connect_error)  {
        die("Error connecting to Database: " . $conn->connect_error);
    }
