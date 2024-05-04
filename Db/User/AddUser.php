<?php

require_once '../Db.Connection.php';
session_start();

if(isset($_POST['submit'])){

    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $isAdmin = $_POST['isAdmin'];

    if(isset($_FILES['profileImg'])){
        $image = $_FILES['profileImg'];
        $Imgname = $image['name'];
        $imgfiletemp = $image['tmp_name'];
        $filename_separate = explode('.',$Imgname);
        $fileextention = strtolower($filename_separate[1]);
        $extensions = array('jpeg','jpg','png');
    
        if(in_array($fileextention,$extensions)){
            $uploadimage = '../../Asserts/UserImg/'.$Imgname; // Corrected path
            move_uploaded_file($imgfiletemp,$uploadimage);
            $pathToImg = "Asserts/UserImg/".$Imgname;
            $sql1= "INSERT INTO `users`( `UserName`, `UserMail`, `userPassword`, `UserPhone`, `UserImg`, `IsAdmin`) 
            VALUES ('$name' , '$email' , 'password' , '$phone' , '$pathToImg' , '$isAdmin' )";
    
            $result = $conn->query($sql1);

            header("Location: ../../Admin/UserManagement.php");
        } else {
            // Handle error for invalid file extension
        }   
    } else {
        $sql2= "INSERT INTO `users`( `UserName`, `UserMail`, `userPassword`, `UserPhone`, `IsAdmin`) 
            VALUES ('$name' , '$email' , 'password' , '$phone' , '$isAdmin' )";

            $results = $conn->query($sql2);
            header("Location: ../../Admin/UserManagement.php");
    }
    

}


?>