<?php
// session_start();
$servermane = "localhost";
$username = "root";
$password = "";
$database = "forms";


// Connect to the database
$conn = mysqli_connect($servermane, $username, $password, $database);

// $sql = "CREATE DATABASE forms";
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address1 = $_POST['address1'];
$sql = "UPDATE `detail` SET `name`='$name',`email`='$email',`phone`='$phone',`gender`='$gender',`dob`='$dob',`address1`='$address1' WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    // echo "Data Successfully Update";
    header('Location: allUser.php');
} else {
    // echo "The db is not update" . mysqli_error($conn);
    header('Location: editUser.php?id='.$id);
}




?>