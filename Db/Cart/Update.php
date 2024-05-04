<?php


require_once '../Db.Connection.php';
session_start();



$min = intval($_POST['mid']);
$ticket = intval($_POST['ticketPrice']);
$numoftickets = intval($_POST['numoftickets']);
$Total = $ticket * $numoftickets;
$sql = "UPDATE `cart` SET `NumberOfTickets`=$numoftickets,`Total`=$Total WHERE UserIds = $min";

$conn -> query($sql);
header("Location: ../../Settings.php");

?>