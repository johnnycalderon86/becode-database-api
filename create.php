<?php
include 'assets/connect.php';
// prepare and bind
$stmt = $conn->prepare("INSERT INTO notes_table (title, note) VALUES ( ?, ?)");
$stmt->bind_param("ss", $title, $note);


$stmt->execute();


echo "New records created successfully";
$stmt->close();
$conn->close();

?>