<?php
include 'assets/connect.php';

$sql = "SELECT  title FROM notes_table" ;
$result = mysqli_query($conn, $sql);   
$json_array = array();
while($row = mysqli_fetch_assoc($result)) {
    $json_array[] = $row;
}
echo json_encode($json_array);


?>