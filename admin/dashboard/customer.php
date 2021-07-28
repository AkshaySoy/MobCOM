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

                    <table class="table table-hover table-bordered table-responsive-sm shadow" data-toggle="table" data-pagination="true" data-search="true" data-advanced-search="true" data-id-table="advancedTable">

                        <thead class="text-center thead-light">
                            <tr>
                                <th data-sortable="true" data-field="<?php $row->user_id ?>" scope="col">Customer ID</th>
                                <th data-sortable="true" data-field="<?php $row->first_name?>" scope="col">Customer Name</th>
                                <th data-sortable="true" data-field="<?php $row->user_address_1 ?>" scope="col">Customer Address</th>
                                <th data-sortable="true" data-field="<?php $row->state_name ?>" scope="col">State</th>
                                <th data-sortable="true" data-field="<?php $row->city_name ?>" scope="col">City</th>
                                <th data-sortable="true" data-field="<?php $row->user_email ?>" scope="col">Email ID</th>
                                <th data-sortable="true" data-field="<?php $row->user_phone ?>" scope="col">Phone Number</th>
                                <th data-sortable="true" data-field="<?php $row->date_added ?>" scope="col">Date Added</th>
                                <th data-sortable="true" data-field="<?php $row->user_status ?>" scope="col">User Status</th>
                            </tr>
                        </thead>

                        <!-- Table Content Start -->

                        <tbody class='text-center'>

                            <?php

                            $query = "SELECT `user_master`.*, `state_master`.*, `cities_master`.*
                                      FROM `user_master`, `state_master`, `cities_master`
                                      WHERE `user_master`.`state_id` = `state_master`.`state_id`
                                      AND `user_master`.`city_id` = `cities_master`.`city_id`";
                            $res = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_object($res)) {

                                echo "

                                    <tr>
                                        <th scope='row'>$row->user_id</th>
                                        <td>$row->first_name $row->last_name</td>
                                        <td>$row->user_address_1</td>
                                        <td>$row->state_name</td>
                                        <td>$row->city_name</td>
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