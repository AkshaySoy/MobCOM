<!doctype html>
<html lang="en">

<head>

  <?php

  require('../delivery-modules/header.php');
  require('../delivery-modules/login-query.php');

  ?>


  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">


  <form class="form-signin" action="" method="POST">

    <h4 class="mb-4">
      <i class="fa fa-mobile" aria-hidden="true"></i>
      MobCOM Delivery Login
    </h4>

    <!-- Login Error Message -->

    <?php

    if (!empty($error != "")) {

      echo "
      <div class='alert alert-danger alert-dismissible fade show text-left' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              <span class='sr-only'>Close</span>
          </button>
          <i class='fa fa-info-circle' aria-hidden='true'></i>
          $error
      </div>

    ";
    }

    ?>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="number" id="inputEmail" name="deli-phone" class="form-control" placeholder="Phone Number" required autofocus>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="deli-pwd" class="form-control" placeholder="Password" required>

    <button class="btn btn-primary btn-block" name="deli-login" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">
      <i class="fa fa-barcode" aria-hidden="true"></i>
      MobCOM DELIVERY ASSOCIATES ONLY
    </p>
  </form>

  <?php

  require('../delivery-modules/footer.php');

  ?>



</body>

</html>