<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    require('modules/header.php');

    ?>

</head>

<body class="bg-light">


    <!-- Navbar Start -->

    <?php

    require('modules/navbar.php');

    ?>

    <!-- Navbar End -->

    <!-- Main Content Start -->

    <div class="container-fluid my-3 py-2">

        <div class="row">

            <!-- My Cart Start -->

            <div class="col-lg-8">

                <div class="card card-mycart mb-3">

                    <div class="card-body">

                        <h5 class="font-weight-bold mb-4">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            My Cart (1)
                        </h5>

                        <!-- Product Start -->

                        <div class="row mb-4">

                            <div class="col-md-5 col-lg-3 col-xl-3 mb-2">
                                <a href="#">
                                    <div class="border text-center">
                                        <img class="img-fluid my-3" width="75px" src="images/phone_images/samsung-galaxy-a21/samsung-galaxy-a21-front.jpeg">
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-7 col-lg-9 col-xl-9">

                                <div>

                                    <div class="d-flex justify-content-between">

                                        <div>

                                            <a class="card-link text-dark" href="#">
                                                <h5>Samsung Galaxy A21s (Silver, 128 GB)</h5>
                                            </a>

                                            <p class="text-success">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                In Stock
                                            </p>

                                            <p class="text-muted">

                                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                Sold By : TrueComRetail
                                                <br>
                                                <i class="fa fa-truck" aria-hidden="true"></i>
                                                Ships in 3-4 business days

                                            </p>

                                        </div>

                                        <div class="mx-3">

                                            <h4>₹ 17,249</h4>

                                            <span class="badge badge-pill badge-danger verify-pill p-2">
                                                MobCOM Verified
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </span>

                                            <div class="my-3">
                                                <a href="#" class="card-link text-danger">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                    Remove Item
                                                </a>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">

                        <!-- Product End -->

                        <div class="alert alert-warning" role="alert">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                            Currenty accepting only Cash On Delivery.
                        </div>

                    </div>

                </div>

            </div>

            <!-- My Cart End -->

            <!-- Right Card Start -->

            <div class="col-lg-4">

                <div class="card card card-mycart mb-3">

                    <div class="card-body">

                        <h5 class="font-weight-bold mb-3">Total Amount</h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Subtotal
                                <span>₹ 17,249</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                                Shipping
                                <span class="text-success">Free</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">

                                <div>
                                    <strong>Total Amount (Including GST)</strong>
                                </div>
                                <span><strong>₹ 17,249</strong></span>
                            </li>
                        </ul>

                        <a href="#" type="button" class="btn btn-primary btn-block p-2">
                            Go To Checkout
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                        <a href="#" type="button" class="btn btn-outline-secondary btn-block p-2">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            Continue Shopping
                        </a>



                    </div>
                </div>
            </div>

            <!-- Right Card End -->

        </div>

    </div>

    <!-- Main Content End -->

    <!-- Footer Start -->

    <?php

    require('modules/footer.php');

    ?>

    <!-- Footer End -->

</body>

</html>