<div class="tab-pane fade show" id="my-settings" role="tabpanel">

    <div class="card card-mycart mb-3">

        <div class="card-body">

            <h5 class="font-weight-bold mb-4">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Edit Profile
            </h5>

            <?php

            $activeUser = $_SESSION['user_id'];

            $updateQuery = "SELECT * FROM `user_master` WHERE `user_id` = '$activeUser'";
            $res = mysqli_query($conn, $updateQuery);

            while ($row = mysqli_fetch_object($res)) {

                $userFirstName = $row->first_name;
                $userLastName = $row->last_name;
                $userEmail = $row->user_email;
                $userPhone = $row->user_phone;
                $userAddress1 = $row->user_address_1;
                $userAddress2 = $row->user_address_2;
                $userState = $row->state_id;
                $userCity = $row->city_id;
                $userPincode = $row->user_pincode;
            }

            ?>

            <?php

            require('update-account.php');

            if (!empty($error)) {
                echo "
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    <span class='sr-only'>Close</span>
                                </button>
                                <i class='fa fa-info-circle' aria-hidden='true'></i>
                                $error
                    </div>

                ";
            }

            if (!empty($success)) {
                echo "

                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    <span class='sr-only'>Close</span>
                                </button>
                                <i class='fa fa-info-circle' aria-hidden='true'></i>
                                $success
                    </div>

                ";
            }

            ?>

            <form action="" method="POST" class="needs-validation" novalidate="">

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $userFirstName ?>" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $userLastName ?>" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $userEmail ?>" required>
                        <div class="invalid-feedback">
                            Please enter your email.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phoneNumber" value="<?php echo $userPhone ?>" required>
                        <div class="invalid-feedback">
                            Please enter your phone number.
                        </div>
                    </div>

                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address1" value="<?php echo $userAddress1 ?>" required>
                    <div class="invalid-feedback">
                        Please enter your address.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" name="address2" value="<?php echo $userAddress2 ?>">
                </div>

                <div class="row">

                    <div class="col-md-5 mb-3">
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
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="city">City</label>
                        <select class="custom-select d-block w-100" id="city-select" name="city" required>
                            <option value selected disabled>Select City</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="pincode">Pin Code</label>
                        <input type="text" class="form-control" id="pincode" name="pincode" value="<?php echo $userPincode ?>" required>
                        <div class="invalid-feedback">
                            Pin Code required.
                        </div>
                    </div>

                </div>

                <button class="btn btn-primary my-2" type="submit" name="updateBtn">Update</button>

                <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>

            </form>

        </div>

    </div>

</div>