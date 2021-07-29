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
                    <h1 class="h2">Delivered Orders</h1>
                </div>

                <!-- Main Content Start -->

                <div class="container-fluid p-2">

                    <!-- Table Start -->

                    <table class="table table-hover table-bordered table-responsive-sm shadow" data-toggle="table" data-pagination="true" data-search="true" data-advanced-search="true" data-id-table="advancedTable">

                        <thead class="text-center thead-light">
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Order Status</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">State</th>
                                <th scope="col">City</th>
                                <th scope="col">Pin Code</th>


                            </tr>
                        </thead>

                        <!-- Table Content Start -->

                        <tbody class="text-center">

                            <tr>
                                <th scope="row">123456789</th>
                                <td>Delivered</td>
                                <td>John Doe</td>
                                <td>789456123</td>
                                <td>Some Random Address</td>
                                <td>Jharkhand</td>
                                <td>Ranchi</td>
                                <td>833201</td>
                            </tr>

                        </tbody>

                    </table>

                    <!-- Table End -->

                    <!-- Modal -->

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