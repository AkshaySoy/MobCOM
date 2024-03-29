<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    $title = "MobCOM | Search Products";
    $pageNumber = 1;
    $total_products = 0;
    require('modules/header.php');
    require('modules/query-generators.php');
    require('modules/displayer.php');
    require('modules/constants.php');
    $query = "SELECT * FROM `product_master`";
    //filter test
    if (isset($_GET['filter_submit'])) {

        $filter_search = $_GET['searching']; //get string
        $query = $query . " WHERE " . GQ_searchArray(generateArrayFromWords($filter_search)); //generating and attaching query

        //price filter checking
        if (isset($_GET['price'])) {
            $filter_price = $_GET['price'];
            $query = $query . " AND " . GQ_priceArray($filter_price);
        }
        //brand filter checking
        if (isset($_GET['brand'])) {
            $filter_brand = $_GET['brand'];
            $query = $query . " AND " . GQ_brandArray($filter_brand);
        }
        //ram filter checking
        if (isset($_GET['ram'])) {
            $filter_ram = $_GET['ram'];
            $query = $query . " AND " . GQ_ramArray($filter_ram);
        }
        //storage filter checking
        if (isset($_GET['storage'])) {
            $filter_storage = $_GET['storage'];
            $query = $query . " AND " . GQ_storageArray($filter_storage);
        }
        //battery filter checking
        if (isset($_GET['battery'])) {
            $filter_battery = $_GET['battery'];
            $query = $query . " AND " . GQ_batteryArray($filter_battery);
        }
        if (isset($_GET['pageNumber'])) {
            $pageNumber = $_GET['pageNumber'];
        }
    } else {
        $filter_search = $_GET['search_text'];
        $query = $query . " WHERE " . GQ_searchArray(generateArrayFromWords($filter_search)); //generating and attaching query
    }

    //this is query generation from whatever data is given
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'mobcom';
    $con = mysqli_connect($server, $username, $password, $db);


    if ($con) {
        //to get total item in the DB
        $query .= " ORDER BY RAND() ";
        if ($result = $con->query($query)) {
            if ($result->num_rows > 0) {
                $total_products = mysqli_num_rows($result);
            } else {
                //echo "<br>no products<br>"; 
                echo "";
            }
        } else {
            //echo "<h2>QUERY PROBLEM</h2>"; 
            echo '';
        }
        //to get ppaginated data
        if ($result = $con->query($query)) {
            //. GQ_pageNumber($pageNumber, $itemsPerPage)
            //echo "<br>This page: " . mysqli_num_rows($result) . "<br>";
            echo '';
        } else {
            //echo "<h2>QUERY PROBLEM</h2>";
            echo '';
        }
    } else {
        die('Connection Failed ' . mysqli_connect_error());
    }

    //close the connection
    $con->close()
    ?>

</head>

