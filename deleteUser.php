<?php

// session_start();
$servermane = "localhost";
$username = "root";
$password = "";
$database = "forms";


// Connect to the database
$conn = mysqli_connect($servermane, $username, $password, $database);


$id = $_GET['id'];
$sql = "DELETE FROM `detail` WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);
if($result){
    header('Location: allUser.php');
} else {
    // echo "The db is not update" . mysqli_error($conn);
    header('Location: allUser.php');
}
// print_r($row);
?>