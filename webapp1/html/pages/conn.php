<?php
$host = "db";
$db = "restaurant";
$user = "muis";
$pass = "Muis01!";
$charset = "utf8mb4";
 
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
 
try
{
    $connection = new PDO($dsn, $user, $pass, $options);
}
catch (PDOException $e)
{
    echo $e->getMessage();
    die("Sorry, Database probleem");
}

