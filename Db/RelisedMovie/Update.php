<?php

require_once '../Db.Connection.php';
session_start();

$id = intval($_POST['idss']);
$name = $_POST['name'];
$duration = $_POST['duration'];
$movie_type = $_POST['movie_type'];
$ticketPrice = intval($_POST['ticketPrice']);
$Discription = $_POST['Discription'];
$Acttress01 = $_POST['Acttress01'];
$Acttress02 = $_POST['Acttress02'];
$Acttress03 = $_POST['Acttress02'];


$sql = "UPDATE `relised_movies` SET `RMovieName`='$name',`RMovieDuration`='$duration',
`RMovieType`='$movie_type',`RMovieTicketPrice`= $ticketPrice,`Discription`= '$Discription',`Acttress01`= '$Acttress01',
`Acttress02`='$Acttress02',`Acttress03`='$Acttress03' WHERE  RMovieId = $id ";

$result = $conn->query($sql);
header("Location: ../../Admin/CurrentMovies.php");



?>