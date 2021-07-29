<?php

require('modules/login-query.php');

?>

<div class="sticky-top p-0">

    <nav class="navbar navbar-expand-lg navbar-dark shadow" id="navbar">

        <div class="container">

            <a class="navbar-brand" href="index.php">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <span id="brand-name">MobCOM®</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">New Releases</a>
                    </li>
                </ul>

                <form action='product-list.php' class="form-inline mx-1" id='search_bar' method='GET'>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name='search_text' id='search_text'>
                        <div class="input-group-append">
                            <button class="btn btn-light" type="submit" name='search_submit'>
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <div class="navbar-nav">

                    <?php

                    if (isset($_SESSION['login_status'])) {

                        $activeUser = $_SESSION['user_id'];

                        $query = "SELECT * FROM shopping_cart_master WHERE user_id = $activeUser";

                        $res = mysqli_query($conn, $query);

                        if ($res) {
                            $num = mysqli_num_rows($res);
                            $GLOBALS['products_in_cart'] = $num;
                            mysqli_free_result($res);
                        }

                        echo "

                        <li class='nav-item dropdown mx-1'>

                                <a class='nav-link dropdown-toggle' id='navbarDropdown' href='#' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    <i class='fa fa-user-circle' aria-hidden='true'></i>
                                    My Account
                                </a>

                                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>

                                    <a class='dropdown-item' href='my-account.php'>
                                        <i class='fa fa-user mr-2' aria-hidden='true'></i>
                                        My Profile
                                    </a>

                                    <a class='dropdown-item' href='my-account.php'>
                                        <i class='fa fa-shopping-cart mr-1' aria-hidden='true'></i>
                                        My Orders
                                    </a>

                                    <div class='dropdown-divider'></div>

                                    <a href='logout.php'>

                                        <div class='ml-2 mr-2'>
                                            <button class='btn btn-danger btn-block' type='button'>
                                                Logout
                                            </button>
                                        </div>

                                    </a>

                                </div>

                        </li>

                        <a href='shopping-cart.php'>

                                <button class='btn btn-success mx-1' type='button'>
                                    <i class='fa fa-shopping-cart' aria-hidden='true'></i>
                                    Cart <span class='badge badge-light'>$num</span>
                                </button>

                        </a>
                            
                    ";
                    } else {

                        echo "        
                        <a href='login.php' class='mx-1'>

                            <button class='btn btn-primary btn-block my-2 my-lg-0' type='button'>
                                    Login
                            </button>
                            
                        </a>

                    ";
                    }

                    ?>

                </div>

            </div>

        </div>


    </nav>

</div>

<?php

if (isset($_SESSION['login_message'])) {
    echo "

        <div class='container-fluid'>

        <div class='alert alert-success alert-dismissible fade show mt-3' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                <span class='sr-only'>Close</span>
            </button>
            <i class='fa fa-info-circle' aria-hidden='true'></i>
                Hello ! <strong> {$_SESSION['first_name']} {$_SESSION['last_name']}</strong>. Welcome to MobCOM.
        </div>

        </div>


    ";
    unset($_SESSION['login_message']);
}

?>

<?php
//to retieve the keyword
if (isset($_GET['search_text'])) {
    echo "<script>
    document.getElementById('search_text').value = '$_GET[search_text]';
    document.getElementById('searching').value = '$_GET[search_text]';
    </script>";

    $query = "SELECT * FROM 'mobcom' WHERE 'name' = '$_GET[search_text]';";
}
?>