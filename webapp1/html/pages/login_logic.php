<?php
session_start();
include 'conn.php';

if (empty($_POST["username"]) || empty($_POST["password"])){
    header("location: login.php");
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

$stmt = $connection->prepare("SELECT * FROM gegevensklant WHERE naam=:naam AND password=:pass");
$stmt->execute(['naam' => $username, 'pass' => $password]);
$user = $stmt->fetch();


if ($user) {
   $_SESSION["naam"] = $user['naam'];
   header("Location: dashboard.php");
} else {
  echo ' JA, hier hoor jij niet ga is heel snel terug';
}
?>
