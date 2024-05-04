<?php

require_once '../Db.Connection.php';

if(isset($_POST['deleteMovie'])){
    $id = intval($_POST['mid']);
    $sql = "DELETE FROM `relised_movies` WHERE RMovieId = $id";

    $result = $conn->query($sql);
    header("Location: ../../Admin/CurrentMovies.php");

}



?>