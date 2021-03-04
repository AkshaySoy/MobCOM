<!DOCTYPE html>
<html lang="en">

<head>

    <?php

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

                <!-- Form Start -->

                <form>

                    <!-- Name -->

                    <div class="form-row">

                        <div class="col form-group">
                            <label>First name</label>
                            <input type="text" class="form-control" placeholder="" id="">
                        </div>

                        <div class="col form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" placeholder="" id="">
                        </div>

                    </div>

                    <!-- Email -->

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="">
                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <!-- Phone Number -->

                    <div class="form-group">

                        <label>Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+91</span>
                            </div>
                            <input type="number" class="form-control" placeholder="" id="">
                        </div>

                    </div>

                    <!-- Gender -->

                    <div class="form-group">

                        <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" checked="" type="radio" name="gender" value="Male">
                            <span class="custom-control-label"> Male </span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" name="gender" value="Female">
                            <span class="custom-control-label"> Female </span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" name="gender" value="Others">
                            <span class="custom-control-label"> Others </span>
                        </label>

                    </div>

                    <!-- Address -->

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your address.
                        </div>
                    </div>

                    <!-- Address 2 -->

                    <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="" placeholder="Apartment or suite">
                    </div>

                    <div class="row">

                        <!-- State -->

                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100" id="state" required>
                                <option value="">Choose...</option>
                                <option>Jharkhand</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>

                        <!-- City -->

                        <div class="col-md-4 mb-3">
                            <label for="city">City</label>
                            <select class="custom-select d-block w-100" id="city" required>
                                <option value="">Choose...</option>
                                <option>Jamshedpur</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <!-- Pin Code -->

                        <div class="col-md-4 mb-3">
                            <label for="pincode">Pin Code</label>
                            <input type="text" class="form-control" id="pincode" placeholder="833201" required>
                            <div class="invalid-feedback">
                                Pin Code required.
                            </div>
                        </div>

                    </div>

                    <!-- Password -->

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label>Create password</label>
                            <input class="form-control" type="password" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Repeat password</label>
                            <input class="form-control" type="password" required>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked="">
                            <div class="custom-control-label"> I agree with the
                                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">terms and contitions</a>
                            </div>
                        </label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Sign Up </button>
                    </div>

                </form>

                <!-- Form End -->

            </div>

        </div>

        <p class="text-center my-4">Have an account?
            <a data-toggle="modal" data-target="#exampleModalCenter" href="https://bootstrap-ecommerce.com/templates/alistyle-html/page-user-register.html">Log In</a>
        </p>

    </div>

    <!-- Login Modal Start -->

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <form action="#" method="#POST">

                        <div class="form-group">
                            <label for="email">
                                <p class="font-weight-bold mb-0">Email</p>
                            </label>
                            <div class="input-group mt-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-at" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" name="userNameInput" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">
                                <p class="font-weight-bold mb-0">Password</p>
                            </label>
                            <div class="input-group mt-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="password" name="userPwdInput" id="userPwdInput" class="form-control" placeholder="Enter Password">
                            </div>
                        </div>

                        <div class="form-check mt-0">
                            <input class="form-check-input showPwd" type="checkbox" onclick="showpassword()">
                            <label class="form-check-label" for="userPwdInput">
                                Show Password
                            </label>
                        </div>

                        <button type="submit" name="loginBtn" class="btn btn-primary btn-block mt-3">Login</button>

                        <p class="text-muted text-center p-2">New User ?
                            <a href="register.php" class="card-link text-primary">Register Here</a>
                        </p>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!-- Login Modal End -->

    <!-- Main Content End -->

    <!-- Footer Start -->

    <?php

    require('modules/footer.php');

    ?>

    <!-- Footer End -->


</body>

</html>