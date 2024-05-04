<?php

require_once '../Db.Connection.php';
session_start();

    $userId = intval($_SESSION['UserId']);
    $ticketPrice = intval($_POST['ticketPrice']);
	$UserName = $_POST['userId'];	
	$MovieId = $_POST['movieId'];	
	$NumberOfTickets = intval($_POST['NumOfTicket']);	
	$Total	= $NumberOfTickets * $ticketPrice;
	$Img = $_POST['Img'];

    echo $Img;

    $sql = "INSERT INTO `cart`( `userId` , `UserName`, `MovieId`, `NumberOfTickets`, `Total`, `Img`) 
    VALUES ($userId , '$UserName' , '$MovieId' , $NumberOfTickets ,  $Total , '$Img')";

    $result = $conn->query($sql);
    header("Location: ../../RelisedMovies.php");

?>