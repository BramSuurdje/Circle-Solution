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
    <link rel="stylesheet" href="css/head.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
</head>

<body>
    
<?php include('header.php'); ?>  

<div class="img">   
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>just connect <br> the dots</h1>
                <button id="" class="cta-button" onclick="handleScroll()">Pakketten</button>
            </div>
            
            <div class="trust">
                <img src="../Circle-Solution/img/image-removebg-preview.png" alt="Circle Solutions Logo">
            </div>  
        </section>
        
        <button id="scrollToTopBtn" class="scroll-to-top at-top" onclick="handleScroll()">↑</button>
        
        <script>
            const scrollToTopBtn = document.getElementById("scrollToTopBtn");

                function handleScroll() {
                    if (scrollToTopBtn.classList.contains('at-top','cta-button')) {
                        window.scrollTo({
                            top: 630,
                            behavior: 'smooth' 
                        });
                    } else {
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth' 
                        });
                    }
                }

                window.onscroll = function () {
                    if (document.body.scrollTop === 0 && document.documentElement.scrollTop === 0) {
                        scrollToTopBtn.classList.add('at-top');
                        scrollToTopBtn.classList.remove('not-at-top');
                    } else {
                        scrollToTopBtn.classList.add('not-at-top');
                        scrollToTopBtn.classList.remove('at-top');
                    }
                };

        </script>

    </main>
    </div>

    <div class="gridContainerTop">
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
            <div class="inbegrepen">
                <p>Inbegrepen</p>
                <ul>
                    <li class="ruimte"><img src="../Circle-Solution/svg/CheckCircle.svg" alt=""><p> Internal communications</p></li>
                    <li class="ruimte"><img src="../Circle-Solution/svg/CheckCircle.svg" alt=""><p> Connect and engage</p></li>
                    <li class="ruimte"><img src="../Circle-Solution/svg/CheckCircle.svg" alt=""><p> Knowledge management</p></li>
                    <li class="ruimte"><img src="../Circle-Solution/svg/CheckCircle.svg" alt=""><p> Analyze and optimize</p></li>
                </ul>
               
            </div>
            <div class="button">
              <form method="POST">
                   <button type="submit" class="button">Contact opnemen</button>
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
            <p class="prijs">
                1-50 gebruikers €140,00 per maand
            </p>
            <p class="prijs">
                51-500 gebruikers €760,00 per maand
            </p>
           <div class="betaal">
             <h2>$140</h2>
             <p class="maand">/Maandelijks</p>
           </div> 
            <div class="inbegrepen">
                <p>Inbegrepen</p>
                <ul class="inbegrepenItems">
                 <li class="ruimte"> <img src="../Circle-Solution/svg/CheckCircle.svg" alt=""> <p>App management</p> </li>
                 <li class="ruimte"> <img src="../Circle-Solution/svg/CheckCircle.svg" alt=""> <p>Communicatie and information</p></li>
                 <li class="ruimte"> <img src="../Circle-Solution/svg/CheckCircle.svg" alt=""> <p>Document management</p></li>
                </ul> 
                
               
            </div> 
            <a href="../Circle-Solution/pages/contact.php"></a>
            <div class="button">
              <form method="POST">
                   <button type="submit" class="button">Contact opnemen</button>
              </form>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>  

</body>
</html>