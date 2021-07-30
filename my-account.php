<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    $title = "MobCOM | My Account";
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

    <div class="container-fluid my-3 min-vh-100">

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
                    <a class="list-group-item list-group-item-action" href="logout.php">
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

    <?php

    require('modules/footer.php');

    ?>

    <script>
        $(document).on('change', '#state-select', function() {
            var stateID = $("#state-select").val();

            $.ajax({
                url: 'modules/get-cities.php',
                type: 'POST',
                data: {
                    POST_TYPE: 'GET_VIA_ID',
                    STATE_ID: stateID
                },
                success: function(res) {
                    console.log(res)
                    $("#city-select").html(res);
                }
            })
        })
    </script>

    <!-- Footer End -->


</body>

</html>