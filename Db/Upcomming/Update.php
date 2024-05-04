<?php


require_once '../Db.Connection.php';
session_start();

    $id = intval($_POST['id']);
    $name = $_POST['name'];
    $duration = $_POST['duration'];
    $movie_type = $_POST['movie_type'];
    $Discription = $_POST['Discription'];
    $Acttress01 = $_POST['Acttress01'];
    $Acttress02 = $_POST['Acttress02'];
    $Acttress03 = $_POST['Acttress02'];

    $sql = "UPDATE `upcommingmovies` SET `UMovieName`='$name',`Duration`='$duration',
    `MovieType`='$movie_type',`Discription`='$Discription',`Acttress01`='$Acttress01'
    ,`Attress02`='$Acttress02',`Attress03`='$Acttress03' WHERE  UMovieId = $id";

    $conn->query($sql);
    header("Location: ../../Admin/Upcomming.php");




?>