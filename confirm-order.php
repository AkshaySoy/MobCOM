<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    $title = "MobCOM | Order Confirmed";
    require('modules/header.php');

    ?>

</head>

<body class="bg-light ">


    <!-- Navbar Start -->

    <?php

    require('modules/navbar.php');
    $order_id = "";
    $order_otp = "";
    if ( isset($_GET['order_id'])){
        $order_id = $_GET['order_id'];
        $order_otp = $_GET['order_otp'];
        require('modules/confirm-order-email.php');
        echo "<script>location.replace('confirm-order.php');</script>";
    }
    ?>

    <!-- Navbar End -->

    <!-- Main Content Start -->

    <div class="container-fluid my-3 py-2 min-vh-100">


        <div class="card mx-auto shadow" style="max-width:750px;">

            <div class="card-body">

                <header class="mb-4">
                    <h4 class="card-title font-weight-bold">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        Order Confirmed
                    </h4>
                </header>

                <p class="card-text">
                    Your order is successfully placed.
                    <br>
                    Please check your email for OTP. This will be used for verifying your order at delivery.
                    <br>
                    Estimated date of arrival : <b> 22 September 2021 </b>
                </p>

                <div class="alert alert-success" role="alert">
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <a href="my-account.php" class="alert-link">Click here</a> to view your order.
                </div>

            </div>

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