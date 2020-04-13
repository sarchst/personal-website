<?php
    /*
    Template Name: Etsy
    */
    get_header();
    include 'api.php';
?>

<?php

    // Ouiware request
    function requestOuiwareListings($api) {
        $url = "https://openapi.etsy.com/v2/shops/6981955/listings/active?api_key=" . $api . "&fields=url,title,price&includes=MainImage";
        $request = wp_remote_get($url);
        if( is_wp_error( $request ) ) {
            return false;
        }
        $body = wp_remote_retrieve_body( $request );
        return $data = json_decode( $body );
    }

    // DANGITJANET request
    function requestDangitListings($api) {
        $url = "https://openapi.etsy.com/v2/shops/19106942/listings/active?api_key=" . $api . "&fields=url,title,price&includes=MainImage";
        $request = wp_remote_get($url);
        if( is_wp_error( $request ) ) {
            return false;
        }
        $body = wp_remote_retrieve_body( $request );
        return $data = json_decode( $body );
    }

    $responseOuiware  = requestOuiwareListings($api);
    $responseDang = requestDangitListings($api);
   
?>

<div class="listings">
    <div class="three-grid">
    <?php foreach ($responseOuiware ->results as $listing) { 
        // regex to shorten the listing titles
        $temp = preg_replace("/(?<= - ).*$/", "", $listing->title);
        $processedTitle = preg_replace("/( - )/", "", $temp); ?>

        <div class="etsy">
            <h3><?php echo $processedTitle; ?></h3><br>
            <img src=<?php echo $listing->MainImage->url_170x135 ?> >
            <p>$<?php echo $listing->price; ?> (CAD)</p>
            <a href="<?php echo $listing->url; ?>">Buy Here &#9679; More Information</a>
        </div>

    <?php } ?>

    <?php foreach ($responseDang ->results as $listing) { 
        // regex to shorten the listing titles
        $temp = preg_replace("/(?<= - ).*$/", "", $listing->title);
        $processedTitle = preg_replace("/( - )/", "", $temp); ?>

        <div class="etsy">
            <h3><?php echo $processedTitle; ?></h3><br>
            <img src=<?php echo $listing->MainImage->url_170x135 ?> >
            <p>$<?php echo $listing->price; ?> (CAD)</p>
            <a href="<?php echo $listing->url; ?>">Buy Here &#9679; More Information</a>
        </div>

    <?php } ?>
    </div>
</div>

<?php
get_footer();
?>