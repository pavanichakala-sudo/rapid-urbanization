<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'rapid_urbanisation';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
?>