<?php
session_start();
include 'conn.php';
 
$stml = $connection->prepare("SELECT * FROM productgegevens WHERE id=:id");
$stml->execute(['id' => $_GET['id']]);
$product = $stml->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="box">
    <div class="content">
    <form action='product_updatelogic.php' name='product_updatelogic' method="POST">
        <label> product ID: </label>
        <input type="text" name="id_products" value="<?php echo $product['id']?>" required>
        <label>product name: </label>
        <input type="text" name="naam" value="<?php echo $product['naam']; ?>" required>
        <label> product prijs: </label>
        <input type="text" name="prijs" value="<?php echo $product['prijs']; ?>" required>
        <input type="submit" value="update product">
    </form>
</body>
</html>