<?php


require_once '../Db.Connection.php';
session_start();

if(isset($_POST['deleteUser'])){
    $id = $_POST['userId'];
    echo $id;
    $ids = intval($id);
    $sql = "DELETE FROM `users` WHERE UserId = $ids";
    $result = $conn->query($sql);

    echo $result;
    header("Location: ../../Admin/UserManagement.php");
}



?>