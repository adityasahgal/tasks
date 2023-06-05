<?php
include_once("./config/conn_db.php");

// $sql = "CREATE DATABASE forms";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address1 = $_POST['address1'];
$sql = "INSERT INTO `detail` ( `name`, `email`, `phone`, `gender`, `dob`, `address1`) VALUES ('$name', '$email', '$phone', '$gender', '$dob', '$address1');";
$result = mysqli_query($conn, $sql);

if ($result) {
    header('location: alluser.php');
} else {
    echo "The db is not created" . mysqli_error($conn);
}




?>