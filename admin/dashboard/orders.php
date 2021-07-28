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

                    <table class="table table-hover table-bordered table-responsive-sm shadow">

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

                            <tr>
                                <th scope="row">123456789</th>
                                <td>John Doe</td>
                                <td>The Village</td>
                                <td>24</td>
                                <td>iPhone 7</td>
                                <td>21 July 2021</td>
                                <td>Order Confirmed</td>
                                <td>Preparing for dispatch</td>
                                <td class="align-middle">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#manageOrder">Manage</button>
                                </td>
                            </tr>

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

                                        <div class="form-group">

                                            <label for="order-status">Change Order Status</label>
                                            <select class="custom-select d-block w-100" id="order-status" name="order-status" required>
                                                <option value="order confirmed">Order Confirmed</option>
                                                <option value="picked by courier">Picked by courier</option>
                                                <option value="on the way">On the way</option>
                                                <option value="delivered">Delivered</option>
                                            </select>

                                        </div>

                                        <div class="form-group">

                                            <label for="track-status">Change Track Status</label>
                                            <textarea class="form-control" id="track-status" name="track-status"></textarea>

                                        </div>

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>

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