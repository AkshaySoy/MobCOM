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
                    <h1 class="h2">Manage Orders</h1>
                </div>

                <!-- Main Content Start -->

                <div class="container-fluid p-2">

                    <!-- Table Start -->

                    <table class="table table-hover table-bordered table-responsive-sm shadow" data-toggle="table" data-pagination="true" data-search="true" data-advanced-search="true" data-id-table="advancedTable">

                        <thead class="text-center thead-light">
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Customer Address</th>
                                <th scope="col">Product ID</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Date Purchased</th>
                                <th scope="col">Order Status</th>
                                <th scope="col">Track Status</th>
                                <th scope="col">Manage Order</th>
                            </tr>
                        </thead>

                        <!-- Table Content Start -->

                        <tbody class="text-center">

                            <?php

                            $query = "SELECT`user_master`.*, `product_master`.*, `order_master`.*
                                      FROM `user_master`, `product_master`, `order_master`
                                      WHERE `user_master`.`user_id`=`order_master`.`user_id`
                                      AND `product_master`.`product_id`=`order_master`.`product_id`
                                      GROUP BY `product_master`.`product_id`";
   
                            $res = mysqli_query($conn, $query);


                            while ($row = mysqli_fetch_object($res)) {

                                echo "

                                    <tr>
                                        <th scope='row'>$row->order_id</th>
                                        <td>$row->first_name $row->last_name </td>
                                        <td>$row->order_address</td>
                                        <td>$row->product_id</td>
                                        <td>$row->brand_name $row->model_name</td>
                                        <td>$row->date_added</td>
                                        <td>$row->order_status</td>
                                        <td>$row->track_status</td>
                                        <td class='align-middle'>
                                            <button onclick='document.getElementById(`order_id`).value=$row->order_id' type='button' class='btn btn-primary' data-toggle='modal' data-target='#manageOrder'>Manage</button>
                                        </td>
                                    </tr>
                                
                                ";
                            }

                            //to check if updated
                            if (isset($_GET['updateStatus'])){
                                echo "<h1>Upadating status</h1>";

                                $server = 'localhost';
                                $username = 'root';
                                $password = '';
                                $db = 'mobcom';
                                $con = mysqli_connect($server, $username, $password, $db);

                                $order_id = $_GET['order_id'];
                                $order_status = $_GET['order-status'];
                                $track_status = $GET['track-status'];
                                $deli_id = $GET['assign-deli'];

                                if ($con) {
                                    //to get total item in the DB
                                    $query = "UPDATE TABLE `delivery_master` SET `deli_id`=$deli_id WHERE `order_id`=$order_id";
                                    $con->query($query);
                                }

                                echo "<script>location.replace('orders.php')</script>";
                            }

                            ?>


                        </tbody>

                    </table>

                    <!-- Table End -->

                    <!-- Modal -->
                    

                    <div class="modal fade" id="manageOrder" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="manageOrderLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="manageOrderLabel">Manage Order</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="">
                                        <div class="form-group" hidden>
                                            
                                            <label for="order_id">Order Id</label>
                                            <input class="custom-select d-block w-100" id="order_id" name="order_id">

                                        </div>
                                        <div class="form-group">

                                            <label for="order-status">Change Order Status</label>
                                            <select class="custom-select d-block w-100" id="order-status" name="order-status" required>
                                                <option value selected disabled>Select Status</option>
                                                <option value="order confirmed">Order Confirmed</option>
                                                <option value="picked by courier">Picked by courier</option>
                                                <option value="on the way">On the way</option>
                                                <option value="delivered">Delivered</option>
                                            </select>

                                        </div>

                                        <div class="form-group">

                                            <label for="track-status">Change Track Status</label>
                                            <select class="custom-select d-block w-100" id="track-status" name="track-status" required>
                                                <option value selected disabled>Select Status</option>
                                                <option value="Preparing for dispatch">Preparing for dispatch</option>
                                                <option value="package shipped">Package Shipped</option>
                                                <option value="on the way">Package arrivied at your nearest location</option>
                                                <option value="delivered">Out for delivery</option>
                                            </select>

                                        </div>


                                        <div class="form-group">

                                            <label for="assign-deli">Assign Delivery Associate</label>


                                            <select class="custom-select d-block w-100" id="assign-deli" name="assign-deli" required>
                                                <option value selected disabled>Select Delivery Associate</option>
                                                    
                                                <?php
                                                   $server = 'localhost';
                                                    $username = 'root';
                                                    $password = '';
                                                    $db = 'mobcom';
                                                    $con = mysqli_connect($server, $username, $password, $db);


                                                    if ($con) {
                                                        //to get total item in the DB
                                                        $query = "SELECT * FROM `delivery_master`";
                                                        if ($result = $con->query($query)) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo "<option value=$row[deli_id]>
                                                                    $row[deli_name]
                                                                </option>";
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </select>

                                        </div>

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="updateStatus">Update</button>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

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