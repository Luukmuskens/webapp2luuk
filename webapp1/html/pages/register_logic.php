<?php
session_start();
include 'conn.php';

if (empty($_POST["naam"]) || empty($_POST["password"])){
    header("location: login.php");
    exit();
}

$username = $_POST["naam"];
$password = $_POST["password"];
$email = $_POST["email"];

$stmt = $connection->prepare("INSERT INTO gegevensklant (naam, email, password) VALUES(:naam,:pass,:mail)");
$stmt->bindParam(":naam", $naam);
$stmt->bindParam(":pass", $password);
$stmt->bindParam(":mail", $email);
$stmt->execute();

header('location:login.php');
?>