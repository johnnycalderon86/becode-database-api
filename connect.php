<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notes_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
    echo "connected";
}


//  CREATE SUPERGLOBALS
$title = $_GET['title'];
$note = $_POST['note'];
echo $title;
echo $note;
// prepare and bind
$sql = "INSERT INTO notes_table ( title, note)
VALUES ( '$title', '$note')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//-------------------Sanitize-----------------//
$clean_title = filter_var($title, FILTER_SANITIZE_STRING);
$clean_note = filter_var($note_input, FILTER_SANITIZE_STRING);


$conn->close();

?>