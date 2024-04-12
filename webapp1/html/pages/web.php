<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<?php
 <div id="content">
 <div id="bg" class=" ">
     <div class="container" style="padding-top:150px">
     <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
     <h1>PRE-ORDER PAGE</h1>
     <p>het is echt een community!</p>
     <p> </p>
     <a href="index.php" class="btn btn-warning btn-lg text-white">terug naar beginsscherm</a>
     </div>
     </div>

 
        <?php
     <div class="lollyvanluuk">
        <?php
        <?php
     include 'conn.php';
     ?>
          $stmt = $connection->query("SELECT * FROM gegevensproducten");
          while ($row = $stmt->fetch()) {
   
             echo '<div class="menu-foto">';
             echo '<img class="menu-fotos" src="../foto/lopia.png" alt="">';
                  echo '<div class="text-menu">';
                  echo $row['naam'] ."<br />\n";
                   echo $row['omschrijving'] ."<br />\n";
                   echo '<div class="buton-menu">';
                   echo $row['prijs'] ."<br/>\n";
                   echo '</div>';
                   echo '</div>';
                   echo '</div>';
 </div>
</body>
</html>
   
  








































          }
                ?>