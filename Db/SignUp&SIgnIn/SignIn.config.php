<?php

require_once '../Db.Connection.php';
session_start();


if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_emailCheck = "SELECT * FROM `users` WHERE UserMail = '$email' ";
    $result_emailCheck = $conn->query($sql_emailCheck);

    if($result_emailCheck->num_rows > 0){
        $row = $result_emailCheck->fetch_ASSOC();

        if($password == $row['userPassword']){
            $_SESSION['username'] =  $row['UserName'];
            header("Location: ../../index.php"); 
        }else{
            $_SESSION["SignUpError"] = "Error ! Try Again. : Invallied password !";
            header("Location: ../../SignIn.php"); 
        }
    }else{
        $_SESSION["SignUpError"] = "Error ! Try Again. : mail not exsist !";
        header("Location: ../../SignIn.php");
    }
}



?>