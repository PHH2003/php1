<?php
    include_once "connection.php";
    if(!isset($_COOKIE['username'])){   
        header("Location: login.php");
        die;
    }
    $flight_id = $_GET['id'];
    $sql="DELETE FROM flights WHERE flight_id = $flight_id";
    $stmt = $conn -> prepare($sql);
    if($stmt -> execute()){
        header("Location: index.php");
        die;
    }
?>