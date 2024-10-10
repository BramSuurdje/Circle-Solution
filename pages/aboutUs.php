<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST")
    { 
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle-Solution</title>
    <link rel="stylesheet" href="../css/aboutUs.css" type="text/css">
</head>
<body>
    <!-- Main Class -->
    <div class="main">
        <!-- Over Ons Block -->
        <div class="overOns">
            <h1>over ons</h1>
            <p>
                Circle solutions is een software development bureau dat customized software 
                ontwikkeld. Circle solutions is gespecialiseerd in het ontwikkelen van 
                intranetten. Het is een middelgroot bedrijf waar 5 mensen werken in een ZZP 
                vennootschap constructie.
            </p>
        </div>
        <!-- Extra Info Block -->
        <div class="extraInfo">
            <p>
                The main difference between an intranet and the internet is that the 
                former is a closed network, and the latter is a public network. In short, the 
                internet is for all; a company intranet is for a select group of people.
            </p>
        </div>
        <!-- Icons -->
        <div class="img">

        </div>
        <!-- Nieuwsbrief Stuk -->
        <div class="nieuwsBrief">
            <h3>Volg onze nieuwste items</h3>
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                <label for="email">Schrijf je in voor onze nieuwsbrief</label>
                <input type="text" name="email" id="email">
                <div class="nieuwsBriefButtons">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
                </div>
            </form>
            
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if(!empty($email))
                {
                    // Doorgaan met Controle
                }
                else
                {
                    // Echo Foutmelding 
                    echo "Please input a valid email address .";
                }
            }
        ?>
        
        </div>
    </div>
</body>
</html>