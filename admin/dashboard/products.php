<!doctype html>
<html lang="en">

<head>

    <?php

    require('../admin-modules/header.php');

    ?>

</head>

<body>

    <?php

    require('../admin-modules/navbar.php');

    ?>

    <div class="container-fluid">

        <div class="row">

            <?php

            require('../admin-modules/sidebar.php');

            ?>


            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Manage Products</h1>
                </div>

                <!-- Main Content Start -->

                <div class="container-fluid p-2">

                    <button type="button" class="btn btn-secondary btn-sm mb-3" data-toggle="modal" data-target="#addProduct">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Add Product
                    </button>

                    <!--Add Product  Modal | Form in admin-modules -->

                    <?php

                    require('../admin-modules/add-product.php');

                    // Manage Product Modal | Form in admin-modules | Use AJAX to display current info in placholder of input tag

                    require('../admin-modules/manage-product.php');

                    ?>

                    <!-- Table Start -->

                    <table class="table table-hover table-bordered table-responsive-sm shadow" data-toggle="table" data-pagination="true" data-search="true" data-advanced-search="true" data-id-table="advancedTable">

                        <thead class="text-center thead-light">
                            <tr>
                                <th data-sortable="true" scope="col">#</th>
                                <th scope="col">Product Image</th>
                                <th data-sortable="true" data-field="<?php $row->brand_name ?>" scope="col">Brand</th>
                                <th data-sortable="true" data-field="<?php $row->model_name ?>" scope="col">Model Name</th>
                                <th data-sortable="true" data-field="<?php $row->model_number ?>" scope="col">Model Number</th>
                                <th data-sortable="true" data-field="<?php $row->model_price ?>" scope="col">Price</th>
                                <th data-sortable="true" data-field="<?php $row->mobile_availabilty ?>" scope="col">Stock</th>
                                <th scope="col">Manage</th>
                            </tr>
                        </thead>

                        <!-- Table Content Start -->

                        <tbody class="text-center">

                            <?php

                            $query = "SELECT * FROM `product_master`";
                            $res = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_object($res)) {

                                echo "

                                <tr>
                                    <th scope='row'>$row->product_id</th>
                                    <td>
                                        <img class='img-fluid' height='50px' width='50px' src='../../images/$row->brand_name/$row->model_name/1.jpg' alt=''>
                                    </td>
                                    <td>$row->brand_name</td>
                                    <td>$row->model_name</td>
                                    <td>$row->model_number/A</td>
                                    <td>₹$row->mobile_price</td>
                                    <td>$row->mobile_availabilty</td>
                                    <td class='align-middle'>
                                        <button id='$row->product_id' type='button' class='btn btn-primary btn-sm mb-3' data-toggle='modal' data-target='#manageProduct'>Manage</button>
                                    </td>
                                </tr>
                                
                                
                                ";
                            }

                            ?>
                            <!-- 
                            <tr>
                                <th scope="row">2</th>
                                <td>
                                    <img class="img-fluid" height="50px" width="50px" src="../../images/Apple/iphone 11/2.jpg" alt="">
                                </td>
                                <td>Apple</td>
                                <td>iPhone 11</td>
                                <td>MN8X2HN/A</td>
                                <td>52000</td>
                                <td>2500</td>
                                <td class="align-middle">
                                    <button type="button" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#manageProduct">Manage</button>
                                </td>
                            </tr> -->

                        </tbody>

                    </table>

                    <!-- Table End -->

                </div>

                <!-- Main Content End -->

            </main>

        </div>

    </div>

    <?php

    require('../admin-modules/footer.php');

    ?>

</body>

</html>