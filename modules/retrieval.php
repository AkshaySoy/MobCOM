<?php

//retrieving search bar text even when filtering
if(isset($_GET['filter_submit'])){
    echo "<script>
    document.getElementById('searching').value = '$_GET[searching]';
    document.getElementById('search_text').value = '$_GET[searching]';
    </script>";
}

//retrieving filter rqeuest data
if(isset($_GET['filter_submit'])){

    //retrieving price range
    if (isset($_GET['price'])){
        echo "<script>";
        for ($i=0; $i<count($filter_price); $i++){
            echo "document.getElementById('price_$filter_price[$i]').checked = true;";
        }
        echo "</script>";
    }

    //retrieving brand checkbox
    if (isset($_GET['brand'])){
        echo "<script>";
        for ($i=0; $i<count($filter_brand); $i++){
            echo "document.getElementById('brand_$filter_brand[$i]').checked = true;";
        }
        echo "</script>";
    }

    //retrieving ram checkboxes
    if (isset($_GET['ram'])){
        echo "<script>";
        for ($i=0; $i<count($filter_ram); $i++){
            echo "document.getElementById('ram_$filter_ram[$i]').checked = true;";
        }
        echo "</script>";
    }

    //retrieving storage
    if (isset($_GET['storage'])){
        echo "<script>";
        for ($i=0; $i<count($filter_storage); $i++){
            echo "document.getElementById('storage_$filter_storage[$i]').checked = true;";
        }
        echo "</script>";
    }

    //retrieving battery
    if (isset($_GET['battery'])){
        echo "<script>";
        for ($i=0; $i<count($filter_battery); $i++){
            echo "document.getElementById('battery_$filter_battery[$i]').checked = true;";
        }
        echo "</script>";
    }
    
    //retrieving page number
    if (isset($_GET['pageNumber'])){
        echo "<script>";
        echo "document.getElementById('pageNumber').value = " . $_GET['pageNumber'];
        echo "</script>";
    }
}

?>