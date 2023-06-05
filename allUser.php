<?php
// session_start();
$servermane = "localhost";
$username = "root";
$password = "";
$database = "forms";


// Connect to the database
$conn = mysqli_connect($servermane, $username, $password, $database);

$sql = "SELECT * FROM `detail`";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="allUser.css">
    <style>
        table,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>

</head>

<body>

    <h1>Welcome To The Form ! <br> You can Submit your data ! </h1>
    <div class="box">
        <div class="box1">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone no.</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
               <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?=$row['id']?></td>
                    <td><?=$row['name']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['phone']?></td>
                    <td><?=$row['gender']?></td>
                    <td><?=$row['dob']?></td>
                    <td><?=$row['address1']?></td>
                    <td><a href="editUser.php?id=<?=$row['id']?>">Edit</a> <a href="deleteUser.php?id=<?=$row['id']?>" >Delete</a>
                </td>
                </tr>
                <?php } ?>
            </table>
        </div>

    </div>
    <footer>
        copyright@abhishekgautam
    </footer>

</body>

</html>