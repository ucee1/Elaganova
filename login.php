<?php

require 'config.php';

if(isset($_POST["login"])){
    $usernameemail = $_POST["usernamemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELCET * FROM tb_user WHERE username - '$usernameemail; OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION['id'] = $row['id'];
            header("Location: index.html");
        }
        else{
            echo
            "<script>alert('Wrong Password'); </script>";
        }
    }
    else{
        echo
        "<script> alert('User Not Registered'); </script>";
    }
}


?>

