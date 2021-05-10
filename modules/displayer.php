<?php

function cardRenderer ($result){
    echo "<form id='product_displayer' action='./product-detail.php' methof='GET'>";
    echo "<input id='product_id' name='product_id' placeholder='product ID'>";
    while($row = $result->fetch_assoc()) {
        echo "
            <div class='card card-product-list mx-2 my-3 p-3'>

            <div class='row no-gutters'>

                <div class='col-md-3 mb-2'>
                    <a href='#'>
                        <img class='product-img' src='images/$row[brand_name]/$row[model_name]/1.jpg'>
                    </a>
                </div>

                <div class='col-md-6'>

                    <div class='info-main'>
                        <a class='card-link' href='#'>
                            <h5 class='font-weight-bold'>$row[brand_name] $row[model_name] ( $row[model_colour] , $row[ram] GB ) </h5>
                        </a>

                        <div class='mb-3'>
                            <span class='fa fa-star checked'></span>
                            <span class='fa fa-star checked'></span>
                            <span class='fa fa-star checked'></span>
                            <span class='fa fa-star checked'></span>
                            <span class='fa fa-star'></span>
                            <span class='badge badge-success p-2'>4.5</span>
                            <span class='text-muted'>Ratings</span>
                        </div>

                        <div>
                            <ul class='px-2 mx-3'>
                                <li>$row[ram] GB RAM | $row[internal_storage] GB ROM | Expandable Upto $row[memory_card_available] </li>
                                <li>$row[display_size] cm | $row[display_resolution] Display</li>
                                <li> $row[primary_camera] Primary Camera | $row[secondary_camera] Front Camera</li>
                                <li>$row[battery_capacity] mAh Battery</li>
                                <li> $row[processor] Processor</li>
                            </ul>
                        </div>

                    </div>

                </div>

                <div class='col-sm-3'>

                    <div class='info-price pl-4 mr-4'>

                        <h3 class='font-weight-bold'>₹ " . number_format($row['mobile_price'],0,'.',',') ." </h3> 

                        <span class='badge badge-pill badge-danger verify-pill p-2'>
                            MobCOM Verified
                            <i class='fa fa-check-circle' aria-hidden='true'></i>
                        </span>

                        <p class='text-muted my-2'>No Cost EMI</p>
                        <p class='text-muted my-2'>Upto <b>₹ 6,950</b> Off on Exchange</p>
                        <button class='btn btn-outline-secondary btn-block mt-4' type='button' onclick='product_id.value=$row[product_id]; submit()'>
                            View More
                            <i class='fa fa-angle-right' aria-hidden='true'></i>
                        </button>

                    </div>

                </div>

            </div>

        </div>
        ";
        }
        echo "</form>";

}



function paginationRenderer($total_products, $itemsPerPage, $pageNumber){
    $max_pageNumber = ceil($total_products / $itemsPerPage);
    $pageArray = [$pageNumber];

    //echo "<h1>$max_pageNumber $pageNumber $pageArray[0]</h1>";
}


//function for the product deails page.
function displayProductDetails($data){
    echo "<h1>$data[brand_name] $data[model_name]</h1>";
}


?>