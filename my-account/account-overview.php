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

            <div class="card-group mb-2">

                <div class="card bg-light">
                    <div class="p-3">
                        <h4 class="title">38</h4>
                        <span>Orders</span>
                    </div>
                </div>

                <div class="card bg-light">
                    <div class="p-3">
                        <h4 class="title">12</h4>
                        <span>Awaiting delivery</span>
                    </div>
                </div>

                <div class="card bg-light">
                    <div class="p-3">
                        <h4 class="title">50</h4>
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

                <!-- Order Detail Start -->

                <div class="col-md-6">

                    <div class="product-detail-small mb-3">

                        <div class="border text-center">
                            <img class="product-detail-small-img"
                                src="images/phone_images/samsung-galaxy-a21/samsung-galaxy-a21-front.jpeg">
                        </div>

                        <div class="product-detail-small-info">

                            <div class="text-muted">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                12.09.2019
                            </div>

                            <p>Samsung Galaxy A21s (Silver, 128 GB)
                                <br>
                                <span class="text-success">Order Confirmed</span>
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Order Detail End -->

                <!-- Order Detail Start -->

                <div class="col-md-6">

                    <div class="product-detail-small mb-3">

                        <div class="border text-center">
                            <img class="product-detail-small-img"
                                src="images/phone_images/samsung-galaxy-a21/samsung-galaxy-a21-front.jpeg">
                        </div>

                        <div class="product-detail-small-info">

                            <div class="text-muted">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                12.09.2019
                            </div>

                            <p>Samsung Galaxy A21s (Silver, 128 GB)
                                <br>
                                <span class="text-success">Shipped</span>
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Order Detail End -->

                <!-- Order Detail Start -->

                <div class="col-md-6">

                    <div class="product-detail-small mb-3">

                        <div class="border text-center">
                            <img class="product-detail-small-img"
                                src="images/phone_images/samsung-galaxy-a21/samsung-galaxy-a21-front.jpeg">
                        </div>

                        <div class="product-detail-small-info">

                            <div class="text-muted">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                12.09.2019
                            </div>

                            <p>Samsung Galaxy A21s (Silver, 128 GB)
                                <br>
                                <span class="text-success">Shipped</span>
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Order Detail End -->

                <a href="my-orders.html" class="btn btn-outline-primary btn-block my-2 mx-2">
                    See all orders
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>

            </div>

        </div>

        <!-- Bottom Card End -->

    </div>


</div>