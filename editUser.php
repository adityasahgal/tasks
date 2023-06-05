<?php

// session_start();
$servermane = "localhost";
$username = "root";
$password = "";
$database = "forms";


// Connect to the database
$conn = mysqli_connect($servermane, $username, $password, $database);


$id = $_GET['id'];
$sql = "SELECT * FROM `detail` WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
// print_r($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="form.css"> 
   
    
</head>
<body>

    <h1>Welcome To The Form ! <br> You can Edit your data ! </h1>
    <div class="box">
        <div class="box1">
            <form method="post" action="userUpdate.php"><br>
            <input type="hidden" name="id" value="<?= $id ?>" >
                <div>
                    <label for="text:">Name : </label>
                    <input type="text" id="Name" name="name" value="<?=$row['name']?>" placeholder="Enter your name">

                </div><br>
                <div>
                    <label for="text">Email :</label>
                    <input type="text" id="Email ID" name="email" value="<?=$row['email']?>" placeholder="Enter your Email ID">
                </div>
                <div><br>
                    <label for="contact">phone No :</label>
                    <input type="text" id="contact"  name="phone" value="<?=$row['phone']?>" placeholder="Enter your phone No">

                </div>
                <div><br>
                    <label for="gender"> Gender :</label>
                    <select name="gender" >
                        <option value="Male" <?php if($row['gender'] == 'Male'){ echo "selected"; } ?>> Male</option>
                        <option value="Female" <?php if($row['gender'] == 'Female'){ echo "selected"; } ?>> Female</option>
                        <option value="other" <?php if($row['gender'] == 'other'){ echo "selected"; } ?>> other</option>

                    </select>
                   
                </div>
                <div><br>
                    <label for="Number">DOB :</label>
                    <input type="date" id="start" name="dob" value="<?=$row['dob']?>" max="31-12-2025" min="01-01-2000"  placeholder="seclet your DOB">
                </div>
                <div><br>
                   <label for="textarea">Address :</label><br>
                   <textarea name="address1" id="" value="<?=$row['address1']?>" cols="22" rows="3"  placeholder="Enter your Address"><?=$row['address1']?></textarea>
                </div>
                <button>Edit</button>
                
            </form>
        </div>

    </div>
    <footer>
        copyright@abhishekgautam
    </footer>

</body>
</html>