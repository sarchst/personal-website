<?php
    /*
    Template Name: Etsy
    */
    get_header();
    //include 'api.php';
?>

<?php 
// TODO
// fix the API calls
?>

<?php
    // Ouiware request
    function requestOuiwareListings() {
        $url = "https://openapi.etsy.com/v2/shops/6981955/listings/active?api_key=bsl1gn1vjoiziv8067u7uzed&fields=url,title,price&includes=MainImage";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_body = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if (intval($status) != 200) throw new Exception("HTTP $status\n$response_body");
        return json_decode($response_body);
    }

    // DANGITJANET request
    // function requestDangitListings() {
    //     $url = "https://openapi.etsy.com/v2/shops/19106942/listings/active?api_key=bsl1gn1vjoiziv8067u7uzed&fields=url,title,price&includes=MainImage";

    //     $ch = curl_init($url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $response_body = curl_exec($ch);
    //     $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //     if (intval($status) != 200) throw new Exception("HTTP $status\n$response_body");
    //     return json_decode($response_body);
    // }


    $responseOuiware  = requestOuiwareListings();
    //$responseDang = requestDangitListings();

?>



<?php
get_footer();
?>