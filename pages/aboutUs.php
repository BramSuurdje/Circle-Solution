<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST")
    { 
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    }
    else
    {
        // Doe Niks
        ;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle-Solution - About Us</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/aboutUs.css" type="text/css">
    <link rel="stylesheet" href="../css/footer.css" type="text/css">
    <link rel="stylesheet" href="../css/head.css" type="text/css">
</head>

    <?php include('../header.php'); ?>  

<body>
    <!-- Main Class -->
    <div class="main">
        <div class="container">
            <!-- Over Ons Block -->
            <div class="overOns">
                <h1>over ons</h1>
                <p>
                    Circle solutions is een software development bureau dat customized software 
                    ontwikkeld. Circle solutions is gespecialiseerd in het ontwikkelen van 
                    intranetten. Het is een middelgroot bedrijf waar 5 mensen werken in een ZZP 
                    vennootschap constructie.
                </p>
                <!-- Extra Info Block -->
                <div class="extraInfo">
                    <p class="extraInfoText">
                        Het belangrijkste verschil tussen een intranet en het internet is dat 
                        het eerste een gesloten netwerk is, en het laatste een openbaar netwerk. Kortom, het 
                        internet is voor iedereen; een bedrijfsintranet is voor een selecte groep mensen.
                    </p>
                </div>
                <!-- Icons -->
                <div class="icons">
                    <div class="aboutUsImg">
                        <img src="../img/aboutUsPc.png" alt="PC">
                    </div>
                    <div class="aboutUsImg">
                        <img src="../img/aboutUsTeam.png" alt="Team">
                    </div>
                    <div class="aboutUsImg">
                        <img src="../img/aboutUsIntranet.png" alt="Intranet">
                    </div>
                </div>
            </div>
            <!-- Nieuwsbrief Stuk -->
            <div class="nieuwsBrief">
                <div class="nieuwsBriefContent">
                    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                        <h3>Volg onze nieuwste items</h3>
                        <p> Schrijf je in voor onze nieuwsbrief </p>
                        <input type="text" name="email" id="email" placeholder="you@example.com">
                        <input type="submit" value="Inschrijven" class="nieuwsBriefButton">
                        <?php
                            if($_SERVER["REQUEST_METHOD"] == "POST")
                            {
                                if(!empty($email))
                                {
                                    // Echo "Email Adres opgeslagen voor nieuwsbrief" 
                                    echo "<h4>E-mailadres opgeslagen voor nieuwsbrief.</h4>";
                                }
                                else
                                {
                                    // Echo Foutmelding 
                                    echo "<h4 style='color:red'>Foutmelding: E-mailadres is niet ingevuld.</h4>";
                                }
                            }
                            else
                            {
                                // Doe Niks
                                ;
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include('../footer.php'); ?>  
</body>
</html>