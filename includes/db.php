<?php
$servername = "localhost";
$username = "root";   // default sa XAMPP
$password = "";       // default sa XAMPP
$dbname = "student_db"; // ito dapat yung existing database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
