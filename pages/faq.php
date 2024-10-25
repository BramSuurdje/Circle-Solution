<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/faq.css">
    <link rel="stylesheet" href="../css/footer.css" type="text/css">
</head>

<body>
    <p class="titel">
        <b>Veel gestelde vragen</b>
    </p> 

    <section class="faq">

    <section class="leftColumn">

    <?php
    $currentbutton = '';


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['button1'])) {
            $currentbutton = 'button1';
        } elseif (isset($_POST['button2'])) {
            $currentbutton = 'button2';
        } elseif (isset($_POST['button3'])) {
            $currentbutton = 'button3';
        } elseif (isset($_POST['button4'])) {
            $currentbutton = 'button4';
        } elseif (isset($_POST['button5'])) {
            $currentbutton = 'button5';
        } elseif (isset($_POST['button6'])) {
            $currentbutton = 'button6';
        } elseif (isset($_POST['button7'])) {
            $currentbutton = 'button7';
        } elseif (isset($_POST['button8'])) {
            $currentbutton = 'button8';
        } elseif (isset($_POST['button9'])) {
            $currentbutton = 'button9';
        }
    }
    ?>

    <form method="POST">
        <button name="button1">
            <div class="textContainer">
                <img class="dot <?php echo ($currentbutton == 'button1') ? 'active' : ''; ?>" src="../svg/drawing.svg" alt="dot.svg"/>
                <p class="text">What is an intranet?</p>
                <img class="arrow" src="../svg/arrow.svg" alt="arrow.svg"/>
            </div>
        </button>
        <button name="button2"> 
            <div class="textContainer">
                <img class="dot <?php echo ($currentbutton == 'button2') ? 'active' : ''; ?>" src="../svg/drawing.svg" alt="dot.svg"/>
                <p class="text">What is the difference between the internet and an intranet?</p>
                <img class="arrow" src="../svg/arrow.svg" alt="arrow.svg"/>
            </div>
        </button>
        <button name="button3">
            <div class="textContainer">
                <img class="dot <?php echo ($currentbutton == 'button3') ? 'active' : ''; ?>" src="../svg/drawing.svg" alt="dot.svg"/>
                <p class="text">What is an intranet and an extranet?</p>
                <img class="arrow" src="../svg/arrow.svg" alt="arrow.svg"/>
            </div>
        </button>
        <button name="button4">
            <div class="textContainer">
                <img class="dot <?php echo ($currentbutton == 'button4') ? 'active' : ''; ?>" src="../svg/drawing.svg" alt="dot.svg"/>
                <p class="text">What are intranet sites?</p>
                <img class="arrow" src="../svg/arrow.svg" alt="arrow.svg"/>
            </div>
        </button>
        <button name="button5">
            <div class="textContainer">
                <img class="dot <?php echo ($currentbutton == 'button5') ? 'active' : ''; ?>" src="../svg/drawing.svg" alt="dot.svg"/>
                <p class="text">What are intranet applications?</p>
                <img class="arrow" src="../svg/arrow.svg" alt="arrow.svg"/>
            </div>
        </button>
        <button name="button6">
            <div class="textContainer">
                <img class="dot <?php echo ($currentbutton == 'button6') ? 'active' : ''; ?>" src="../svg/drawing.svg" alt="dot.svg"/>
                <p class="text">What is an intranet portal?</p>
                <img class="arrow" src="../svg/arrow.svg" alt="arrow.svg"/>
            </div>
        </button>
        <button name="button7">
            <div class="textContainer">
                <img class="dot <?php echo ($currentbutton == 'button7') ? 'active' : ''; ?>" src="../svg/drawing.svg" alt="dot.svg"/>
                <p class="text">Can an intranet work without the internet?</p>
                <img class="arrow" src="../svg/arrow.svg" alt="arrow.svg"/>
            </div>
        </button>
        <button name="button8">
            <div class="textContainer">
                <img class="dot <?php echo ($currentbutton == 'button8') ? 'active' : ''; ?>" src="../svg/drawing.svg" alt="dot.svg"/>
                <p class="text">Can an intranet be accessed remotely?</p>
                <img class="arrow" src="../svg/arrow.svg" alt="arrow.svg"/>
            </div>
        </button>
        <button name="button9">
            <div class="textContainerLast">
                <img class="dot <?php echo ($currentbutton == 'button9') ? 'active' : ''; ?>" src="../svg/drawing.svg" alt="dot.svg"/>
                <p class="text">What does an intranet do?</p>
                <img class="arrow" src="../svg/arrow.svg" alt="arrow.svg"/>
            </div>
        </button>
    </form>

    </section>

    <section class="rightColumn">
        <?php 
        include ('../fuctions/faqText.php');
        ?>
    </section>

    </section>

    <div class="gridContainer">
        <div class="footerTop">
            <ul class="footerMenu">
                <li class="footerMenuItem">
                    <a href="../index.php">Home</a>    
                <li class="footerMenuItem">
                    <a href="../pages/aboutUs.php">Over ons</a>
                <li class="footerMenuItem">
                    <a href="../index.php">Tarieven</a>
                <li class="footerMenuItem">
                    <a href="../pages/faq.php">FAQ</a>    
                <li class="footerMenuItem">
                    <a href="../pages/contact.php">Contacten</a>
                </li>
            </ul>    
            <div class="FooterKfoto">
                <div class="kleineFoto"><img class="Image" src="../svg/facebookLogoWithOutBorderBlack.svg" alt=""></div>
                <div  class="kleineFoto"><img class="Image" src="../svg/InstagramBlack.svg" alt=""></div>
                <div  class="kleineFoto"><img class="Image" src="../svg/X_logo_2023_original.svg" alt=""></div>
            </div>
        </div>
        <div><hr></div>

        <div class="footerBottom">
            <div class="tekstC"><p> &#9426 2024. All rights reserved</p></div>
            <div class="bigBoy"><img class="Image" src="../svg/CS-logo-dark (1).svg" alt=""></div>
            <div class="tekstD">
                <p>Terms of service</p>
            <div class="tekstD">
                <p>Privacy Policy</p>
            </div>  
        </div> 
    </div>
</body>
</html>