<body class="bg-light">
    <input type='text' name='searching' id='searching' form='filters_form' placeholder='nothing' hidden>
    <input type='number' name='pageNumber' id='pageNumber' form='filters_form' placeholder='page' value=1 hidden>
    <input type='submit' id="filter_submit" name='filter_submit' form='filters_form' hidden>
    <!-- Navbar Start -->

    <?php

    require('modules/navbar.php');

    ?>

    <!-- Navbar End -->

    <!-- Breadcrumb Start -->

    <div class="container-fluid mt-3">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/mobcom">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Newly Added</li>
            </ol>
        </nav>

    </div>

    <!-- Breadcrumb End -->

    <!-- Main Content Start -->

    <div class="container-fluid min-vh-100">

        <div class="row">

            <!-- Filter Start -->

            <div class="col-md-2 mb-3">

                <div class="card card-filter" style="width: auto; height: auto;">

                    <div class="card-body p-2 m-1">

                        <h5 class="card-title text-center font-weight-bold mb-3">
                            <i class="fa fa-filter" aria-hidden="true"></i>
                            Filters
                        </h5>

                        <!-- Filter Form Start -->

                        <form method="GET" id='filters_form'>

                            <!-- Filter Price Start -->

                            <div class="title">

                                <a href="#" class="card-link text-dark" data-toggle="collapse" data-target="#collapse_1">
                                    <h6 class="text-dark font-weight-bold">Price Range
                                        <i class="icon-control fa fa-caret-down float-right mr-2" aria-hidden="true">
                                        </i>
                                    </h6>
                                </a>

                            </div>

                            <div class="filter-content collapse" id="collapse_1">

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="price[]" id='price_<5000' value="<5000">
                                    <div class="custom-control-label">₹ 5000 & below</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="price[]" id='price_5000-10000' value="5000-10000">
                                    <div class="custom-control-label">₹ 5000 to ₹ 9999</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="price[]" id='price_10000-15000' value="10000-15000">
                                    <div class="custom-control-label">₹ 10000 to ₹ 14999</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="price[]" id='price_15000-30000' value="15000-30000">
                                    <div class="custom-control-label">₹ 15000 to ₹ 29999</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="price[]" id='price_>30000' value=">30000">
                                    <div class="custom-control-label">₹ 30000 & above </div>
                                </label>

                            </div>

                            <!-- Filter Price End -->

                            <hr class="my-2">

                            <!-- Filter Brand Start -->

                            <div class="title">

                                <a href="#" class="card-link text-dark" data-toggle="collapse" data-target="#collapse_2">
                                    <h6 class="text-dark font-weight-bold">Brand
                                        <i class="icon-control fa fa-caret-down float-right mr-2" aria-hidden="true">
                                        </i>
                                    </h6>
                                </a>

                            </div>

                            <div class="filter-content collapse" id="collapse_2">

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand[]" id='brand_Apple' value="Apple">
                                    <div class="custom-control-label">Apple
                                    </div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand[]" id='brand_Asus' value="Asus">
                                    <div class="custom-control-label">Asus

                                    </div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand[]" id='brand_Nokia' value="Nokia">
                                    <div class="custom-control-label">Nokia

                                    </div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand[]" id='brand_Oneplus' value="Oneplus">
                                    <div class="custom-control-label">One Plus

                                    </div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand[]" id='brand_Oppo' value="Oppo">
                                    <div class="custom-control-label">Oppo

                                    </div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand[]" id='brand_Mi' value="Mi">
                                    <div class="custom-control-label">Mi

                                    </div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand[]" id='brand_Realme' value="Realme">
                                    <div class="custom-control-label">Realme

                                    </div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand[]" id='brand_Honor' value="Honor">
                                    <div class="custom-control-label">Honor

                                    </div>
                                </label>

                            </div>

                            <!-- Filter Brand End -->

                            <hr class="my-2">

                            <!-- Filter RAM Start -->

                            <div class="title">

                                <a href="#" class="card-link text-dark" data-toggle="collapse" data-target="#collapse_3">
                                    <h6 class="text-dark font-weight-bold">Ram
                                        <i class="icon-control fa fa-caret-down float-right mr-2" aria-hidden="true">
                                        </i>
                                    </h6>
                                </a>

                            </div>

                            <div class="filter-content collapse" id="collapse_3">

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="ram[]" id='ram_>6' value=">6">
                                    <div class="custom-control-label">6 GB & Above</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="ram[]" id='ram_=4' value="=4">
                                    <div class="custom-control-label">4 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="ram[]" id='ram_=3' value="=3">
                                    <div class="custom-control-label">3 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="ram[]" id='ram_=2' value="=2">
                                    <div class="custom-control-label">2 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="ram[]" id='ram_=1' value="=1">
                                    <div class="custom-control-label">1 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="ram[]" id='ram_<1' value="<1">
                                    <div class="custom-control-label">Less than 1 GB</div>
                                </label>


                            </div>

                            <!-- Filter RAM End -->

                            <hr class="my-2">

                            <!-- Filter Storage Start -->

                            <div class="title">

                                <a href="#" class="card-link text-dark" data-toggle="collapse" data-target="#collapse_4">
                                    <h6 class="text-dark font-weight-bold">Internal Storage
                                        <i class="icon-control fa fa-caret-down float-right mr-2" aria-hidden="true">
                                        </i>
                                    </h6>
                                </a>

                            </div>

                            <div class="filter-content collapse" id="collapse_4">

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage[]" id='storage_>256' value=">256">
                                    <div class="custom-control-label">256 GB & Above</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage[]" id='storage_128-256' value="128-256">
                                    <div class="custom-control-label">128-256 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage[]" id='storage_64-128' value="64-128">
                                    <div class="custom-control-label">64-128GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage[]" id='storage_32-64' value="32-64">
                                    <div class="custom-control-label">32-64 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage[]" id='storage_16-32' value="16-32">
                                    <div class="custom-control-label">16-32 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage[]" id='storage_8-16' value="8-16">
                                    <div class="custom-control-label">8-16 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage[]" id='storage_4-8' value="4-8">
                                    <div class="custom-control-label">4-8 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage[]" id='storage_2-4' value="2-4">
                                    <div class="custom-control-label">2-4 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage[]" id='storage_<2' value="<2">
                                    <div class="custom-control-label">Less than 2 GB</div>
                                </label>

                            </div>

                            <!-- Filter Storage End -->

                            <hr class="my-2">

                            <!-- Battery Capacity Start -->

                            <div class="title">

                                <a href="#" class="card-link text-dark" data-toggle="collapse" data-target="#collapse_5">
                                    <h6 class="text-dark font-weight-bold">Battery Capacity
                                        <i class="icon-control fa fa-caret-down float-right mr-2" aria-hidden="true">
                                        </i>
                                    </h6>
                                </a>

                            </div>

                            <div class="filter-content collapse" id="collapse_5">

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="battery[]" id='battery_1000-2000' value="1000-2000">
                                    <div class="custom-control-label">1000-1999 mAh</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="battery[]" id='battery_2000-3000' value="2000-3000">
                                    <div class="custom-control-label">2000-2999mAh</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="battery[]" id='battery_3000-4000' value="3000-4000">
                                    <div class="custom-control-label">3000-3999mAh</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="battery[]" id='battery_>5000' value=">5000">
                                    <div class="custom-control-label">5000mAh & Above</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="battery[]" id='battery_<1000' value="<1000">
                                    <div class="custom-control-label">Less than 1000 mAh</div>
                                </label>

                            </div>

                            <!-- Battery Capacity End -->

                            <hr class="my-2">


                            <div class="mt-3 mb-5">
                                <button type="button" onclick="paginationFilter(1)" class="btn btn-primary float-left">Apply</button>
                                <button type="reset" class="btn btn-secondary float-right">
                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                </button>
                            </div>

                        </form>

                        <!-- Filter Form End -->

                    </div>

                </div>

            </div>

            <!-- Filter End -->

            <!-- Product List Start -->

            <div class="col-md-10">

                <div class="form-inline">
                    <strong class="mr-md-auto"><?php echo $total_products; ?> Products found</strong>
                </div>

                <!-- Product Card Start -->
                <!--    TEMPORARY REFERENCE
                    <div class="card card-product-list mx-2 my-3 p-3">

                        <div class="row no-gutters">

                            <div class="col-md-3 mb-2">
                                <a href="#">
                                    <img class="product-img" src="images/phone_images/71Sinqbw35L._SL1500_.jpg">
                                </a>
                            </div>

                            <div class="col-md-6">

                                <div class="info-main">
                                    <a class="card-link" href="#">
                                        <h5 class="font-weight-bold">Samsung Galaxy M31 (Fusion Black, 64 GB) </h5>
                                    </a>

                                    <div class="mb-3">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="badge badge-success p-2">4.5</span>
                                        <span class="text-muted">Ratings</span>
                                    </div>

                                    <div>
                                        <ul class="px-2 mx-3">
                                            <li>6 GB RAM | 64 GB ROM | Expandable Upto 512 GB</li>
                                            <li>6.4 inch Full HD+ Display</li>
                                            <li>64 MP + 8 MP + 5 MP + 5 MP | 32 MP Front Camera</li>
                                            <li>6000 mAh Battery</li>
                                            <li>Samsun Exynos 9 Octa 9611 Processor</li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="col-sm-3">

                                <div class="info-price pl-4 mr-4">

                                    <h3 class="font-weight-bold">₹ 17,249</h3>

                                    <span class="badge badge-pill badge-danger verify-pill p-2">
                                        MobCOM Verified
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span>

                                    <p class="text-muted my-2">No Cost EMI</p>
                                    <p class="text-muted my-2">Upto <b>₹ 6,950</b> Off on Exchange</p>

                                    <button type="button" class="btn btn-outline-secondary btn-block mt-4">
                                        View More
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>
                -->
                <!-- Product Card End -->
                <?php
                cardRenderer($result);  //to display the cards
                paginationRenderer($total_products, $itemsPerPage, $pageNumber);    //for pagination
                ?>
                <!-- Pagination Start -->



                <!-- Pagination End -->

            </div>

            <!-- Product List End -->

        </div>

    </div>

    <!-- Main Content End -->

    <!-- Footer Start -->

    <?php

    require('modules/footer.php');

    ?>

    <!-- Footer End -->

</body>

<?php
include('modules/retrieval.php');
?>

<script>
    function paginationFilter(value) {
        document.getElementById('pageNumber').value = value;
        document.getElementById('filter_submit').click();
    }
</script>

</html>