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
                    <h1 class="h2">Add Delivery Associate</h1>
                </div>

                <!-- Main Content Start -->

                <div class="container-fluid p-2">

                    <button type="button" class="btn btn-secondary btn-sm mb-3" data-toggle="modal" data-target="#addDelivery">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Add Delivery Associate
                    </button>

                    <!--Add Delivery Associate Modal | Form in admin-modules -->

                    <?php

                    require('../admin-modules/add-delivery.php');

                    // Manage Delivery Associate Modal | Form in admin-modules | Use AJAX to display current info in placholder of input tag

                    require('../admin-modules/manage-delivery.php');

                    ?>

                    <!-- Table Start -->

                    <table class="table table-hover table-bordered table-responsive-sm shadow" data-toggle="table" data-pagination="true" data-search="true" data-advanced-search="true" data-id-table="advancedTable">

                        <thead class="text-center thead-light">
                            <tr>
                                <th data-sortable="true" scope="col">ID</th>
                                <th data-sortable="true" data-field="<?php $row->deli_name ?>" scope="col">Assoc. Name</th>
                                <th data-sortable="true" data-field="<?php $row->deli_phone ?>" scope="col">Phone Number</th>
                                <th data-sortable="true" data-field="<?php $row->state_name ?>" scope="col">State</th>
                                <th data-sortable="true" data-field="<?php $row->city_name ?>" scope="col">City</th>
                                <th data-sortable="true" data-field="<?php $row->Deli_status ?>" scope="col">Status</th>
                                <th data-sortable="true" data-field="<?php $row->Deli_status ?>" scope="col">Date Added</th>
                                <th scope="col">Manage</th>
                            </tr>
                        </thead>

                        <!-- Table Content Start -->

                        <tbody class="text-center">

                            <?php


                            $query = "SELECT `delivery_master`.*, `state_master`.*, `cities_master`.*
                                      FROM `delivery_master`, `state_master`, `cities_master`
                                      WHERE `delivery_master`.`state_id` = `state_master`.`state_id`
                                      AND `delivery_master`.`city_id` = `cities_master`.`city_id`";
                            $res = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_object($res)) {

                                echo "

                                <tr>
                                    <th scope='row'>$row->deli_id</th>
                                    <td>$row->deli_name</td>
                                    <td>$row->deli_phone</td>
                                    <td>$row->state_name</td>
                                    <td>$row->city_name</td>
                                    <td>$row->deli_status</td>
                                    <td>$row->date_added</td>
                                    <td class='align-middle'>
                                        <button type='button' class='btn btn-primary btn-sm mb-3' data-toggle='modal' data-target='#manageDelivery'>Manage</button>
                                    </td>
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

    <script>

        $(document).on('change', '#state-select', function() {
            var stateID = $("#state-select").val();

            $.ajax({
                url: '../../modules/get-cities.php',
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

</body>

</html>