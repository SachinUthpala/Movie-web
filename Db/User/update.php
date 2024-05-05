<?php


require_once '../Db.Connection.php';
session_start();



if(isset($_POST['submit'])){

    $id = intval($_POST['ids']);
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

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
            $sql1= "UPDATE `users` SET `UserName`='$name',`UserMail`='$email',`userPassword`='$password',
            `UserPhone`='$phone',`UserImg`='$pathToImg' WHERE  UserId = $id";
    
            $result = $conn->query($sql1);

            header("Location: ../../index.php");
        } else {
            // Handle error for invalid file extension
        }   
    } else {
        $sql2= "UPDATE `users` SET `UserName`='$name',`UserMail`='$email',`userPassword`='$password'
        ,`UserPhone`='$phone' WHERE  RserId  = $id ";

            $results = $conn->query($sql2);
            header("Location: ../../index.php");
    }
    

}





















?>