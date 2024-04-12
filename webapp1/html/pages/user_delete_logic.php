<?php
session_start();
include 'conn.php';

$userid = $_POST['user_id'];

$stmt = $connection->prepare("DELETE from gegevensklant WHERE id=:userid");
$stmt->bindParam(":userid", $userid);
$stmt->execute();

header('location:dashboard.php');
?>