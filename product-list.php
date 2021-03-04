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

    <!-- Breadcrumb Start -->

    <div class="container-fluid mt-3">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Newly Added</li>
            </ol>
        </nav>

    </div>

    <!-- Breadcrumb End -->

    <!-- Main Content Start -->

    <div class="container-fluid">

        <div class="row">

            <!-- Filter Start -->

            <div class="col-md-2 mb-3">

                <div class="card card-filter" style="width: auto; height: auto;">

                    <div class="card-body p-2 m-1">

                        <h5 class="card-title text-center font-weight-bold mb-3">
                            <i class="fa fa-filter" aria-hidden="true"></i>
                            Filters
                        </h5>

                        <!-- Filter Form Start -->

                        <form method="GET">

                            <!-- Filter Price Start -->

                            <div class="title">

                                <a href="#" class="card-link text-dark" data-toggle="collapse" data-target="#collapse_1">
                                    <h6 class="text-dark font-weight-bold">Price Range
                                        <i class="icon-control fa fa-caret-down float-right mr-2" aria-hidden="true">
                                        </i>
                                    </h6>
                                </a>

                            </div>

                            <div class="filter-content collapse" id="collapse_1">

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="price" value="">
                                    <div class="custom-control-label">₹ 5000 & below</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="price" value="">
                                    <div class="custom-control-label">₹ 5000 to ₹ 9999</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="price" value="">
                                    <div class="custom-control-label">₹ 10000 to ₹ 14999</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="price" value="">
                                    <div class="custom-control-label">₹ 15000 to ₹ 29999</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="price" value="">
                                    <div class="custom-control-label">₹ 30000 & above </div>
                                </label>

                            </div>

                            <!-- Filter Price End -->

                            <hr class="my-2">

                            <!-- Filter Brand Start -->

                            <div class="title">

                                <a href="#" class="card-link text-dark" data-toggle="collapse" data-target="#collapse_2">
                                    <h6 class="text-dark font-weight-bold">Brand
                                        <i class="icon-control fa fa-caret-down float-right mr-2" aria-hidden="true">
                                        </i>
                                    </h6>
                                </a>

                            </div>

                            <div class="filter-content collapse" id="collapse_2">

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand" value="Apple">
                                    <div class="custom-control-label">Apple
                                        <b class="badge badge-pill badge-light float-right">120</b>
                                    </div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand" value="Asus">
                                    <div class="custom-control-label">Asus
                                        <b class="badge badge-pill badge-light float-right">100</b>
                                    </div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand" value="Nokia">
                                    <div class="custom-control-label">Nokia
                                        <b class="badge badge-pill badge-light float-right">140</b>
                                    </div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand" value="Oneplus">
                                    <div class="custom-control-label">One Plus
                                        <b class="badge badge-pill badge-light float-right">120</b>
                                    </div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand" value="Oppo">
                                    <div class="custom-control-label">Oppo
                                        <b class="badge badge-pill badge-light float-right">120</b>
                                    </div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand" value="Mi">
                                    <div class="custom-control-label">Mi
                                        <b class="badge badge-pill badge-light float-right">120</b>
                                    </div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand" value="Realme">
                                    <div class="custom-control-label">Realme
                                        <b class="badge badge-pill badge-light float-right">120</b>
                                    </div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="brand" value="Honor">
                                    <div class="custom-control-label">Honor
                                        <b class="badge badge-pill badge-light float-right">120</b>
                                    </div>
                                </label>

                            </div>

                            <!-- Filter Brand End -->

                            <hr class="my-2">

                            <!-- Filter RAM Start -->

                            <div class="title">

                                <a href="#" class="card-link text-dark" data-toggle="collapse" data-target="#collapse_3">
                                    <h6 class="text-dark font-weight-bold">Ram
                                        <i class="icon-control fa fa-caret-down float-right mr-2" aria-hidden="true">
                                        </i>
                                    </h6>
                                </a>

                            </div>

                            <div class="filter-content collapse" id="collapse_3">

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="ram" value="6">
                                    <div class="custom-control-label">6 GB & Above</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="ram" value="4">
                                    <div class="custom-control-label">4 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="ram" value="3">
                                    <div class="custom-control-label">3 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="ram" value="2">
                                    <div class="custom-control-label">2 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="ram" value="1">
                                    <div class="custom-control-label">1 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="ram" value="512">
                                    <div class="custom-control-label">Less than 1 GB</div>
                                </label>


                            </div>

                            <!-- Filter RAM End -->

                            <hr class="my-2">

                            <!-- Filter Storage Start -->

                            <div class="title">

                                <a href="#" class="card-link text-dark" data-toggle="collapse" data-target="#collapse_4">
                                    <h6 class="text-dark font-weight-bold">Internal Storage
                                        <i class="icon-control fa fa-caret-down float-right mr-2" aria-hidden="true">
                                        </i>
                                    </h6>
                                </a>

                            </div>

                            <div class="filter-content collapse" id="collapse_4">

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage" value="256">
                                    <div class="custom-control-label">256 GB & Above</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage" value="">
                                    <div class="custom-control-label">128-256 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage" value="">
                                    <div class="custom-control-label">64-128GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage" value="">
                                    <div class="custom-control-label">32-64 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage" value="">
                                    <div class="custom-control-label">16-32 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage" value="">
                                    <div class="custom-control-label">8-16 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage" value="">
                                    <div class="custom-control-label">4-8 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage" value="">
                                    <div class="custom-control-label">2-4 GB</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="storage" value="">
                                    <div class="custom-control-label">Less than 2 GB</div>
                                </label>

                            </div>

                            <!-- Filter Storage End -->

                            <hr class="my-2">

                            <!-- Battery Capacity Start -->

                            <div class="title">

                                <a href="#" class="card-link text-dark" data-toggle="collapse" data-target="#collapse_5">
                                    <h6 class="text-dark font-weight-bold">Battery Capacity
                                        <i class="icon-control fa fa-caret-down float-right mr-2" aria-hidden="true">
                                        </i>
                                    </h6>
                                </a>

                            </div>

                            <div class="filter-content collapse" id="collapse_5">

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="battery" value="">
                                    <div class="custom-control-label">1000-1999 mAh</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="battery" value="">
                                    <div class="custom-control-label">2000-2999mAh</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="battery" value="">
                                    <div class="custom-control-label">3000-3999mAh</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="battery" value="">
                                    <div class="custom-control-label">5000mAh & Above</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="battery" value="">
                                    <div class="custom-control-label">Less than 1000 mAh</div>
                                </label>

                            </div>

                            <!-- Battery Capacity End -->

                            <hr class="my-2">

                            <!-- Back Camera Start -->

                            <div class="title">

                                <a href="#" class="card-link text-dark" data-toggle="collapse" data-target="#collapse_6">
                                    <h6 class="text-dark font-weight-bold">Back Camera
                                        <i class="icon-control fa fa-caret-down float-right mr-2" aria-hidden="true">
                                        </i>
                                    </h6>
                                </a>

                            </div>

                            <div class="filter-content collapse" id="collapse_6">

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="pcamera" value="">
                                    <div class="custom-control-label">Below 2 MP</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="pcamera" value="">
                                    <div class="custom-control-label">3-4.9 MP</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="pcamera" value="">
                                    <div class="custom-control-label">5-7.9 MP</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="pcamera" value="">
                                    <div class="custom-control-label">8-11.9 MP</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="pcamera" value="">
                                    <div class="custom-control-label">12-12.9 MP</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="pcamera" value="">
                                    <div class="custom-control-label">13-15.9 MP</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="pcamera" value="">
                                    <div class="custom-control-label">16-20.9 MP</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="pcamera" value="">
                                    <div class="custom-control-label">21 MP & Above</div>
                                </label>

                            </div>

                            <!-- Back Camera End -->

                            <hr class="my-2">

                            <!-- Front Camera Start -->

                            <div class="title">

                                <a href="#" class="card-link text-dark" data-toggle="collapse" data-target="#collapse_7">
                                    <h6 class="text-dark font-weight-bold">Front Camera
                                        <i class="icon-control fa fa-caret-down float-right mr-2" aria-hidden="true">
                                        </i>
                                    </h6>
                                </a>

                            </div>

                            <div class="filter-content collapse" id="collapse_7">

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="pcamera" value="">
                                    <div class="custom-control-label">0-1.9 MP</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="pcamera" value="">
                                    <div class="custom-control-label">12-12.9 MP</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="pcamera" value="">
                                    <div class="custom-control-label">13-15.9 MP</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="pcamera" value="">
                                    <div class="custom-control-label">16-20.9 MP</div>
                                </label>

                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="pcamera" value="">
                                    <div class="custom-control-label">21 MP & Above</div>
                                </label>

                            </div>

                            <!-- Front Camera End -->


                            <div class="mt-3 mb-5">
                                <button type="submit" class="btn btn-primary float-left">Apply</button>
                                <button type="reset" class="btn btn-secondary float-right">
                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                </button>
                            </div>

                        </form>

                        <!-- Filter Form End -->

                    </div>

                </div>

            </div>

            <!-- Filter End -->

            <!-- Product List Start -->

            <div class="col-md-10">

                <div class="form-inline">
                    <strong class="mr-md-auto">12 Products found</strong>
                </div>

                <!-- Product Card Start -->

                <div class="card card-product-list mx-2 my-3 p-3">

                    <div class="row no-gutters">

                        <div class="col-md-3 mb-2">
                            <a href="#">
                                <img class="product-img" src="images/phone_images/71Sinqbw35L._SL1500_.jpg">
                            </a>
                        </div>

                        <div class="col-md-6">

                            <div class="info-main">
                                <a class="card-link" href="#">
                                    <h5 class="font-weight-bold">Samsung Galaxy M31 (Fusion Black, 64 GB) </h5>
                                </a>

                                <div class="mb-3">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="badge badge-success p-2">4.5</span>
                                    <span class="text-muted">Ratings</span>
                                </div>

                                <div>
                                    <ul class="px-2 mx-3">
                                        <li>6 GB RAM | 64 GB ROM | Expandable Upto 512 GB</li>
                                        <li>6.4 inch Full HD+ Display</li>
                                        <li>64 MP + 8 MP + 5 MP + 5 MP | 32 MP Front Camera</li>
                                        <li>6000 mAh Battery</li>
                                        <li>Samsun Exynos 9 Octa 9611 Processor</li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="col-sm-3">

                            <div class="info-price pl-4 mr-4">

                                <h3 class="font-weight-bold">₹ 17,249</h3>

                                <span class="badge badge-pill badge-danger verify-pill p-2">
                                    MobCOM Verified
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </span>

                                <p class="text-muted my-2">No Cost EMI</p>
                                <p class="text-muted my-2">Upto <b>₹ 6,950</b> Off on Exchange</p>

                                <button type="button" class="btn btn-outline-secondary btn-block mt-4">
                                    View More
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Product Card End -->

                <!-- Product Card Start -->

                <div class="card card-product-list mx-2 my-3 p-3">

                    <div class="row no-gutters">

                        <div class="col-md-3 mb-2">
                            <a href="#">
                                <img class="product-img" src="images/phone_images/71Sinqbw35L._SL1500_.jpg">
                            </a>
                        </div>

                        <div class="col-md-6">

                            <div class="info-main">
                                <a class="card-link" href="#">
                                    <h5 class="font-weight-bold">Samsung Galaxy M31 (Fusion Black, 64 GB) </h5>
                                </a>

                                <div class="mb-3">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="badge badge-success p-2">4.5</span>
                                    <span class="text-muted">Ratings</span>
                                </div>

                                <div>
                                    <ul class="px-2 mx-3">
                                        <li>6 GB RAM | 64 GB ROM | Expandable Upto 512 GB</li>
                                        <li>6.4 inch Full HD+ Display</li>
                                        <li>64 MP + 8 MP + 5 MP + 5 MP | 32 MP Front Camera</li>
                                        <li>6000 mAh Battery</li>
                                        <li>Samsun Exynos 9 Octa 9611 Processor</li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="col-sm-3">

                            <div class="info-price pl-4 mr-4">

                                <h3 class="font-weight-bold">₹ 17,249</h3>

                                <span class="badge badge-pill badge-danger verify-pill p-2">
                                    MobCOM Verified
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </span>

                                <p class="text-muted my-2">No Cost EMI</p>
                                <p class="text-muted my-2">Upto <b>₹ 6,950</b> Off on Exchange</p>

                                <button type="button" class="btn btn-outline-secondary btn-block mt-4">
                                    View More
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Product Card End -->

                <!-- Product Card Start -->

                <div class="card card-product-list mx-2 my-3 p-3">

                    <div class="row no-gutters">

                        <div class="col-md-3 mb-2">
                            <a href="#">
                                <img class="product-img" src="images/phone_images/71Sinqbw35L._SL1500_.jpg">
                            </a>
                        </div>

                        <div class="col-md-6">

                            <div class="info-main">
                                <a class="card-link" href="#">
                                    <h5 class="font-weight-bold">Samsung Galaxy M31 (Fusion Black, 64 GB) </h5>
                                </a>

                                <div class="mb-3">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="badge badge-success p-2">4.5</span>
                                    <span class="text-muted">Ratings</span>
                                </div>

                                <div>
                                    <ul class="px-2 mx-3">
                                        <li>6 GB RAM | 64 GB ROM | Expandable Upto 512 GB</li>
                                        <li>6.4 inch Full HD+ Display</li>
                                        <li>64 MP + 8 MP + 5 MP + 5 MP | 32 MP Front Camera</li>
                                        <li>6000 mAh Battery</li>
                                        <li>Samsun Exynos 9 Octa 9611 Processor</li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="col-sm-3">

                            <div class="info-price pl-4 mr-4">

                                <h3 class="font-weight-bold">₹ 17,249</h3>

                                <span class="badge badge-pill badge-danger verify-pill p-2">
                                    MobCOM Verified
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </span>

                                <p class="text-muted my-2">No Cost EMI</p>
                                <p class="text-muted my-2">Upto <b>₹ 6,950</b> Off on Exchange</p>

                                <button type="button" class="btn btn-outline-secondary btn-block mt-4">
                                    View More
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Product Card End -->

                <!-- Product Card Start -->

                <div class="card card-product-list mx-2 my-3 p-3">

                    <div class="row no-gutters">

                        <div class="col-md-3 mb-2">
                            <a href="#">
                                <img class="product-img" src="images/phone_images/71Sinqbw35L._SL1500_.jpg">
                            </a>
                        </div>

                        <div class="col-md-6">

                            <div class="info-main">
                                <a class="card-link" href="#">
                                    <h5 class="font-weight-bold">Samsung Galaxy M31 (Fusion Black, 64 GB) </h5>
                                </a>

                                <div class="mb-3">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="badge badge-success p-2">4.5</span>
                                    <span class="text-muted">Ratings</span>
                                </div>

                                <div>
                                    <ul class="px-2 mx-3">
                                        <li>6 GB RAM | 64 GB ROM | Expandable Upto 512 GB</li>
                                        <li>6.4 inch Full HD+ Display</li>
                                        <li>64 MP + 8 MP + 5 MP + 5 MP | 32 MP Front Camera</li>
                                        <li>6000 mAh Battery</li>
                                        <li>Samsun Exynos 9 Octa 9611 Processor</li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="col-sm-3">

                            <div class="info-price pl-4 mr-4">

                                <h3 class="font-weight-bold">₹ 17,249</h3>

                                <span class="badge badge-pill badge-danger verify-pill p-2">
                                    MobCOM Verified
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </span>

                                <p class="text-muted my-2">No Cost EMI</p>
                                <p class="text-muted my-2">Upto <b>₹ 6,950</b> Off on Exchange</p>

                                <button type="button" class="btn btn-outline-secondary btn-block mt-4">
                                    View More
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Product Card End -->

                <!-- Product Card Start -->

                <div class="card card-product-list mx-2 my-3 p-3">

                    <div class="row no-gutters">

                        <div class="col-md-3 mb-2">
                            <a href="#">
                                <img class="product-img" src="images/phone_images/71Sinqbw35L._SL1500_.jpg">
                            </a>
                        </div>

                        <div class="col-md-6">

                            <div class="info-main">
                                <a class="card-link" href="#">
                                    <h5 class="font-weight-bold">Samsung Galaxy M31 (Fusion Black, 64 GB) </h5>
                                </a>

                                <div class="mb-3">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="badge badge-success p-2">4.5</span>
                                    <span class="text-muted">Ratings</span>
                                </div>

                                <div>
                                    <ul class="px-2 mx-3">
                                        <li>6 GB RAM | 64 GB ROM | Expandable Upto 512 GB</li>
                                        <li>6.4 inch Full HD+ Display</li>
                                        <li>64 MP + 8 MP + 5 MP + 5 MP | 32 MP Front Camera</li>
                                        <li>6000 mAh Battery</li>
                                        <li>Samsun Exynos 9 Octa 9611 Processor</li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="col-sm-3">

                            <div class="info-price pl-4 mr-4">

                                <h3 class="font-weight-bold">₹ 17,249</h3>

                                <span class="badge badge-pill badge-danger verify-pill p-2">
                                    MobCOM Verified
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </span>

                                <p class="text-muted my-2">No Cost EMI</p>
                                <p class="text-muted my-2">Upto <b>₹ 6,950</b> Off on Exchange</p>

                                <button type="button" class="btn btn-outline-secondary btn-block mt-4">
                                    View More
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Product Card End -->

                <!-- Pagination Start -->

                <nav aria-label="Page navigation sample">
                    <ul class="pagination justify-content-center mx-2 my-2">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>

                <!-- Pagination End -->

            </div>

            <!-- Product List End -->

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