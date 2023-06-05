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

    <h1>Welcome To The Form ! <br> You can Submit your data ! </h1>
    <div class="box">
        <div class="box1">
            <form method="post" action="server1.php"><br>
                <div>
                    <label for="text:">Name :    </label>
                    <input type="text" id="Name" name="name" placeholder="Enter your name">

                </div><br>
                <div>
                    <label for="text">Email :</label>
                    <input type="text" id="Email ID" name="email" placeholder="Enter your Email ID">
                </div>
                <div><br>
                    <label for="contact">phone No :</label>
                    <input type="text" id="contact"  name="phone" placeholder="Enter your phone No">

                </div>
                <div><br>
                    <label for="gender"> Gender :</label>
                    <select name="gender" >
                        <option name="gender" value="Male"> Male</option>
                        <option name="gender" value="Female"> Female</option>
                        <option name="gender" value="other"> other</option>

                    </select>
                   
                </div>
                <div><br>
                    <label for="Number">DOB :</label>
                    <input type="date" id="start" name="dob" value="01-01-2025" max="31-12-2025" min="01-01-2000"  placeholder="seclet your DOB">
                </div>
                <div><br>
                   <label for="textarea">Address :</label><br>
                   <textarea name="address1" id="" cols="22" rows="3"  placeholder="Enter your Address"></textarea>
                </div>
                <button>submit</button>
                
            </form>
        </div>

    </div>
    <footer>
        copyright@adityasahgal All right reserved.
    </footer>

</body>
</html>