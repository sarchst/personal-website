<?php
    /*
    Template Name: Etsy
    */
    get_header();
    include 'api.php';
?>

<?php
    $url = "https://openapi.etsy.com/v2/shops/6981955/listings/active?api_key=" . $API . "&fields=url,title,price&includes=MainImage";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response_body = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if (intval($status) != 200) throw new Exception("HTTP $status\n$response_body");
    $response = json_decode($response_body);
?>

<div class="listings">
    <div class="three-grid">
    <?php foreach ($response->results as $listing) { 
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