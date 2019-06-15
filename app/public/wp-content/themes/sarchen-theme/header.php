<style>
    <?php include 'style.css'; ?>
</style>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Sarchen Theme</title>
</head>
<div horizontal layout class="header">
    <div class="my-logo">
        <img src="http://sarchenstarke2.local/wp-content/uploads/2019/06/site-logo.png" alt="Sarchen Starke">
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
