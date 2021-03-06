<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    $title = "MobCOM | Login";
    require('modules/header.php');

    ?>

</head>

<body class="bg-light">

    <div class="container p-2 text-center">

        <a class="navbar-brand text-dark" href="index.php">
            <h2 id="brand-name">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                MobCOM®
            </h2>
        </a>

    </div>

    </div>

    <!-- Main Content Start -->

    <div class="container-fluid min-vh-100">

        <div class="card mx-auto shadow" style="max-width:750px;">

            <div class="card-body">

                <header class="mb-4">
                    <h4 class="card-title font-weight-bold">
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                        Login
                    </h4>
                </header>

                <?php

                require("modules/login-query.php");
                require('modules/forgot-password.php');

                if (!empty($error != "")) {
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

                if (!empty($resetLink)) {
                    echo "

                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                        <span class='sr-only'>Close</span>
                                    </button>
                                    <i class='fa fa-info-circle' aria-hidden='true'></i>
                                    $resetLink
                        </div>

                    ";
                }

                ?>

                <!-- Form Start -->

                <form action="" method="POST" class="needs-validation" novalidate>

                    <!-- Input Start -->

                    <div class="form-group">
                        <label for="email">
                            <p class="mb-0">Email</p>
                        </label>
                        <div class="input-group mt-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fa fa-at" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type="email" id="userEmail" name="userEmail" class="form-control" placeholder="Enter Email" required>
                            <div class="invalid-feedback">
                                Please enter a valid email id
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">
                            <p class="mb-0">Password</p>
                        </label>
                        <div class="input-group mt-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type="password" id="userPwd" name="userPwd" class="form-control" placeholder="Enter Password" required>
                            <div class="invalid-feedback">
                                Please enter your password
                            </div>
                        </div>
                    </div>

                    <div class="form-check mt-0">
                        <input class="form-check-input showPwd" type="checkbox" onclick="showpassword()" novalidate>
                        <label class="form-check-label" for="userPwdInput">
                            Show Password
                        </label>
                    </div>

                    <button type="submit" id="login" name="loginBtn" class="btn btn-success btn-block my-3">Login</button>

                    <p class="text-muted text-center">New User ?
                        <a href="register.php" class="card-link text-primary">Register Here</a> |
                        <a href="" class="card-link text-primary mx-0" data-toggle="modal" data-target="#exampleModal">Forgot Password</a>
                    </p>

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

        <!-- Forgot Password Modal -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enter your email ID</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                        <form action="" method="POST">

                            <div class="form-group">
                                <input type="email" name="reset-email" id="reset-email" class="form-control" id="email-id">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="reset-btn-link" class="btn btn-primary">Send Reset Link</button>
                            </div>

                        </form>

                    </div>


                </div>

            </div>

        </div>

    </div>

    <!-- Main Content End -->

    <!-- Footer Start -->

    <?php

    require('modules/footer.php');

    ?>

    <!-- Footer End -->


</body>

</html>