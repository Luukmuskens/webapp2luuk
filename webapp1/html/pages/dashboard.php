<?php
session_start();
if(!isset($_SESSION["naam"])) {
   header("Location: login.php");
   exit();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NebulaBytes | Online trading Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-bottom:200px">

    <div id="content">
        <div id="bg" class=" ">
            <div class="container" style="padding-top:150px">
            <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
            <h1>Login succesful</h1>
            <p>You have succesfully signed into your account.</p>
            <p>You can close this window and continue using this website.</p>
            <a href="index.php" class="btn btn-warning btn-lg text-white">Close this window</a>

            </div>
            </div>

        </div>
        <div id="content">
        <div id="bg" class=" ">
            <div class="container" style="padding: top 120px;">
            <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
            <h1>Delete account</h1>
            <p>Here you can delete account</p>
            <form action='user_delete_logic.php' value='<?php echo $product['naam'] ?>'  name='delete_logic' method="POST">
             <input type="text" name="user_id" placeholder="User id to delete" required>
            <input type="submit" value="delete">
</form>
    </div>
    <div class="box">
        <form class='content' action='productsupdate.php' name='products-logic'method="POST">
        <div class="content">
                <label>Nieuw product</label>
                <input type="text" name="naam"placeholder="name" >
                <input type="text" name="omschrijving"placeholder="omschrijving" >
                <input type="text" name="prijs"placeholder="price" >
            </div>
            <div class="row">
                <input type="submit" value='Maak product' class="button"/>
            </div>
        </div>
        <?php
    $stmt = $connection->prepare("SELECT * FROM products");
    $stmt->execute();
    $data = $stmt->fetchALL();
 
    foreach ($data as $row) {
        echo $row['naam'];
        echo "<a href='product_update.php?id=".$row['id']."'>Update</a>";
    }
    ?>
   </div>
</body>
</html>