<style>
    <?php include 'style.css'; ?>
</style>

<?php 
// TODO
// make chosen link a different color when on that page
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Sarchen Theme</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="header">
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
