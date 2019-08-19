<?php
include 'assets/connect.php';


$sql = "SELECT * FROM notes_table WHERE title='$title' ";
$result = mysqli_query($conn, $sql);   
$json_array = array();
while($row = mysqli_fetch_assoc($result)) {
    $json_array[] = $row;
}
echo json_encode($json_array);
// echo'<pre>';
// print_r($json_array)

?>