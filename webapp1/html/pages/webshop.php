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
            <h1>The Witcher shop</h1>S
            <p>Welcome to the WitcherWorld!</p>
            <p> </p>
            <a href="index.php" class="btn btn-warning btn-lg text-white">Home</a>
            <a href="webshop.php" class="btn btn-warning btn-lg text-white">store</a>
            <a href="login.php" class="btn btn-warning btn-lg text-white">login</a>
            <a href="faq.php" class="btn btn-warning btn-lg text-white">FAQ</a>
            <a href="register.php" class="btn btn-warning btn-lg text-white">register</a>
            </div>
            </div>

        </div>
    </div>



 
        <?php
     include 'conn.php';
    ?>
    <?php
          $stmt = $connection->query("SELECT * FROM gegevensproducten");
          while ($row = $stmt->fetch()) {
   
             echo '<div class="container">';
             echo '<img src="images/logo.png" alt="" class="img-foto" >';
                  echo '<div class="text-menu">';
                  echo $row['naam'] ."<br />\n";
                   echo $row['omschrijving'] ."<br />\n";
                   echo '<a href="index.php" class="btn btn-warning btn-lg text-white">add to cart</a>';
                   echo $row ['prijs'] ."<br/>\n";
                   echo $row['recensies'] ."<br />\n";
                   echo $row['geldigtot'] ."<br />\n";
                   echo '</div>';
                   echo '</div>';
                   echo '</div>';
          }
                    ?>
 </div>
</body>
</html>
          <!-- }
                ?> -->
<!-- <?php
// session_start();
// ?>
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <meta http-equiv="X-UA-Compatible" content="ie=edge">
//     <title>NebulaBytes | Online Shopping Site for Sigmas</title>
//     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
//     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
//     <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
//     <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
//     <link rel="stylesheet" href="style.css">
// </head>
// <body>
// <div id="content">
//         <div id="bg" class=" ">
//             <div class="container" style="padding-top:150px">
//             <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;">
//         <h1>WitcherWorld </h1>
//             <p>Welcome to our store</p>
//             <a href="index.php" class="btn btn-warning btn-lg text-white">Home</a>
    
       
//         <nav aria-label="breadcrumb">
//             <ol class="breadcrumb">
//             <li class="breadcrumb-item"><a href="index.php">Home</a></li>
//             <li class="breadcrumb-item"><a href="login.php">login</li>
//             <li class="breadcrumb-item"><a href="cursus.php">/cursus</li>
//             <li class="breadcrumb-item"><a href="webshop.php">/store</li>
//             <li class="breadcrumb-item"><a href="faq.php">/FAQ</li>
//             </ol>
//         </nav>
       
//     <hr/>

