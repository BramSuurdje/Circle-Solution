<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>


    <header>
        <div class="logo">
            <img src="../Circle-Solution/img/CS-logo-light.svg" alt="Circle Solutions Logo">
        </div>
        <nav class="nav">
            <ul>
                <li><a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
                <li><a href="#" class="<?= ($current_page == 'pakketten.php') ? 'active' : ''; ?>">Pakketten</a></li>
                <li><a href="pages/reviews.php" class="<?= ($current_page == 'reviews.php') ? 'active' : ''; ?>">Reviews</a></li>
                <li><a href="pages/aboutUs.php" class="<?= ($current_page == 'aboutUs.php') ? 'active' : ''; ?>">Over ons</a></li>
                <li><a href="pages/faq.php" class="<?= ($current_page == 'faq.php') ? 'active' : ''; ?>">FAQ</a></li>    
                <li><a href="pages/contact.php" class="<?= ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
            </ul>
        </nav>
    </header>
