<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notes_db";
$title = $_GET['title'];
$note = $_POST['note'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
