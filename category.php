<?php
if (isset($_POST['button'])) {

    $name = $_POST['name'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "projects";

    $name = "";

    // connect to the database
    $conn = mysqli_connect($localhost, $root, '', $database);

    // Create a sql Query
    $sql = "INSERT INTO `category` ( `name`) VALUES ( '$name')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "The record has been inserted successfully inserted";
    } else {
        echo "The record has not been added." . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Table</title>
    <link rel="stylesheet" href="category.css">
</head>

<body>

    <form action="">
        <table>
            <tr>
                <th id="category" colspan="2">
                    <h2>Category</h2>
                </th>

            </tr>
            <tr>
                <th>id</th>
                <th>Name</th>
            </tr>
            <tr>
                <td><input class="input" type="text"></td>
                <td><input class="input" type="name" name="name"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button class="btn" type="submit" name="button"> Submit</button>
                </td>
            </tr>
    </form>
</body>

</html>