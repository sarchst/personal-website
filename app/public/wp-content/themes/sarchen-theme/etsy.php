<?php
/*
Template Name: Etsy
*/
get_header();
?>

<div class="listings">
    <div class="three-grid">
        <?php 
        $listings = CFS()->get( 'listings' );
        foreach ($listings as $listing) {
        ?>

        <div class="etsy">
            <h3><?php echo $listing['title']; ?></h3>
            <p><?php echo $listing['description']; ?></p>
            <?php echo $listing['url']; ?>
            <img src='<?php echo $listing['photo']; ?>' alt='listing-image'>
            
        </div>

        
            <?php
            }
        ?>
        
        </div>
    </div>
</div>