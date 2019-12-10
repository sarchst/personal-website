<style>
    <?php include 'style.css'; ?>
</style>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Sarchen Theme</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<div class="header">
    <div class="my-logo">
        <a href="<?php echo get_home_url(); ?>">
            <img src="http://sarchenstarke2.local/wp-content/uploads/2019/06/round-photo-close-up-1.png" alt="Sarchen Starke">
        </a>
    </div>

    <nav class="nav-menu">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'header',
                'container' => false,
                'menu_id' => 'header-menu'
            ));
        ?>
    </nav>
    
    
</div>
<body>
