<?php
function getProductsFromAPI() {
    $api_url = 'https://mockend.up.railway.app/api/products';
    $response = file_get_contents($api_url);
    return json_decode($response, true);
}
?>
