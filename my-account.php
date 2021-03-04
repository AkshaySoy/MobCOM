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

    <div class="container-fluid my-3">
        <h4 class="font-weight-bold">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            My Account
        </h4>
    </div>

    <!-- Main Content Start -->

    <div class="container-fluid my-3">

        <div class="row">

            <!-- Left Sidebar Start -->

            <div class="col md-3">

                <nav class="list-group card-mycart mb-3" id="list-tab" role="tablist">

                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-overview" role="tab">
                        Account overview
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#my-orders" role="tab">
                        My Orders
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#my-settings" role="tab">
                        Settings
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                        Log out
                    </a>

                </nav>

            </div>

            <!-- Left Sidebar End -->

            <!-- Right Side Start -->

            <div class="col-md-9">

                <div class="tab-content">

                    <?php

                    // Account Overview Start

                    require('my-account/account-overview.php');

                    // Account Overview End

                    // My Orders Start

                    require('my-account/my-orders.php');

                    // My Orders End

                    // My Settings Start

                    require('my-account/my-settings.php')

                    // My Settings End

                    ?>

                </div>

                <!-- Right Side End -->

            </div>

            <!-- Main Content End -->

        </div>

    </div>

    <!-- Footer Start -->

    <footer class="container-fluid text-center text-muted mt-5 p-2" id="footer">

        <div class="mt-2 mb-5">
            <hr>
            <p class="m-0">Copyright <span class="fa fa-copyright"></span> Project RAPS</p>
            <a href="#" class="m-0 card-link text-muted"><small> Privacy Policy | </small></a>
            <a href="#" class="m-0 card-link text-muted"><small> Terms & Conditions </small></a>
            <p class="m-2"><span class="fa fa-mobile"></span></p>
        </div>

    </footer>

    <!-- Footer End -->

    <!-- Boostrap 4 JS -->

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->

    <script src="js/custom.js"></script>


</body>

</html>