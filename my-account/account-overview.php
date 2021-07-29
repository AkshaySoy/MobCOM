<div class="tab-pane fade show active" id="account-overview" role="tabpanel">

    <!-- Top Card Start -->

    <div class="card card-mycart mb-3">

        <div class="card-body">

            <div>
                <div class="text">
                    <h5 class="font-weight-bold p-0 m-0">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <?php echo "{$_SESSION['first_name']} {$_SESSION['last_name']}"; ?>
                        <br>
                        <small class="text-muted"> <?php echo "{$_SESSION['user_email']}"; ?> </small>
                    </h5>

                </div>
            </div>
            <hr>
            <p>
                <i class="fa fa-map-marker"></i>
                <strong> My Address </strong>
                <br>
                <?php echo "{$_SESSION['user_address_1']}"; ?>
            </p>

            <!-- Order Status Start -->

            <!-- Order Query -->

            <?php

            $activeUser = $_SESSION['user_id'];

            $query = "SELECT * FROM order_master WHERE user_id = $activeUser";

            $res = mysqli_query($conn, $query);

            if ($res) {
                $num = mysqli_num_rows($res);
                mysqli_free_result($res);
            }

            ?>

            <!-- Awaiting Order -->

            <?php

            $awaiting = "SELECT * FROM order_master 
                         WHERE NOT order_status = 'delivered'
                         AND user_id = $activeUser";
            $res2 = mysqli_query($conn, $awaiting);

            if ($res2) {
                $num2 = mysqli_num_rows($res2);
                mysqli_free_result($res2);
            }

            ?>

            <!-- Delivered Item -->

            <?php

            $delivered = "SELECT * FROM order_master 
                         WHERE order_status = 'delivered'
                         AND user_id = $activeUser";
            $res3 = mysqli_query($conn, $delivered);

            if ($res3) {
                $num3 = mysqli_num_rows($res3);
                mysqli_free_result($res3);
            }

            ?>

            <div class="card-group mb-2">

                <div class="card bg-light">
                    <div class="p-3">
                        <h4 class="title"><?php echo $num ?></h4>
                        <span>Orders</span>
                    </div>
                </div>

                <div class="card bg-light">
                    <div class="p-3">
                        <h4 class="title"><?php echo $num2 ?></h4>
                        <span>Awaiting delivery</span>
                    </div>
                </div>

                <div class="card bg-light">
                    <div class="p-3">
                        <h4 class="title"><?php echo $num3 ?></h4>
                        <span>Delivered items</span>
                    </div>
                </div>

            </div>

            <!-- Order Status End -->

        </div>

    </div>

    <!-- Top Card End -->

    <!-- Bottom Card Start -->

    <div class="card card-mycart mb-3">

        <div class="card-body">

            <h5 class="card-title font-weight-bold mb-3">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                Recent orders
            </h5>


            <div class="row">

                <?php

                $recent = "SELECT `product_master`.*, `order_master`.*
                          FROM  `product_master`, `order_master`
                          WHERE `order_master`.`user_id`= $activeUser
                          AND `order_master`.`product_id`=`product_master`.`product_id`
                          ORDER BY `order_master`.`date_added` DESC
                          LIMIT 2";

                $res4 = mysqli_query($conn, $recent);

                if ($res4) {
                    $num4 = mysqli_num_rows($res4);
                }

                if ($num4 == 0) {

                    echo "
                      
                        <div class='container-fluid'>
    
                            <div class='alert alert-danger' role='alert'>
                                <i class='fa fa-info-circle' aria-hidden='true'></i>
                                No Recent Orders
                            </div>
    
                        </div>
    
                        ";
                } else {

                    while ($row = mysqli_fetch_object($res4)) {

                        echo "
    
                        <div class='col-md-6'>
    
                                <div class='product-detail-small mb-3'>
    
                                    <div class='border text-center'>
                                        <img class='product-detail-small-img' src='images/$row->brand_name/$row->model_name/1.jpg'>
                                    </div>
    
                                    <div class='product-detail-small-info'>
    
                                        <div class='text-muted'>
                                            <i class='fa fa-calendar' aria-hidden='true'></i>
                                            $row->date_added
                                        </div>
    
                                        <p>$row->brand_name $row->model_name ($row->model_colour, $row->internal_storage GB)
                                            <br>
                                            <span class='text-success'>$row->order_status</span>
                                        </p>
    
                                    </div>
    
                                </div>
    
                            </div>
    
                        ";
                    }
                }



                ?>

                <!-- Order Detail Start -->


                <!-- Order Detail End -->

                <a href="#my-orders" data-toggle="list" class="btn btn-outline-primary btn-block my-2 mx-2">
                    See all orders
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>

            </div>

        </div>

        <!-- Bottom Card End -->

    </div>


</div>