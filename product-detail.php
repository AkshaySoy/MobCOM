<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    $title = "MobCOM | Samsung Galaxy A21";
    require('modules/header.php');
    require('modules/displayer.php');           //for getting the details from the databse
    require('modules/query-generators.php');    //for getting query

    //DTABASE CONNECTION
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'mobcom';
    $con = mysqli_connect($server, $username, $password, $db);
    if (isset($_GET['product_id'])){
        $product_details = $con -> query (GQ_productId($_GET['product_id']));
        if ($product_details->num_rows > 0) {
            $row = $product_details->fetch_assoc();
        } else { 
            echo "<script>alert('product id invalid.');window.location.replace('./')</script>";
        }
    }else {
        echo "<script>alert('invalid Link'); window.location.replace('./') </script>";
    }
    ?>

</head>

<body class="bg-light">

    <!-- Navbar Start -->

    <?php

    require('modules/navbar.php');

    ?>

    <!-- Navbar End -->

    <!-- Breadcrumb Start -->

    <div class="container-fluid mt-3">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Product List</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php
                        echo "$row[brand_name] $row[model_name]";
                    ?>
                </li>
            </ol>
        </nav>

    </div>

    <!-- Breadcrumb End -->

    <div class="cpntainer-fluid min-vh-100">

        <!-- Top Content Start -->

        <div class="container-fluid my-3">

            <div class="row">

                <!-- Product Image Start -->

                <div class="col-md-6">

                    <div class="card" style="height: 100%;">

                        <div class="main-image">    
                            <?php
                                echo "<img class='detail-img my-3' id='mainImage' src='images/$row[brand_name]/$row[model_name]/1.jpg'>";
                            ?>
                            

                        </div>

                        <!-- Thumbnail Start -->

                        <div class="thumbnail-image text-center mb-3">
                            <?php
                                $location = "./images/$row[brand_name]/$row[model_name]";
                                $filesList = scandir($location , 0);
                                $imageList = [];
                                $count = 0;
                                for ($i=0; $i<count($filesList) ; $i++){
                                    if(strlen($filesList[$i]) > 3  & strtolower(substr($filesList[$i] , -4))=='.jpg'){
                                        echo "<img class='img-thumbnail thumb-img mx-2 p-2' onmouseover=\"document.getElementById('mainImage').src='images/$row[brand_name]/$row[model_name]/$filesList[$i]'\" src='images/$row[brand_name]/$row[model_name]/$filesList[$i]'>";
                                        $count = $count +1;
                                    }
                                }
                            ?>
                        </div>

                        <!-- Thumbnail End -->



                    </div>

                </div>

                <!-- Product Image End -->

                <!-- Product Short Info Start -->

                <div class="col-md-6 py-3">

                    <h3 class="font-weight-bold">
                    <?php
                        echo "$row[brand_name] $row[model_name] ($row[model_colour], $row[internal_storage] GB)";
                    ?>
                    </h3>

                    <div class="ratings my-2">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="badge badge-success p-2">4.5</span>
                        <span class="text-muted">Ratings</span>
                    </div>

                    <h2>
                        <?php
                            echo "₹ " . number_format($row['mobile_price'],0,'.',',');
                        ?>
                    </h2>

                    <span class="badge badge-pill badge-danger verify-pill p-2">
                        MobCOM Verified
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </span>

                    <p class="text-muted my-2">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        No Cost EMI
                    </p>
                    <!--    NOT ADDING THIS
                    <p class="text-muted my-2">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        Upto <b>₹ 6,950</b> Off on Exchange
                    </p>
                    -->

                    <dl class="row mt-3">

                        <dt class="col-sm-3">Manufacturer</dt>
                        <dd class="col-sm-9"><?php echo "$row[brand_name]";?></dd>

                        <dt class="col-sm-3">Model Name</dt>
                        <dd class="col-sm-9"><?php echo"$row[model_name]";?></dd>

                        <dt class="col-sm-3">Delivery time</dt>
                        <dd class="col-sm-9">3-4 days</dd>

                        <dt class="col-sm-3">Availabilty</dt>
                        <dd class="col-sm-9 text-success">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            In Stock
                        </dd>

                    </dl>

                    <div class="row">

                        <div class="group col-md">

                            <!--    ADDING CONDITION FOR AVailablity    -->
                            <a href="#" class="btn btn-primary">
                                <i class="fa fa-play" aria-hidden="true"></i>
                                Buy Now
                            </a>

                            <a href="#" class="btn btn-success">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                Add to Cart
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Product Short Info End -->

            </div>

        </div>

        <!-- Top Content End -->

        <!-- Bottom Content Start -->

        <div class="container-fluid my-3">

            <div class="row">

                <!-- Left Side Content Start -->

                <div class="col-md-8">

                    <h4 class="font-weight-bold my-3">Product Description</h4>

                    <p>
                        <?php
                            echo "$row[product_desc]";
                        ?>
                    </p>

                    <h4 class="font-weight-bold my-3">Specifications</h4>

                    <!-- Table Start -->
                    <?php
                        $size_inches = round(($row['display_size']/2.54), 1);
                        if ($row['primary_camera'] == ''){
                            $isPCamera = 'Yes';
                        }else{
                            $isPCamera = 'No';
                        }
                        if ($row['secondary_camera'] == ''){
                            $isSCamera = 'Yes';
                        }else{
                            $isSCamera = 'No';
                        }
                        echo "
                            <table class='table table-bordered bg-white'>
                                <tbody>
                    
                                    <!-- General -->
                    
                                    <tr>
                                        <th colspan='2'>General</th>
                                    </tr>
                                    <tr>
                                        <td>Model Number</td>
                                        <td>$row[model_number]</td>
                                    </tr>
                                    <tr>
                                        <td>Model Name</td>
                                        <td>$row[model_name]</td>
                                    </tr>
                                    <tr>
                                        <td>Colour</td>
                                        <td>$row[model_colour]</td>
                                    </tr>
                    
                                    <!-- Display -->
                    
                                    <tr>
                                        <th colspan='2'>Display</th>
                                    </tr>
                                    <tr>
                                        <td>Display Size</td>
                                        <td>$row[display_size] cm ($size_inches inch)</td>
                                    </tr>
                                    <tr>
                                        <td>Resolution</td>
                                        <td>$row[display_resolution]</td>
                                    </tr>
                    
                                    <!-- OS & Processor -->
                    
                                    <tr>
                                        <th colspan='2'>OS & Processor</th>
                                    </tr>
                                    <tr>
                                        <td>Operating System</td>
                                        <td>$row[operating_system]</td>
                                    </tr>
                                    <tr>
                                        <td>Processor</td>
                                        <td>$row[processor]</td>
                                    </tr>
                    
                                    <!-- Memory & Storage Features -->
                    
                                    <tr>
                                        <th colspan='2'>Memory & Storage Features</th>
                                    </tr>
                                    <tr>
                                        <td>Internal Storage</td>
                                        <td>$row[internal_storage] GB</td>
                                    </tr>
                                    <tr>
                                        <td>RAM</td>
                                        <td>$row[ram] GB</td>
                                    </tr>
                                    <tr>
                                        <td>Supported Memory Card Type</td>
                                        <td>microSD Expandable upto $row[memory_card_available]</td>
                                    </tr>
                    
                                    <!-- Camera Features -->
                    
                                    <tr>
                                        <th colspan='2'>Camera Features</th>
                                    </tr>
                                    <tr>
                                        <td>Primary Camera Available</td>
                                        <td>$isPCamera</td>
                                    </tr>
                                    <tr>
                                        <td>Primary Camera</td>
                                        <td>$row[primary_camera]</td>
                                    </tr>
                                    <tr>
                                        <td>Secondary Camera Available</td>
                                        <td>$isSCamera</td>
                                    </tr>
                                    <tr>
                                        <td>Secondary Camera</td>
                                        <td>$row[secondary_camera]</td>
                                    </tr>
                    
                                    <!-- Connectivity Features -->
                    
                                    <tr>
                                        <th colspan='2'>Connectivity Features</th>
                                    </tr>
                                    <tr>
                                        <td> Network Type</td>
                                        <td>$row[network_type]</td>
                                    </tr>
                                    <tr>
                                        <td>Supported Networks</td>
                                        <td>$row[network_type]</td>
                                    </tr>
                    
                                    <!-- Battery Capacity -->
                    
                                    <tr>
                                        <th colspan='2'>Battery & Power Features</th>
                                    </tr>
                                    <tr>
                                        <td>Battery Capacity</td>
                                        <td>$row[battery_capacity] mAh</td>
                                    </tr>
                    
                                    <!-- Dimensions -->
                    
                                    <tr>
                                        <th colspan='2'>Dimensions</th>
                                    </tr>
                                    <tr>
                                        <td>Width</td>
                                        <td>$row[mobile_width] mm</td>
                                    </tr>
                                    <tr>
                                        <td>Height</td>
                                        <td>$row[display_size] mm</td>
                                    </tr>
                                    <tr>
                                        <td>Depth</td>
                                        <td>$row[mobile_depth] mm</td>
                                    </tr>
                                    <tr>
                                        <td>Weight</td>
                                        <td>$row[mobile_weight] g</td>
                                    </tr>
                    
                                </tbody>
                            </table>
                        ";
                    ?>
                    <!-- Table End -->

                </div>

                <!-- Left Side Content End -->

                <!-- Right Side Content Start -->

                <div class="col-md-4">

                    <div class="card p-3">

                        <h4 class="font-weight-bold mb-3">Similar Products</h4>

                        <!-- Media Product Start -->

                        <div class="media mb-3">

                            <a href="#">
                                <img class="media-img mr-3" src="images/phone_images/71Sinqbw35L._SL1500_.jpg">
                            </a>

                            <div class="media-body">

                                <h6 class="m-0">
                                    <a class=" card-link" href="#">Samsung Galaxy M31 (Fusion Black, 64 GB)</a>
                                </h6>

                                <small class="mb-3">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="badge badge-success p-2">4.5</span>
                                    <span class="text-muted">Ratings</span>
                                </small>

                                <h5 class="font-weight-bold mt-1">₹ 17,249</h5>

                            </div>

                        </div>

                        <!-- Media Product End -->

                        <!-- Media Product Start -->

                        <div class="media mb-3">

                            <a href="#">
                                <img class="media-img mr-3" src="images/phone_images/71Sinqbw35L._SL1500_.jpg">
                            </a>

                            <div class="media-body">

                                <h6 class="m-0">
                                    <a class=" card-link" href="#">Samsung Galaxy M31 (Fusion Black, 64 GB)</a>
                                </h6>

                                <small class="mb-3">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="badge badge-success p-2">4.5</span>
                                    <span class="text-muted">Ratings</span>
                                </small>

                                <h5 class="font-weight-bold mt-1">₹ 17,249</h5>

                            </div>

                        </div>

                        <!-- Media Product End -->
                        <!-- Media Product Start -->

                        <div class="media mb-3">

                            <a href="#">
                                <img class="media-img mr-3" src="images/phone_images/71Sinqbw35L._SL1500_.jpg">
                            </a>

                            <div class="media-body">

                                <h6 class="m-0">
                                    <a class=" card-link" href="#">Samsung Galaxy M31 (Fusion Black, 64 GB)</a>
                                </h6>

                                <small class="mb-3">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="badge badge-success p-2">4.5</span>
                                    <span class="text-muted">Ratings</span>
                                </small>

                                <h5 class="font-weight-bold mt-1">₹ 17,249</h5>

                            </div>

                        </div>

                        <!-- Media Product End -->

                    </div>

                </div>

                <!-- Right Side Content End -->

            </div>

        </div>

        <!-- Bottom Content End -->

        <div class="container">

            <div class="alert alert-warning" role="alert">
                <i class="fa fa-info-circle" aria-hidden="true"></i>
                Currenty accepting only Cash On Delivery.
            </div>

        </div>

    </div>



    <!-- Footer Start -->

    <?php

    require('modules/footer.php');

    ?>

    <!-- Footer End -->

</body>

</html>