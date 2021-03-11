<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    $title = "MobCOM | Signup";
    require('modules/header.php');

    ?>

</head>

<body class="bg-light">

    <!-- Navbar Start -->

    <?php

    require('modules/navbar.php');

    ?>

    <!-- Navbar End -->

    <!-- Main Content Start -->

    <div class="container-fluid">


        <div class="card card-mycart mx-auto" style="max-width:750px; margin-top:40px;">

            <div class="card-body">

                <header class="mb-4">
                    <h4 class="card-title font-weight-bold">
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                        Sign up
                    </h4>
                </header>

                <?php

                require('modules/signup-query.php');

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
                            $success <a class='alert-link' href='index.php'>Click Here</a> to continue.
                        </div>

                    ";
                }

                ?>

                <!-- Form Start -->

                <form action="" method="POST" class="needs-validation" novalidate>

                    <!-- Name -->

                    <div class="form-row">

                        <div class="col form-group">
                            <label for="validationDefault01">First name</label>
                            <input type="text" class="form-control" placeholder="Enter your first name" name="firstName" id="validationDefault01" value="<?php echo $firstName;?>" required>
                            <div class="invalid-feedback">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                Please enter your first name
                            </div>
                        </div>


                        <div class="col form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" placeholder="Enter you last name" name="lastName" id="lastName" value="<?php echo $lastName;?>" required>
                            <div class="invalid-feedback">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                Please enter your last name
                            </div>
                        </div>

                    </div>

                    <!-- Email -->

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email id" name="email" id="email" value="<?php echo $email;?>" required>
                        <div class="invalid-feedback">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                            Please enter a valid email id
                        </div>
                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <!-- Phone Number -->

                    <div class="form-group">

                        <label>Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+91</span>
                            </div>
                            <input type="tel" class="form-control" placeholder="Enter a valid phone number" maxlength="10" name="phoneNumber"  id="phoneNumber" onkeyup='checkPhoneNumber();' value="<?php echo $phoneNumber;?>" required>
                            <div class="invalid-feedback" id="phoneNumber-feedback">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                Please enter phone number
                            </div>
                        </div>

                    </div>

                    <!-- Gender -->

                    <div class="form-group my-1">

                        <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" name="gender" id="male" value="Male" required>
                            <span class="custom-control-label"> Male </span>
                        </label>

                        <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" name="gender" id="female" value="Female" required>
                            <span class="custom-control-label"> Female </span>
                        </label>

                        <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" name="gender" id="others" value="Others" required>
                            <span class="custom-control-label"> Others </span>

                            <span class="invalid-feedback ml-2">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                Please select your gender
                            </span>

                        </label>


                    </div>

                    <!-- Address -->

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address1" placeholder="1234 Main St" id="address1" value="<?php echo $address1;?>" required>
                        <div class="invalid-feedback">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                            Please enter your address
                        </div>
                    </div>

                    <!-- Address 2 -->

                    <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" name="address2" placeholder="Apartment or suite" value="<?php echo $address2;?>">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="row">

                        <!-- State -->

                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100" name="state" id="state" required>
                                <option value="">Choose...</option>
                                <option>Jharkhand</option>
                            </select>
                            <div class="invalid-feedback">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                Please select your state
                            </div>
                        </div>

                        <!-- City -->

                        <div class="col-md-4 mb-3">
                            <label for="city">City</label>
                            <select class="custom-select d-block w-100" id="city" name="city" required>
                                <option value="">Choose...</option>
                                <option>Jamshedpur</option>
                            </select>
                            <div class="invalid-feedback">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                Please select a valid city
                            </div>
                        </div>

                        <!-- Pin Code -->

                        <div class="col-md-4 mb-3">
                            <label for="pincode">Pin Code</label>
                            <input type="text" class="form-control" name="pincode" placeholder="833201" id="pincode" value="<?php echo $pincode;?>" required>
                            <div class="invalid-feedback">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                Please enter your pincode
                            </div>
                        </div>

                    </div>

                    <!-- Password -->

                    <div class="form-row">

                        <div class="form-group col-md-6">

                            <label>Create password</label>
                            <input type="password" class="form-control" id="password" name="password" onkeyup='checkPwd();' required>
                            <div class="invalid-feedback" id="pwd-feedback">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                Please enter a password
                            </div>
                            <div class="invalid-feedback" id="pwd-feedback"></div>

                        </div>

                        <div class="form-group col-md-6">

                            <label>Repeat password</label>
                            <input type="password" class="form-control" id="confirm_password" onkeyup='checkPwd();'>
                            <div class="invalid-feedback">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                Please re-enter the password
                            </div>
                            <div class="invalid-feedback" id="confirmPwd-feedback"></div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" required>
                            <div class="custom-control-label"> I agree with the
                                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Terms and Contitions</a>.
                            </div>

                            <div class="invalid-feedback">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                You must agree before registering
                            </div>
                        </label>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="SubmitBtn" class="btn btn-primary btn-block"> Sign Up </button>
                    </div>

                </form>

                <!-- Script for Bootstrap form validation -->

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

                <!-- Form End -->

            </div>

        </div>

        <p class="text-center my-4">Have an account?
            <a data-toggle="modal" data-target="#exampleModalCenter" href="https://bootstrap-ecommerce.com/templates/alistyle-html/page-user-register.html">Log In</a>
        </p>

    </div>

    <!-- Main Content End -->

    <!-- Footer Start -->

    <?php

    require('modules/footer.php');

    ?>

    <!-- Footer End -->


</body>

</html>