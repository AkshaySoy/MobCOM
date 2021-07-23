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
                    <h1 class="h2">View Registered Customers</h1>
                </div>

                <!-- Main Content Start -->

                <div class="container-fluid p-2">

                    <!-- Table Start -->

                    <table class="table table-hover table-bordered table-responsive-sm shadow">

                        <thead class="text-center thead-light">
                            <tr>
                                <th scope="col">Customer ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Customer Address</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Date Added</th>
                                <th scope="col">User Status</th>
                            </tr>
                        </thead>

                        <!-- Table Content Start -->

                        <tbody class='text-center'>

                            <?php

                            $query = "SELECT * FROM `user_master`";
                            $res = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_object($res)) {

                                echo "

                                    <tr>
                                        <th scope='row'>$row->user_id</th>
                                        <td>$row->first_name $row->last_name</td>
                                        <td>$row->user_address_1 $row->user_address_2</td>
                                        <td>$row->user_email</td>
                                        <td>$row->user_phone</td>
                                        <td>$row->date_added</td>
                                        <td>$row->user_status</td>

                                    </tr>
                                
                                ";
                            }

                            ?>

                        </tbody>

                    </table>

                    <!-- Table End -->

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