<?php

//echo "Generator Loaded<br>";

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
            $search_query = $search_query . " CONCAT(`brand_name`, `product_desc`, `model_name`, `model_colour`) LIKE '%$arr[$i]%'";
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

function GQ_ramArray ( $arr ) {
    $ram_query = "( ";
    for ($i=0 ; $i<count($arr) ; $i++ ){
        $ram_query = $ram_query . " `ram` " . $arr[$i];
        if ($i<count($arr)-1){
            $ram_query = $ram_query . " OR";
        }
    }
    $ram_query = $ram_query . " )";
    return $ram_query;
}

function GQ_storageArray ( $arr ) {
    $storage_query = "( ";
    for ($i=0 ; $i<count($arr) ; $i++ ){
        if ( $arr[$i][0] == "<" || $arr[$i][0] == ">" ){         //for smaller or greater
            $storage_query = $storage_query . " `internal_storage` " . $arr[$i]; 
        }
        else{
            $storage_query = $storage_query . "( `internal_storage` BETWEEN " . explode("-", $arr[$i])[0] . " AND " . explode("-", $arr[$i])[1]. " )";
        }
        if ($i<count($arr)-1){
            $storage_query = $storage_query . " OR";
        }
    }
    $storage_query = $storage_query . " )";
    return $storage_query;
}

function GQ_batteryArray ( $arr ) {
    $battery_query = "( ";
    for ($i=0 ; $i<count($arr) ; $i++ ){
        if ( $arr[$i][0] == "<" || $arr[$i][0] == ">" ){         //for smaller or greater
            $battery_query = $battery_query . " `battery_capacity` " . $arr[$i]; 
        }
        else{
            $battery_query = $battery_query . "( `battery_capacity` BETWEEN " . explode("-", $arr[$i])[0] . " AND " . explode("-", $arr[$i])[1]. " )";
        }
        if ($i<count($arr)-1){
            $battery_query = $battery_query . " OR";
        }
    }
    $battery_query = $battery_query . " )";
    return $battery_query;
}

function GQ_pageNumber($pageNumber, $itemsPerPage){
    $pageNumber = $pageNumber -1;
    return " LIMIT $itemsPerPage OFFSET $pageNumber";
}

//get details of a specific id
function GQ_productId($id){
    return "SELECT * FROM `product_master` WHERE `product_id` = $id";
}

function GQ_getLastFiveProducts() {
    return  "SELECT * FROM `product_master` ORDER BY 'product_id' DESC LIMIT 5";
}


function GQ_getRandomFiveProducts(){
    return "SELECT * FROM `product_master` ORDER BY RAND() LIMIT 5";
}
?>