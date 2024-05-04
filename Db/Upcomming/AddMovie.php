<?php

require_once '../Db.Connection.php';
session_start();


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $duration = $_POST['duration'];
    $movie_type = $_POST['movie_type'];
    $Discription = $_POST['Discription'];
    $Acttress01 = $_POST['Acttress01'];
    $Acttress02 = $_POST['Acttress02'];
    $Acttress03 = $_POST['Acttress02'];

    if(isset($_FILES['image'])){
        $image = $_FILES['image'];
        $Imgname = $image['name'];
        $imgfiletemp = $image['tmp_name'];
        $filename_separate = explode('.',$Imgname);
        $fileextention = strtolower($filename_separate[1]);
        $extensions = array('jpeg','jpg','png');

        if(in_array($fileextention,$extensions)){
            $uploadimage = '../../Asserts/Upcomming/'.$Imgname; // Corrected path
            move_uploaded_file($imgfiletemp,$uploadimage);
            $pathToImg = "Asserts/Upcomming/".$Imgname;
            $sql1= "INSERT INTO `upcommingmovies`( `UMovieName`, `Duration`, `MovieType`, `Discription`, `Acttress01`, `Attress02`, `Attress03`, `MovieImg`)
             VALUES ('$name' , '$duration' , '$movie_type' , '$Discription' , '$Acttress01' , '$Acttress02' , '$Acttress03' ,'$pathToImg')";
    
            $result = $conn->query($sql1);

            header("Location: ../../Admin/Upcomming.php");
        } else {
            // Handle error for invalid file extension
        }  
    }
}




?>