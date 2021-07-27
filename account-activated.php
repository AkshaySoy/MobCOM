<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    $title = "MobCOM | Account Activation";
    require('modules/header.php');

    ?>

</head>

<body class="bg-light">

    <!-- Updating user_status in user_master-->

    <?php

    $user_email = $_GET['user_email'];

    $query = "UPDATE `user_master` SET `user_status` = 'active' WHERE `user_email` = '$user_email';";

    $res = mysqli_query($conn, $query);

    ?>


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

        <div class="alert alert-success shadow text-center" role="alert">
            <h4 class="alert-heading">Account Activated</h4>
            <p>
                <a class="alert-link" href="login.php">Click here</a> to login.
            </p>

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