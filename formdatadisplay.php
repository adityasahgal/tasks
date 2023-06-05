<?php

$servermane = "localhost";
$username = "root";
$password = "";
$database = "forms";

$conn = mysqli_connect($servermane, $username, $password, $database);

$sql = "SELECT * FROM `detail`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);


echo "The number of rows is :".$num;
echo "<br><br>";
echo "The data of rows are listed below";
echo "<br><br>";
while($row = mysqli_fetch_assoc($result)){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    echo $row['id']."       ". $row['name']."       ". $row['email']."          ". $row['phone']."          ". $row['gender']."         ". $row['dob']."         ". $row['address1'];
    echo "<br><br>";
}

?>