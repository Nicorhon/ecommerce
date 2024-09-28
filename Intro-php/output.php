<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST ["username"];
            $email = $_POST ["email"];
            $password = $_POST ["password"];
            $confirmpassword = $_POST ["confirmpassword"];

        if(trim($username == "" || empty($username))){
            echo "USERNAME is empty";
        } else {
            echo "the username of user is ".$_POST["username"]."<br>";
        }

       if(trim($password) == trim ($confirmpassword)){
            header("location: demo.php?success=Registration Successful");
       } else {
            header("location: demo.php?error=Maling Password");
       }


} else {
        echo "invalid method type";
    }

?>