//     <div class="row text-center" id="headphones">
//                     <div class="col-md-3 col-6 py-3" >
//                         <div class="card">
//                             <img src="images/boticon.gif" alt="" class="img-fluid pb-1">
//                             <div class="figure-caption">
//                                 <h6>Bunzi buddy (bot)</h6>
//                                 <h6>Welcome to our store, please take a look around and if you have any questions go to... </h6>
//                     <p><a href="faq.php#" role="button" class="btn btn-warning  text-white ">FAQ</a></p>
//                             </div>
//                         </div>
//                     </div>
//         <div class="col-md-3 col-6 py-2">
//             <div class="card">
//                 <img src="images/witchershirt.jpg" alt="" class="img-fluid pb-1">
//                 <div class="figure-caption">
//                     <h6>Witcher-shirt</h6>
//                     <h6>Price :30 euro</h6>
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
//                 </div>
//             </div>
//         </div>
//         <div class="col-md-3 col-6 py-2">
//             <div class="card">
//                 <img src="images/witchershirt2.jpg" alt="" class="img-fluid pb-1">
//                 <div class="figure-caption">
//                     <h6>witcher dark shirt</h6>
//                     <h6>Price :30 euro</h6>
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
//                 </div>
//             </div>
//         </div>
//         <div class="col-md-3 col-6 py-2">
//             <div class="card">
//                 <img src="images/witchershirt4.jpg" alt="" class="img-fluid pb-1">
//                 <div class="figure-caption">
//                     <h6>witcher-shirt limited edition</h6>
//                     <h6>Price : 50 euro</h6>
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
//                 </div>
//             </div>
//         </div>
//     </div>
//     <div class="row text-center" id="shirt">
//             <div class="col-md-3 col-6 py-3" >
//                 <div class="card">
//                     <img src="images/witchercap.jpg" alt="" class="img-fluid pb-1"  >
//                     <div class="figure-caption">
//                     <h6>Witcher cap</h6>
//                     <h6>Price :15 euro</h6>
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
//                     </div>
//                 </div>
//             </div>
//             <div class="col-md-3 col-6 py-3">
//                 <div class="card">
//                     <img src="images/box.webp" alt="" class="img-fluid pb-1" >
//                     <div class="figure-caption">
//                     <h6>witcher book 1</h6>
//                     <h6>Price :35 euro</h6>
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
//                     </div>
//                 </div>
//             </div>
//             <div class="col-md-3 col-6 py-3">
//                 <div class="card">
//                     <img src="images/box.webp" alt="" class="img-fluid pb-1">
//                     <div class="figure-caption">
//                         <h6>witcher book 2</h6>
//                         <h6>Price :35 euro</h6>   
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
//                     </div>
//                 </div>
//             </div>
//             <div class="col-md-3 col-6 py-3" >
//                 <div class="card">
//                     <img src="images/box.webp" alt="" class="img-fluid pb-1">
//                     <div class="figure-caption">
//                         <h6>witcher book 3</h6>
//                         <h6>Price :45 euro</h6>   
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
//                     </div>
//                 </div>
//             </div>
//         </div>
//         <div class="row text-center" id="shoes" >
//                 <div class="col-md-3 col-6 py-3">
//                     <div class="card">
//                         <img src="images/witcherbag.webp" alt="" class="img-fluid pb-1">
//                         <div class="figure-caption">
//                             <h6>witcher bag</h6>
//                             <h6>Price :50 euro</p>      
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
//                         </div>
//                     </div>
//                 </div>
//                 <div class="col-md-3 col-6 py-3">
//                     <div class="card">
//                         <img src="images/witcherbag2.webp" alt="" class="img-fluid pb-1">
//                         <div class="figure-caption">
//                             <h6>witcher bag 2</h6>
//                             <h6>Price :60 euro</h6>
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
//                         </div>
//                     </div>
//                 </div>
//                 <div class="col-md-3 col-6 py-3">
//                     <div class="card">
//                         <img src="images/figure1.jpg" alt="" class="img-fluid pb-1">
//                         <div class="figure-caption">
//                             <h6>witcher figure</h6>
//                             <h6>Price :70 euro</h6>
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
//                         </div>
//                     </div>
//                 </div>
//                 <div class="col-md-3 col-6 py-3" >
//                     <div class="card">
//                         <img src="images/figure2.webp" alt="" class="img-fluid pb-1">
//                         <div class="figure-caption">
//                         <h6>witcher figure 2</h6>
//                     <h6>Price :65 euro</h6>
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
//                         </div>
//                     </div>
//                 </div>
//             </div>
//             <div class="row text-center" id="headphones">
//                     <div class="col-md-3 col-6 py-3" >
//                         <div class="card">
//                             <img src="images/witchergame1.jpg" alt="" class="img-fluid pb-1">
//                             <div class="figure-caption">
//                                 <h6>witcher game 1</h6>
//                                 <h6>Price :24 euro</h6>
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
//                             </div>
//                         </div>
//                     </div>
//                     <div class="col-md-3 col-6 py-3">
//                         <div class="card">
//                             <img src="images/witchergame2.jpg" alt="" class="img-fluid pb-1">
//                             <div class="figure-caption">
//                                 <h6>witcher game 2 </h6>
//                                 <h6>Price :45 euro</h6>
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
              
//                             </div>
//                         </div>
//                     </div>
//                     <div class="col-md-3 col-6 py-3">
//                         <div class="card">
//                             <img src="images/witchergame3.jpg" alt="" class="img-fluid pb-1">
//                             <div class="figure-caption">
//                                 <h6>witcher game 3 </h6>
//                                 <h6>Price :15 euro</h6>
                               
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
//                             </div>
//                         </div>
//                     </div>
//                     <div class="col-md-3 col-6 py-3">
//                         <div class="card">
//                             <img src="images/witcherkey.jpg" alt="" class="img-fluid pb-1">
//                             <div class="figure-caption">
//                                 <h6>witcher keychain</h6>
//                                 <h6>Price :10 euro</h6>
//                     <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
//                             </div>
//                         </div>
//                     </div>
//                 </div>
//       </div>
//       <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
//             <h1><div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
//             <img src="images/witcher2.png" alt="" class="img-fluid pb-1">
//             <a href="cursus.php" class="btn btn-warning btn-lg text-white">PRE-ORDER NOW!!!</a>
//         </div>
// </body>
// </html> -->