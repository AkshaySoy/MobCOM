<?php

echo "Generator Loaded<br>";

function generateArrayFromWords( $words ) {
    $words = explode(" ", $words);
    $arr = [];
    for ($i=0; $i<count($words); $i++){
        if ($words[$i] != ''){
            array_push( $arr, $words[$i]);
        }
    }
    return $arr;
}


function GQ_searchArray ( $arr ){
    if ( count($arr) == 0 ){
        $search_query  = "`model_name` LIKE '%%'";
    }
    else {
        $search_query = "( ";
        for ($i=0 ; $i<count($arr) ; $i++ ){
            $search_query = $search_query . " CONCAT(`product_desc`, `model_name`, `model_colour`) LIKE '%$arr[$i]%'";
            if ($i<count($arr)-1){
                $search_query = $search_query . " AND";
            }
        }
        $search_query = $search_query . " )";
    }
    return $search_query;
}

function GQ_priceArray ( $arr ){
    $price_query = "( ";
    for ($i=0 ; $i<count($arr) ; $i++ ){
        if ( $arr[$i][0] == "<" || $arr[$i][0] == ">" ){         //for smaller or greater
            $price_query = $price_query . " `mobile_price` " . $arr[$i]; 
        }
        else{
            $price_query = $price_query . "( `mobile_price` BETWEEN " . explode("-", $arr[$i])[0] . " AND " . explode("-", $arr[$i])[1]. " )";
        }
        if ($i<count($arr)-1){
            $price_query = $price_query . " OR";
        }
    }
    $price_query = $price_query . " )";
    return $price_query;
}

function GQ_brandArray ( $arr ) {
    $brand_query = '( ';
    for ($i=0 ; $i<count($arr) ; $i++ ){
        $brand_query = $brand_query . " `brand_name` = '$arr[$i]' ";
        if ($i<count($arr)-1){
            $brand_query = $brand_query . " OR";
        }
    }
    $brand_query = $brand_query .' )';
    return $brand_query;
}
?>