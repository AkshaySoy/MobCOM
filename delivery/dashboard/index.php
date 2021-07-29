<!doctype html>
<html lang="en">

<head>

  <?php

  require('../delivery-modules/header.php');

  ?>

</head>

<body>

  <?php

  require('../delivery-modules/navbar.php');

  ?>

  <div class="container-fluid">

    <div class="row">

      <?php

      require('../delivery-modules/sidebar.php');

      ?>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Overview</h1>
        </div>

        <!-- Main Content Start -->

        <!-- Pending Delivery query -->

        <?php

        $activeUser = $_SESSION['deli_id'];
        $pending = "SELECT `order_master`.*, `delivery_master`.*
                  FROM `order_master`, `delivery_master`
                  WHERE `order_master`.`deli_id`=`delivery_master`.`deli_id`";
        $res = mysqli_query($conn, $pending);

        if ($res) {
          $num = mysqli_num_rows($res);
          mysqli_free_result($res);
        }

        ?>

        <!-- Delivered Order query -->

        <?php

        $activeUser = $_SESSION['deli_id'];
        $delivered = "SELECT `order_master`.*, `delivery_master`.*
                  FROM `order_master`, `delivery_master`
                  WHERE `order_master`.`deli_id`=`delivery_master`.`deli_id`
                  AND `order_master`.`order_status`= 'delivered'";
        $res2 = mysqli_query($conn, $delivered);
     
        if ($res2) {
          $num2 = mysqli_num_rows($res2);
          mysqli_free_result($res2);
        }  

        ?>

        <div class="container-fluid p-2">

          <div class="row row-cols-1 row-cols-md-3">

            <div class="col mb-4">
              <div class="card text-left shadow">
                <div class="card-body">
                  <a href="pending-orders.php" class="card-link font-weight-bold text-dark h5">
                    <i class="fa fa-archive" aria-hidden="true"></i>
                    Pending Orders
                  </a>
                  <h4 class="card-text mt-2"><?php echo $num ?></h4>
                </div>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card text-left shadow">
                <div class="card-body">
                  <a href="delivered-orders.php" class="card-link font-weight-bold text-dark h5">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    Delivered Orders
                  </a>
                  <h4 class="card-text mt-2"><?php echo $num2 ?></h4>
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

  require('../delivery-modules/footer.php');

  ?>

</body>

</html>