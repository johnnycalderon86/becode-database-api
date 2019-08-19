<?php
include 'assets/connect.php';


// sql to delete a record
$sql = "DELETE FROM notes_table WHERE title='$title'";

if ($conn->query($sql) === TRUE) {
    echo "Record $title deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();