<?php
session_start();

if ($_SERVER["REQUEST_METHOD"]  == "POST") {

    if (!isset($_SESSION["click"])) {
       header("location: pages/contact.php");
       exit();
    } else {
        echo "fout";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Circle-Solution</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/menu.css" type="text/css">
    <link rel="stylesheet" href="css/package.css" type="text/css">
</head>
<body>

<!-- merge    -->
<?php include('header.php'); ?>  
<div class="img">
    <a href="../Circle Solutions/pages/contact.php">contact</a>
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>just connect <br> the dots</h1>
                <a href="#" class="cta-button">Pakketten</a>
            </div>
            
            <div class="trust">
                <img src="../Circle-Solution/img/image-removebg-preview.png" alt="Circle Solutions Logo">
            </div>  
        </section>
        
        
    </main>
    </div>

    <div class="gridContainer">
     <div class="BlokA Blue">
            <div class="Mgekozen Dblue">
                <h3>Meest gekozen</h3>
            </div>
        <div class="bundelA Dblue">
           
            <img src="../Circle-Solution/svg/package.svg" alt="">
           <p class="prijs">
                1-50 gebruikers €180,00 per maand 
            </p>
            <p class="prijs">
                51-500 gebruikers €799,00 per maand
            </p>
         <div class="betaal">
             <h2>$180</h2>
              <p class="maand">/Maandelijks</p>
         </div>
            <div class="inbegrepen1">
                <p>Inbegrepen</p>
                <ul>
                    <li class="ruimte">Internal communications</li>
                </ul>
                <ul>
                    <li class="ruimte">Connect and engage</li>
                </ul>
                <ul>
                    <li class="ruimte">Knowledge management</li>
                </ul>
                <ul>
                    <li class="ruimte">Analyze and optimize</li>
                </ul>
            </div>
            <div class="button">
              <form method="POST">
                   <button type="submit">KLIkmij</button>
              </form>
            </div>
        </div>
    </div>
    <div class="BlokB Dblue">
        <h2>Circle D.O.T.S</h2>
    </div>
    <div class="BlokB Dblue">
        <h2>Circle Workspace</h2>
    </div>
    <div class="BlokC Blue">
        <div class="bundleB Dblue">
            <img src="../Circle-Solution/svg/packageWorkSpace.svg" alt="">
            <p>1-50 gebruikers €140,00 per maand</p>
            <p>51-500 gebruikers €760,00 per maand</p>
            <h2>$140</h2>
            <h3>/Maandelijks</h3>
            <div class="inbegrepen2">
                <h4>Inbegrepen</h4>
                <ul>
                    <li>App management</li>
                </ul>
                <ul>
                    <li>Communicatie and information</li>
                </ul>
                <ul>
                    <li>Document management</li>
                </ul>
            </div> 
            <a href="../Circle-Solution/pages/contact.php"></a>
        </div>
    </div>
</div>

</body>
</html>