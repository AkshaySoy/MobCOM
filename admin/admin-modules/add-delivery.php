<?php

$error = $success = "";

$deliName = $deliPhone = $deliPassword = "";
$state = $city = "";

if (isset($_POST['addDelivery'])) {

    $deliName = isset($_POST['deli-name']) ? addslashes($_POST['deli-name']) : exit('Invalid first name');
    $deliPhone = isset($_POST['deli-phone']) ? addslashes($_POST['deli-phone']) : exit('Invalid phone number');
    $deliPassword = isset($_POST['deli-password']) ? addslashes($_POST['deli-password']) : exit('invalid password');
    $state = addslashes($_POST['state']);
    $city = addslashes($_POST['city']);

    $deliPassword = password_hash($deliPassword, PASSWORD_DEFAULT);

    $query = "INSERT INTO `delivery_master` (`deli_id`, `order_id`, `deli_name`, `deli_phone`, `deli_password`, `state_id`, `city_id`, `deli_status`, `date_added`) 
              VALUES (NULL, '', '$deliName', '$deliPhone', '$deliPassword', '$state', '$city', 'Active', current_timestamp())";
    $res = mysqli_query($conn, $query);

    if (!$res) {

        $error = "Error occured" .mysqli_error($conn);;
        echo "<script>alert('$error')</script>";

    } else {

        $success = "Delivery Associate successfully added";
        echo "<script>alert('$success')</script>";
    }

}

?>

<div class="modal fade" id="addDelivery" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addDeliveryLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="addDeliveryLabel">
                    Add Delivery Associate
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <form method="POST" action="">

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="deli-name">Enter Associate Name</label>
                            <input type="text" class="form-control" name="deli-name" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="deli-phone">Enter Phone Number</label>
                            <input type="number" class="form-control" name="deli-phone" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="deli-password">Enter Password</label>
                            <input type="password" class="form-control" name="deli-password" required>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-6 mb-3">
                            <label for="state">State</label>

                            <select class="custom-select d-block w-100" name="state" id="state-select" required>
                                <option value selected disabled>Select State</option>
                                <?php
                                $query = "SELECT * FROM `state_master` ORDER BY `state_name` ASC";
                                $res = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_object(($res))) {
                                    echo "<option value='$row->state_id'>$row->state_name</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <!-- City list script at bottom -->

                        <!-- City -->

                        <div class="col-md-6 mb-3">
                            <label for="city">City</label>
                            <select class="custom-select d-block w-100" id="city-select" name="city" required>
                                <option value selected disabled>Select City</option>
                            </select>
                        </div>

                    </div>

                    <div class="modal-footer mt-2">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="addDelivery" class="btn btn-primary">Add</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</div>