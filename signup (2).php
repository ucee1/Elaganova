<?php

require 'config.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE 'username' OR 'email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script>alert('Username or Email has already been taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('','$name', '$username', '$email','$password')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Registration Successful'); </script>";
        }
        else{
            echo
            "<script> alert('Password Does Not Match');</script>";
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/style.css">

    <title>Eleganova</title>
</head>
<body>

    <div class="main-login-section">
        <main>
            <div class="login-background">
                <div class="main-section">
                    <div class="text">
                        <h1 id="el"><a href="./index.html">Eleganova</a> </h1>
                        <p>Creating an account is easy! Please enter your details.</p>
                    </div>

                    <div class="login-section" >
                        

                        <form action="./signup.php" method="POST" autocomplete="off">
                            <div class="">
                                <input type="name" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="">
                                <input type="name" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            
                            <div class="">
                            <input type="password" name="confirmpassword" class="form-control" placeholder="Input Password Again" required> 
                            </div>
                            
                            <button name="submit">SignUp</button>

                            <p>Already have an account? <span><a href="./login.html"> Login</a></span> </p>
                            
                        </form>
                    </div>

                </div>
                <div class="imagery" id="known" >
                    <img src="./assests/images/instagram-view/pexels-владимир-васильев-11035173.jpg" alt="">
                </div>
            </div>
        </main>
    </div>





    <script src="./assests/script.js"></script>
</body>
</html>