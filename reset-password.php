<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    $title = "MobCOM | Reset Password";
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

    <?php

    // Reset Password Query

    $user_email = $_GET['user_email'];

    if (isset($_POST['resetPwd'])) {

        $password = addslashes($_POST['newPwd2']);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "UPDATE `user_master` SET `user_pwd` = '$password' WHERE `user_email` = '$user_email'";

        $res = mysqli_query($conn, $query);

        if (!$res) {
            $error = "Some error occurred while processing data. Please try again later." . mysqli_error($conn);
        } else {
            $success = "Password Updated Successfully.";
        }
    }


    ?>

    <div class="container-fluid min-vh-100">

        <div class="card mx-auto shadow" style="max-width:750px;">

            <div class="card-body">

                <header class="mb-4">
                    <h4 class="card-title font-weight-bold">
                        <i class="fa fa-undo" aria-hidden="true"></i>
                        Reset Password
                    </h4>
                </header>

                <?php

                if (!empty($success)) {
                    echo "

                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            <span class='sr-only'>Close</span>
                        </button>
                        <i class='fa fa-info-circle' aria-hidden='true'></i>
                        $success <a href='login.php' class='alert-link'>Click here</a> to continue
                    </div>

                    ";
                }

                ?>          

                <!-- Form Start -->

                <form action="" method="POST" class="needs-validation" novalidate>

                    <!-- Input Start -->

                    <div class="form-group">
                        <label for="newPwd">
                            <p class="mb-0">Enter New Password</p>
                        </label>
                        <div class="input-group mt-0">
                            <input type="password" id="password" name="newPwd" class="form-control" id="password" placeholder="Enter New Password" onkeyup='checkPwd();' required>
                            <div class="invalid-feedback">
                                Please enter your password
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirmPwd">
                            <p class="mb-0">Repeat Password</p>
                        </label>
                        <div class="input-group mt-0">
                            <input type="password" id="confirm_password" name="newPwd2" class="form-control" id="confirm_password" placeholder="Repeat Password" onkeyup='checkPwd();' required>
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

                    <button type="submit" id="resetPwd" name="resetPwd" class="btn btn-success btn-block my-3">Reset Password</button>

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

    </div>

    <!-- Main Content End -->

    <!-- Footer Start -->

    <?php

    require('modules/footer.php');

    ?>

    <!-- Footer End -->


</body>

</html>