<?php
function getProductDetails ( $pcode ) { 

    $url = "https://www.digikala.com/product/{$pcode}";
    $content = file_get_contents($url);

    $jv = preg_match("/var ecpd2 = (.*);/", $content,$m);
    $data = json_decode($m[1]);

    $arr['title'] = $data->title;
    $arr['price'] = $data->price->selling_price;
    $arr['image'] = $data->image_url;
    return $arr;
}



