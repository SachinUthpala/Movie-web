<?php
require_once '../Db.Connection.php';
session_start();

$id = intval($_POST['mid']);

$sql  = "DELETE FROM `upcommingmovies` WHERE UMovieId = $id";

$conn->query($sql);
header("Location: ../../Admin/Upcomming.php");




?>