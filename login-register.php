<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    $title = "MobCOM | Login/Register";

    require("modules/header.php");

    ?>

</head>

<body class="bg-light">

    <?php

    require("modules/navbar.php");

    ?>

    <div class="container-fluid min-vh-100">

        <div class="card mx-auto shadow" style="max-width:750px; margin-top:40px;" id="card-shadow">

            <div class="card-body">

                <nav>

                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

                        <a class="nav-link font-weight-bold active" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="true">Login</a>
                        <a class="nav-link font-weight-bold" id="nav-register-tab" data-toggle="tab" href="#nav-register" role="tab" aria-controls="nav-register" aria-selected="false">Register</a>

                    </div>

                </nav>

                <div class="tab-content mt-3" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">

                        <?php

                        require("modules/login-query.php");

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

                        require("modules/login.php");

                        ?>


                    </div>

                    <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">

                        <?php

                        require("modules/register-query.php");

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

                        require("modules/register.php");


                        ?>


                    </div>

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


                </div>

            </div>

        </div>

    </div>

    <?php

    require("modules/footer.php");

    ?>

</body>

</html>