<?php

require_once '../Db.Connection.php';
session_start();


    $ticketPrice = intval($_POST['ticketPrice']);
	$UserName = $_POST['userId'];	
	$MovieId = $_POST['movieId'];	
	$NumberOfTickets = intval($_POST['NumOfTicket']);	
	$Total	= $NumberOfTickets * $ticketPrice;
	$Img = $_POST['Img'];

    echo $Img;

    $sql = "INSERT INTO `cart`( `UserName`, `MovieId`, `NumberOfTickets`, `Total`, `Img`) 
    VALUES ('$UserName' , '$MovieId' , $NumberOfTickets ,  $Total , '$Img')";

    $result = $conn->query($sql);
    header("Location: ../../RelisedMovies.php");

?>