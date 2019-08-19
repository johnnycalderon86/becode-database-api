<?php
include 'assets/connect.php';
$id = $_GET['id'];
$title = $_POST['title'];
$note =$_POST['note'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else{
    echo"connected"."<br>";
}

$sql = "UPDATE notes_table SET title='$title', note='$note' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);


?>



