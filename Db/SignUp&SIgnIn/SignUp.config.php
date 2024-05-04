<?php

//getting db connection
require_once '../Db.Connection.php';

session_start();

if(isset($_POST['signUp'])){
    $email = $_POST['email'];
    $userName = $_POST['username'];
    $password01 = $_POST['password'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `users`( `UserName`, `UserMail`,`userPassword`, `UserPhone`)
     VALUES ('$userName' , '$email' , '$password01' , '$phone' )";

     if($conn->query($sql)){
        echo "successfull";
        header("Location: ../../SignIn.php");
     }else{
        echo "unsuccessfull";
        $_SESSION['SignUpError'] = "Error ! Try Again.";
        header("Location: ../../SignUp.php");
     }
    
}


?>