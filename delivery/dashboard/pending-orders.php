<!doctype html>
<html lang="en">

<head>

    <?php

    require('../delivery-modules/header.php');

    ?>

</head>

<body>

    <?php

    require('../delivery-modules/navbar.php');

    ?>

    <div class="container-fluid">

        <div class="row">

            <?php

            require('../delivery-modules/sidebar.php');

            ?>


            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Pending Orders</h1>
                </div>

                <!-- Main Content Start -->

                <div class="container-fluid p-2">

                    <!-- Table Start -->

                    <table class="table table-hover table-bordered table-responsive-sm shadow" data-toggle="table" data-pagination="true" data-search="true" data-advanced-search="true" data-id-table="advancedTable">

                        <thead class="text-center thead-light">
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Manage Order</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">State</th>
                                <th scope="col">City</th>
                                <th scope="col">Pin Code</th>
                                <th scope="col">Order Status</th>

                            </tr>
                        </thead>

                        <!-- Table Content Start -->

                        <tbody class="text-center">

                            <tr>
                                <th scope="row">123456789</th>
                                <td class="align-middle">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#manageOrder">Enter OTP</button>
                                </td>
                                <td>John Doe</td>
                                <td>789456123</td>
                                <td>Some Random Address</td>
                                <td>Jharkhand</td>
                                <td>Ranchi</td>
                                <td>833201</td>           
                                <td>Order Confirmed</td>

                            </tr>

                        </tbody>

                    </table>

                    <!-- Table End -->

                    <!-- Modal -->

                    <div class="modal fade" id="manageOrder" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="manageOrderLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="manageOrderLabel">Enter OTP</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="">

                                        <input type="number" class="form-control mb-3" id="enter-otp" name="enter-otp"></input>

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Enter</button>

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

    require('../delivery-modules/footer.php');

    ?>

</body>

</html>