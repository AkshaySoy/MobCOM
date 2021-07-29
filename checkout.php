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
    $total_price = 0;
    $items_in_cart = 0;
    echo "user_id : " . $_SESSION['user_id'];
    echo "glob cart : " . $GLOBALS['products_in_cart'];
    if ($_SESSION['login_status'] == true) {
        echo "
        <script>
            var user_id = $_SESSION[user_id]
        </script>
        ";
    } else {
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

    <?php
    $sql = "SELECT * FROM shopping_cart_master sc, product_master pm WHERE sc.product_id = pm.product_id";
    if ($GLOBALS['con']) {
        if ($result = $GLOBALS['con']->query($sql)) {
            if ($result->num_rows > 0) {
                $total_products = mysqli_num_rows($result);
                $total_price = 0;
                while ($row = $result->fetch_assoc()) {
                    $total_price += $row['mobile_price'];
                }
                $items_in_cart = mysqli_num_rows($result);
            }
        }
    }
    ?>


    <div class="container-fluid my-3 py-2 min-vh-100">

        <div class="row">

            <!-- Billing Address Start -->

            <div class="col-lg-8">

                <div class="card card-mycart mb-3">

                    <div class="card-body">

                        <h5 class="font-weight-bold mb-4">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            Billing Address
                        </h5>

                        <!-- Form Start -->

                        <form class="needs-validation" novalidate="">

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                            </div>

                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="state">State</label>
                                    <select class="custom-select d-block w-100" id="state" required>
                                        <option value="">Choose...</option>
                                        <option>Jharkhand</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid state.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="city">City</label>
                                    <select class="custom-select d-block w-100" id="city" required>
                                        <option value="">Choose...</option>
                                        <option>Jamshedpur</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="pincode">Pin Code</label>
                                    <input type="text" class="form-control" id="pincode" placeholder="833201" required>
                                    <div class="invalid-feedback">
                                        Pin Code required.
                                    </div>
                                </div>
                            </div>

                            <hr class="mb-4">

                            <div class="text-center">

                                <button class="btn btn-outline-secondary" type="submit">Go Back</button>
                                <button class="btn btn-primary" type="button" onclick="placeOrder()">Confirm Order</button>

                            </div>

                        </form>

                        <!-- Form End -->

                    </div>

                </div>

            </div>

            <!-- Billing Address End -->

            <!-- Right Card Start -->

            <div class="col-lg-4">

                <div class="card card-mycart">

                    <div class="card-body">

                        <h5 class="font-weight-bold mb-3" id="cartElement">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <?php
                            echo "My Cart (" . $items_in_cart . ")";
                            ?>
                        </h5>
                        <h5 class="font-weight-bold mb-3" id="productElement">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <?php
                            echo "Product Name";
                            ?>
                        </h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0" id="subTotalText">
                                Subtotal
                                <?php
                                echo "<span>₹ " . number_format($total_price, 0, '.', ',') . "</span>";
                                ?>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                                Shipping
                                <span class="text-success">Free</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">

                                <div>
                                    <strong>Total Amount (Including GST)</strong>
                                </div>
                                <?php
                                echo "<span><strong id='totalPriceText'>₹ " . number_format($total_price, 0, '.', ',') . "</strong</span>";
                                ?>
                            </li>
                        </ul>

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

    <!-- Boostrap 4 JS -->


</body>
<script>
    console.log('checkout page', location.href)
    var checkoutType = "cart"
    var cart_id = user_id
    var product_id = null
    //can be 'cart' or 'product'
    if (location.href.split('?').length > 1) {
        checkoutType = "product"
        console.log('ProductId : ', location.href.split('?')[1].split('=')[1])
        product_id = location.href.split('?')[1].split('=')[1]
        cart_id = null
    } else {
        console.log('CartId : ', user_id)
        cart_id = user_id
    }


    function placeOrder() {
        let firstName = document.getElementById('firstName').value
        let lastName = document.getElementById('lastName').value
        let address = document.getElementById('address').value
        let address2 = document.getElementById('address2').value
        let state = document.getElementById('state').value
        let city = document.getElementById('city').value
        let pincode = document.getElementById('pincode').value

        if (user_id != null && firstName && lastName && (address || address2) && state && city && pincode) {
            var xhttp = new XMLHttpRequest();
            let data = {
                user_id: user_id,
                firstName: firstName,
                lastName: lastName,
                address: address,
                address2: address2,
                state: state,
                city: city,
                pincode: pincode,
                cart_id: cart_id,
                product_id: product_id
            }
            let stringgedData = JSON.stringify(data)
            let url = `http://localhost:3000/placeOrder?data=${stringgedData}`;
            xhttp.open("POST", url, true);
            xhttp.send();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText)
                    alert(this.responseText)
                    location.replace('confirm-order.php?order-confirm=true') 
                };
            }
        } else {
            if (user_id == null) {
                alert('not logged in')
            } else {
                alert('fill the form')
            }
        }
    }
</script>

</html>