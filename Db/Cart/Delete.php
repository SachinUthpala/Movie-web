<?php


require_once '../Db.Connection.php';
session_start();


$mid = intval($_POST['UserIds']);

$sql = "DELETE FROM `cart` WHERE UserIds = $mid";
$result = $conn->query($sql);
header("Location: ../../Settings.php");





?>