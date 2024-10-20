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
    <link rel="stylesheet" href="../css/aboutUs.css" type="text/css">
</head>
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
                        The main difference between an intranet and the internet is that the 
                        former is a closed network, and the latter is a public network. In short, the 
                        internet is for all; a company intranet is for a select group of people.
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
                                    echo "<h4>Please input a valid email address.</h4>";
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>