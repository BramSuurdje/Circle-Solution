<?php
    $current_page = basename($_SERVER['PHP_SELF']);
    $base_path = (basename(dirname($_SERVER['PHP_SELF'])) == 'pages') ? '../' : '';
?>

<header>
    <div class="logo">
        <img src="<?= $base_path ?>svg/CS-logo-light.svg" alt="Circle Solutions Logo">
    </div>
    
    <nav class="nav">
        <ul>
            <li><a href="<?= $base_path ?>index.php" class="<?= ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
            <li><a href="<?= $base_path ?>index.php" class="<?= ($current_page == 'pakketten.php') ? 'active' : ''; ?>">Pakketten</a></li>
            <li><a href="<?= $base_path ?>pages/reviews.php" class="<?= ($current_page == 'reviews.php') ? 'active' : ''; ?>">Reviews</a></li>
            <li><a href="<?= $base_path ?>pages/aboutUs.php" class="<?= ($current_page == 'aboutUs.php') ? 'active' : ''; ?>">Over ons</a></li>
            <li><a href="<?= $base_path ?>pages/faq.php" class="<?= ($current_page == 'faq.php') ? 'active' : ''; ?>">FAQ</a></li>    
            <li><a href="<?= $base_path ?>pages/contact.php" class="<?= ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
        </ul>
    </nav>

    <script>
        window.addEventListener('scroll', function() {
            var header = document.querySelector('header');
            if (window.scrollY > 80) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</header>
