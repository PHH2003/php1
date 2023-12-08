<?php
include_once "../connectiton.php";
$flight_id = $_GET['id'];
$sql = "DELETE FROM flights WHERE flight_id = $flight_id";
$stmt=$conn->prepare($sql);
$stmt -> execute();
header("Location: list.flights.php");
die;
?>