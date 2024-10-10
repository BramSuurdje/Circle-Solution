<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle-Solution</title>
    <link rel="stylesheet" href="../css/contact.css" type="text/css">
    <link rel="stylesheet" href="../style.css" type="text/css">
</head>
<body>
    <!-- hallo -->
    <!-- jasper -->
    <section class="contact">
        <div class="contactLeft">
            <h2 class="contactLeftTitle">Laten we samen de punten verbinden</h2>
                <lu class="info">
                    <li class="infoListItem">
                        <img src="../svg/EnvelopeFill.svg" alt="emailSVG"/>
                        <a href="mailto:Voorbeeld@voorbeeld.nl">Voorbeeld@voorbeeld.nl</a>
                    </li>
                    <li class="infoListItem">
                        <img src="../svg/telephone.svg" alt="emailSVG"/>
                        <a href="tel:123456789">+123456789</a>
                    </li>
                    <li class="infoListItem">
                        <img src="../svg/pin.svg" alt="emailSVG"/>
                        <a href="https://maps.app.goo.gl/iSLbz94wwd9JqAM37" target="_blank">Van Schaikweg 94, 7811 KL Emmen</a>
                    </li>
                </lu>
            <div class="socials">
                <div class="imgContainer">
                    <img src="../svg/facebookLogoWithOutBorder.svg"/>
                </div>
                <div class="imgContainer">
                    <img src="../svg/Instagram.svg" alt="emailSVG"/>
                </div>
                <div class="imgContainer">
                    <img src="../svg/xLogo.svg" alt="emailSVG"/>
                </div>
            </div>
        </div>
        <div class="contactRight">
            <p class="contactRightText">Ik ben geïnteresseerd in...</p>
            <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
                <div>
                    <label for="vlees">Vlees:</label>
                    <input type="checkbox" name="recept[]" value="vlees" id="vlees">
                    <label for="vis">Vis:</label>
                    <input type="checkbox" name="recept[]" value="vis" id="vis">
                    <label for="vegetarisch">Vegetarisch:</label>
                    <input type="checkbox" name="recept[]" value="vegetarisch" id="vegetarisch">
                    <label for="vegan">Vegan:</label>
                    <input type="checkbox" name="checkbox" value="vegan" id="vegan">
                    <label for="kapsalon">Kapsalon:</label>
                    <input type="checkbox" name="recept[]" value="kapsalon" id="kapsalon">
                </div>
                <label for="vnaam">Voornaam:</label>
                <input type="text" name="voornaam" id="vnaam">
                <label for="anaam">Achternaam:</label>
                <input type="text" name="achternaam" id="anaam">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
                <input class="submit" type="submit" value="Verzenden">
            </form>
        </div>
    </section>
    
</body>
</html>