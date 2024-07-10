<?php
function get_page($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

if(isset($_GET['url'])) {
    $url = $_GET['url'];
    $content = get_page($url);

    // Rewrite the URLs in the content
    $base_url = parse_url($url, PHP_URL_SCHEME) . '://' . parse_url($url, PHP_URL_HOST);
    $content = str_replace('="/', '="' . $base_url . '/', $content);

    echo $content;
}
