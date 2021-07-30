    <!DOCTYPE html>
<html lang="en">

<head>

    <?php
    
    $title = "MobCOM | My Shopping Cart";
    require('modules/header.php');
    

    ?>

</head>

<body class="bg-light ">


    <!-- Navbar Start -->

    <?php

    require('modules/navbar.php');
    $total_price = 0;
    if ($_SESSION['login_status'] == true){
        echo "
        <script>
            var user_id = $_SESSION[user_id]
        </script>
        ";
    }
    else{
        echo "
        <script>
            var user_id = null;
            location.replace('./')
        </script>
        ";
    }

    ?>

    <!-- Navbar End -->

    <!-- Main Content Start -->

    <div class="container-fluid my-3 py-2 min-vh-100">

        <div class="row">

            <!-- My Cart Start -->

            <div class="col-lg-8">

                <div class="card card-mycart mb-3">

                    <div class="card-body">

                        <h5 class="font-weight-bold mb-4">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            My Cart
                        </h5>

                        <!-- Product Start -->
                        <?php
                        $sql = "SELECT * FROM shopping_cart_master sc, product_master pm WHERE sc.product_id = pm.product_id";
                        if ($GLOBALS['con']) {
                            if ( $result = $GLOBALS['con'] -> query($sql) ){
                                if ($result->num_rows > 0) {
                                    $total_products = mysqli_num_rows($result);
                                    $total_price = 0;
                                    while($row = $result->fetch_assoc()){
                                        $total_price += $row['mobile_price'];
                                        echo "
                                        <div class='row mb-4'>
                                            <div class='col-md-5 col-lg-3 col-xl-3 mb-2'>
                                                <a href='#'>
                                                    <div class='border text-center'>
                                                        <img class='img-fluid my-3' width='50px' src='images/$row[brand_name]/$row[model_name]/1.jpg'>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class='col-md-7 col-lg-9 col-xl-9'>
                                                <div>
                                                    <div class='d-flex justify-content-between'>
                                                        <div>
                                                            <a class='card-link text-dark' href='#'>
                                                                <h5 onclick='location.href=(`product-detail.php?product_id=$row[product_id]`)'>$row[brand_name] $row[model_name] ( $row[model_colour], $row[internal_storage] GB)</h5>
                                                            </a>
                                                            <p class='text-success'>
                                                                <i class='fa fa-check' aria-hidden='true'></i>
                                                                In Stock
                                                            </p>
                                                            <p class='text-muted'>
                                                                <i class='fa fa-truck' aria-hidden='true'></i>
                                                                Ships in 3-4 business days
                                                            </p>
                                                        </div>
                                                        <div class='mx-3'>
                                                            <h4>₹ " . number_format($row['mobile_price'],0,'.',',')."</h4>
                                                            <span class='badge badge-pill badge-danger verify-pill p-2'>
                                                                MobCOM Verified
                                                                <i class='fa fa-check-circle' aria-hidden='true'></i>
                                                            </span>
                                                            <div class='my-3'>
                                                                <a onclick='removeItem(this.id)' class='card-link text-danger' id='$row[product_id]_$row[time_stamp]'>
                                                                    <i class='fa fa-times' aria-hidden='true'></i>
                                                                    Remove Item
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class='mb-4'>

                                    ";
                                }
                                } else { 
                                    echo "
                                    <div class='alert alert-danger' role='alert'>
                                        <i class='fa fa-info-circle' aria-hidden='true'></i>
                                        Your cart is empty. Continue Shopping.
                                    </div>
                                    "; 
                                }
                            }
                            else{  
                                echo '<br> QUERY PROBLEM';
                            }
                        }else {
                            echo "<br>NOT";
                        }

                        ?>
                        
                        <!-- Product End -->

                        <div class="alert alert-warning" role="alert">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                            Currenty accepting only Cash On Delivery.
                        </div>

                    </div>

                </div>

            </div>

            <!-- My Cart End -->

            <!-- Right Card Start -->

            <div class="col-lg-4">

                <div class="card card card-mycart mb-3">

                    <div class="card-body">

                        <h5 class="font-weight-bold mb-3">Total Amount</h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Subtotal
                                <?php
                                    echo "<span>₹ ". number_format($total_price,0,'.',',') . "</span>";
                                ?>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                                Shipping
                                <span class="text-success">Free</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">

                                <div>
                                    <strong>Total Amount (Including GST)</strong>
                                </div>
                                <?php
                                    echo "<span><strong>₹ ". number_format($total_price,0,'.',',') . "</strong</span>";
                                ?>
                            </li>
                        </ul>

                        <a href="checkout.php" type="button" class="btn btn-primary btn-block p-2">
                            Go To Checkout
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                        <a href="#" type="button" class="btn btn-outline-secondary btn-block p-2">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            Continue Shopping
                        </a>



                    </div>
                </div>
            </div>

            <!-- Right Card End -->

        </div>

    </div>

    <!-- Main Content End -->

    <!-- Footer Start -->

    <?php

    require('modules/footer.php');

    ?>

    <!-- Footer End -->

</body>

<script>

function removeItem(product_data){
    let product_id = parseInt(product_data.split('_')[0])
    let time_stamp = product_data.split('_')[1]
    console.log('data: ' , user_id, product_id, time_stamp)

    var xhttp = new XMLHttpRequest();
    let data = `user_id=${user_id}&product_id=${product_id}&time_stamp=${time_stamp}`;
    console.log('data: ', data)
    let url = `http://localhost:3000/removeProductFromCart?${data}`;
    xhttp.open("POST", url, true);
    xhttp.send();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText)
            location.reload()
        }
    };

    location.reload()
}

</script>


</html>