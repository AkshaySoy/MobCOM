<!doctype html>
<html lang="en">

<head>

  <?php

  require('../admin-modules/header.php');
  require('../admin-modules/login-query.php');

  ?>


  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <form class="form-signin" action="" method="POST">
    <h4 class="mb-4">
      <i class="fa fa-mobile" aria-hidden="true"></i>
      MobCOM Admin Login
    </h4>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" name="admin-email" class="form-control" placeholder="Email address" required autofocus>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="admin-pwd" class="form-control" placeholder="Password" required>

    <button class="btn btn-primary btn-block" name="admin-login" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">
      <i class="fa fa-barcode" aria-hidden="true"></i>
      MobCOM ADMINS ONLY
    </p>
  </form>

  <?php

  require('../admin-modules/footer.php');

  ?>



</body>

</html>