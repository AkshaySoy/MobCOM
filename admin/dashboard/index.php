<!doctype html>
<html lang="en">

<head>

  <?php

  require('../admin-modules/header.php');

  ?>

</head>

<body>

  <?php

  require('../admin-modules/navbar.php');

  ?>

  <div class="container-fluid">

    <div class="row">

      <?php

      require('../admin-modules/sidebar.php');

      ?>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Overview</h1>
        </div>

        <!-- Main Content Start -->

        <div class="container-fluid p-2">

          <div class="row row-cols-1 row-cols-md-3">

            <div class="col mb-4">
              <div class="card text-left shadow">
                <div class="card-body">
                  <h5 class="card-title">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    Total Customer Registered
                  </h5>
                  <h4 class="card-text">25</h4>
                </div>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card text-left shadow">
                <div class="card-body">
                  <h5 class="card-title">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    Total Products
                  </h5>
                  <h4 class="card-text">1250</h4>
                </div>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card text-left shadow">
                <div class="card-body">
                  <h5 class="card-title">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Total Orders
                  </h5>
                  <h4 class="card-text">256</h4>
                </div>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card text-left shadow">
                <div class="card-body">
                  <h5 class="card-title">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    Total Orders In 30 Days
                  </h5>
                  <h4 class="card-text">128</h4>
                </div>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card text-left shadow">
                <div class="card-body">
                  <h5 class="card-title">
                    <i class="fa fa-money" aria-hidden="true"></i>
                    Recent Transaction
                  </h5>
                  <h4 class="card-text">transaction id</h4>
                </div>
              </div>
            </div>

          </div>

        </div>

        <!-- Main Content End -->

      </main>

    </div>

  </div>

  <?php

  require('../admin-modules/footer.php');

  ?>

</body>

</html>