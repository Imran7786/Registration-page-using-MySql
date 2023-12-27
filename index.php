<?php
    if(isset($_POST['username'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "reg";

    $con = mysqli_connect($server, $username, $password, $database);

    if(!$con)
    {
        die("connection to the database failed due to" .
        mysqli_connect_error());    
    }
    echo "Success connecting to the database";

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `registration` (`email`, `username`, `password`) VALUES ('$email', '$username', '$password')";


    if($con->query($sql))
    {
    echo "Uuccessfully inserted";
    }
    else{
    echo "ERROR: $sql <br> $con->error";
    }
    $con->close();

    }

?>

    <!DOCTYPE html>
    <html lang="en">
    
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Registration</title>
       <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
    
       <div class="container">
          <h2>User Registration</h2>
    
          <form action="index.php" method="post">
             <label for="email">Email</label>
             <input type="email" name="email" id="email" placeholder="Enter you email" required>
    
             <label for="username">Username</label>
             <input type="text" name="username" id="username" placeholder="Enter you username" required>
    
             <label for="email">Password</label>
             <input type="password" name="password" id="password" placeholder="Enter you password" required>
    
             <button class="btn">Submit</button>
    
          </form>
          
    
       </div>
    
    </body>
    
    </html>


