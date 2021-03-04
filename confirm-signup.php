<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Order</title>

    <!-- Bootstrap 4 CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/customCSS.css">

    <!-- Font Awesome CDN -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="bg-light">

    <!-- Navbar Start -->

    <div class="container-fluid sticky-top p-0">

        <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
            <a class="navbar-brand" href="#">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <span id="brand-name">MobCOM®</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Best Sellers</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Top Deals</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">New Releases</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-light" type="submit" id="button-addon2">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <div class="navbar-nav">

                    <div class="dropdown ml-2">
                        <button class="btn btn-dark btn-block dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            My Account
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user mr-2" aria-hidden="true"></i>
                                My Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i>
                                My Orders
                            </a>
                            <div class="dropdown-divider"></div>
                            <div class="ml-2 mr-2">
                                <button class="btn btn-primary btn-block" type="button" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    Login
                                </button>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-success ml-2" type="button">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        Cart <span class="badge badge-light">2</span>
                    </button>

                </div>

            </div>

        </nav>

    </div>

    <div class="container py-5">
        <div class="alert alert-success" role="alert">
            <i class="fa fa-info-circle" aria-hidden="true"></i>
            You have successfully registered. <a class="alert-link" href="index.html">Click here</a> to go back to homepage.
        </div>
    </div>

    <!-- Footer Start -->

    <footer class="container-fluid text-center fixed-bottom text-muted mt-5 p-2" id="footer">

        <div class="mt-2 mb-5">
            <hr>
            <p class="m-0">Copyright <span class="fa fa-copyright"></span> Project RAPS</p>
            <a href="#" class="m-0 card-link text-muted"><small> Privacy Policy | </small></a>
            <a href="#" class="m-0 card-link text-muted"><small> Terms & Conditions </small></a>
            <p class="m-2"><span class="fa fa-mobile"></span></p>
        </div>

    </footer>


    <!-- Footer End -->

    <!-- Boostrap 4 JS -->

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->

    <script src="js/custom.js"></script>


</body>

</html>