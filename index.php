<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    $title = "MobCOM | Buy mobiles at the best price !";
    require('modules/header.php');

    ?>

</head>

<body class="bg-light">

    <!-- Navbar Start -->

    <?php

    require('modules/navbar.php');
    require('modules/query-generators.php');
    require('modules/db-connection.php');

    $response = $con -> query ( GQ_getRandomFiveProducts() );
    
    $j = 0;
    //not newly but random
    $newly_added_product_list = [];
    if ($response->num_rows > 0) {
        while ( $row = $response->fetch_assoc() ){
            $newly_added_product_list[$j] =$row;
            $j += 1;
        }
    }

    //not top deals but random
    $top_deals_product_list = [];
    $response = $con -> query ( GQ_getRandomFiveProducts() );
    $j = 0;
    //not newly but random
    $top_deals_product_list = [];
    if ($response->num_rows > 0) {
        while ( $row = $response->fetch_assoc() ){
            $top_deals_product_list[$j] =$row;
            $j += 1;
        }
    }
    ?>

    <!-- Navbar End -->

    <!-- Carousel Start -->

    <div class="container-fluid p-0">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://via.placeholder.com/1400x450" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/1400x450" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/1400x450" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

    </div>

    <!-- Carousel End -->

    <!-- Main Content Start -->

    <div class="container-fluid min-vh-100">

        <h3 class="font-weight-bold mt-4 ml-3 mb-2">Newly Added</h3>

        <!-- Newly Added Section Start -->

        <div class="container-fluid">

            <div class="row">

                <!-- Product Card Start -->
                <?php
                    foreach ($newly_added_product_list as $product){
                        echo "
                            <div class='col-xl-3 col-lg-3 col-md-4 col-6 mt-3 mb-3'>

                                <div class='card card-product h-100 p-1 d-flex' style='max-width: 500px;'>

                                    <img class='card-img-top p-2' src='images/$product[brand_name]/$product[model_name]/1.jpg' alt='$product[brand_name] $product[model_name]'>

                                    <div class='card-body d-flex flex-column'>
                                        <a href='#' style='text-decoration: none;'>
                                            <h5 class='card-title'>$product[brand_name] $product[model_name]</h5>
                                        </a>

                                        <div class='mb-1'>
                                            <span class='fa fa-star checked'></span>
                                            <span class='fa fa-star checked'></span>
                                            <span class='fa fa-star checked'></span>
                                            <span class='fa fa-star'></span>
                                            <span class='fa fa-star'></span>
                                        </div>

                                        <p class='card-text font-weight-bold mb-0'>₹ " . number_format($product['mobile_price'],0,'.',',') ."</p>

                                        <a href='#' class='btn btn-danger mt-3'>Buy Now</a>

                                    </div>

                                </div>

                            </div>
                        ";
                        
                    }
                ?>
                
                <!-- Prodicut card end -->

            </div>

            <a class="card-link float-right" href="#">
                View More
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>

        </div>

        <!-- Newly Added Section End -->

        <!-- Top Deals Start -->

        <h3 class="font-weight-bold mt-4 ml-3">Top Deals</h3>

        <div class="container-fluid">

            <div class="row">


                <!-- Product Cards Start -->
                <?php
                    foreach ( $top_deals_product_list as $product ){
                        echo "
                            <div class='col-xl-3 col-lg-3 col-md-4 col-6 mt-3 mb-3'>

                                <div class='card h-100 p-1 d-flex' style='max-width: 500px;'>

                                    <img class='card-img-top p-2' src='images/$product[brand_name]/$product[model_name]/1.jpg' alt='$product[brand_name] $product[model_name]'>

                                    <div class='card-body d-flex flex-column'>
                                        <a href='#' style='text-decoration: none;'>
                                            <h5 class='card-title'>$product[brand_name] $product[model_name]</h5>
                                        </a>

                                        <div class='mb-1'>
                                            <span class='fa fa-star checked'></span>
                                            <span class='fa fa-star checked'></span>
                                            <span class='fa fa-star checked'></span>
                                            <span class='fa fa-star'></span>
                                            <span class='fa fa-star'></span>
                                        </div>

                                        <p class='card-text font-weight-bold mb-0'>₹ 15,999</p>

                                        <a href='#' class='btn btn-danger mt-3'>Buy Now</a>

                                    </div>

                                </div>

                            </div>
                        ";
                    }
                ?>

                <!-- Product Cards End -->

            </div>

            <a class="card-link float-right" href="#">
                View More
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>

        </div>

        <!-- Top Deals End -->

        <!-- Shop By Brand Section Start -->

        <h3 class="font-weight-bold mt-4 ml-3">Shop By Brand</h3>

        <div class="container-fluid">

            <div class="row">

                <div class="logo col-xl-3 col-lg-3 col-md-4 col-6 mt-2 mb-2">

                    <a href="#">
                        <img src="images/brand_images/apple.svg" alt="one_plus" height="100px" width="100px">
                    </a>

                </div>

                <div class="logo col-xl-3 col-lg-3 col-md-4 col-6 mt-2 mb-2">

                    <a href="#">
                        <img src="images/brand_images/asus.svg" alt="one_plus" height="100px" width="100px">
                    </a>

                </div>

                <div class="logo col-xl-3 col-lg-3 col-md-4 col-6 mt-2 mb-2">

                    <a href="#">
                        <img src="images/brand_images/nokia.svg" alt="one_plus" height="100px" width="100px">
                    </a>

                </div>

                <div class="logo col-xl-3 col-lg-3 col-md-4 col-6 mt-2 mb-2">

                    <a href="#">
                        <img src="images/brand_images/one-plus.svg" alt="one_plus" height="100px" width="100px">
                    </a>

                </div>

                <div class="logo col-xl-3 col-lg-3 col-md-4 col-6 mt-2 mb-2">

                    <a href="#">
                        <img src="images/brand_images/oppo.svg" alt="one_plus" height="100px" width="100px">
                    </a>

                </div>

                <div class="logo col-xl-3 col-lg-3 col-md-4 col-6 mt-2 mb-2">

                    <a href="#">
                        <img src="images/brand_images/xiaomi.svg" alt="one_plus" height="100px" width="100px">
                    </a>

                </div>

                <div class="logo col-xl-3 col-lg-3 col-md-4 col-6 mt-2 mb-2">

                    <a href="#">
                        <img src="images/brand_images/realme.svg" alt="one_plus" height="100px" width="100px">
                    </a>

                </div>

                <div class="logo col-xl-3 col-lg-3 col-md-4 col-6 mt-2 mb-2">

                    <a href="#">
                        <img src="images/brand_images/honor.svg" alt="one_plus" height="100px" width="100px">
                    </a>

                </div>

            </div>

        </div>

        <!-- Shop By Brand Section End -->

    </div>

    <!-- Main Content End -->

    <!-- Footer Start -->

    <?php

    require('modules/footer.php');

    ?>

    <!-- Footer End -->

</body>

</html>