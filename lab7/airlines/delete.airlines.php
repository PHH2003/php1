<?php
include_once "../connectiton.php";
$airline_id = $_GET['id'];
$sql = "DELETE FROM airlines WHERE airline_id = $airline_id";
$stmt=$conn->prepare($sql);
$stmt -> execute();
header("Location: list.airlines.php");
die;
?>