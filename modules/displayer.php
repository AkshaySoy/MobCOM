<?php

function cardRenderer ($result){
    echo "<br>";
    while($row = $result->fetch_assoc()) {
        //echo $row["product_id"] . " : ". $row["model_name"]. "<br>";
        echo "
            <div class='card card-product-list mx-2 my-3 p-3'>

            <div class='row no-gutters'>

                <div class='col-md-3 mb-2'>
                    <a href='#'>
                        <img class='product-img' src='images/phone_images/71Sinqbw35L._SL1500_.jpg'>
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

                        <button type='button' class='btn btn-outline-secondary btn-block mt-4'>
                            View More
                            <i class='fa fa-angle-right' aria-hidden='true'></i>
                        </button>

                    </div>

                </div>

            </div>

        </div>
        ";
        }

}

?>