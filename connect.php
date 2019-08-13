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
$clean_note = filter_var($note, FILTER_SANITIZE_STRING);
$clean_title = filter_var($title, FILTER_SANITIZE_STRING);

//-----------------Validate-----------------//

if ($clean_title === false) {
    echo 'a title is required';
    } else {
    echo 'title is valid';
    }
    
    if ($clean_note === false) {
    echo 'a note is required';
    } else {
    echo 'note is valid';
    }
$sql = "SELECT * FROM notes_table";
$result = mysqli_query($conn, $sql);   
$json_array = array();
while($row = mysqli_fetch_assoc($result)) {
    $json_array[] = $row;
}
// echo json_encode($json_array);
echo'<pre>';
print_r($json_array)
?>
