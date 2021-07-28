<div class="tab-pane fade show" id="my-orders" role="tabpanel">

    <?php

    $activeUser = $_SESSION['user_id'];

    $query = "SELECT * FROM order_master WHERE user_id = $activeUser";

    $res = mysqli_query($conn, $query);

    if ($res) {
        $num = mysqli_num_rows($res);
        mysqli_free_result($res);
    }

    if ($num == 0) {

        echo "
      
            <div class='container-fluid'>

                <div class='alert alert-danger' role='alert'>
                    <i class='fa fa-info-circle' aria-hidden='true'></i>
                    No Recent Orders
                </div>

            </div>
        
        ";
    } else {

        echo "

        <!-- Order Card Start -->

        <div class='card card-mycart mb-4'>

            <!-- Delivery Deitail Start -->

            <div class='card-header'>
                <strong class='mr-3'>Order ID: 6123456789</strong>
                <span>Order Date: 16 December 2018</span>
            </div>

            <div class='card-body'>

                <div class='row'>

                    <div class='col-md-8'>

                        <h6 class='text-muted'>Delivery to</h6>
                        <p>
                            User Name
                            <br>
                            Phone 123456789
                            <br>
                            Email: username@hotmail.com
                            <br>
                            Location: User Address
                            <br>
                        </p>

                    </div>

                    <div class='col-md-4'>

                        <h6 class='text-muted'>Payment</h6>

                        <span class='text-success'>
                            <i class='fa fa-money' aria-hidden='true'></i>
                            Cash On Delivery
                        </span>

                        <p>
                            Subtotal: ₹ 17,249
                            <br>
                            Shipping fee: Free
                            <br>
                            <span>Total: ₹ 17,249</span>
                        </p>

                    </div>

                </div>

            </div>

            <!-- Delivery Detail End -->

            <!-- Order Detail Start -->

            <div class='table-responsive'>

                <table class='table table-hover'>

                    <tbody>

                        <!-- Product Detail Start -->

                        <tr>

                            <td width='65'>
                                <img class='img-xs border p-1' src='images/phone_images/samsung-galaxy-a21/samsung-galaxy-a21-front.jpeg'>
                            </td>
                            <td>
                                <p class=' mb-0'>Samsung Galaxy A21s (Silver, 128 GB)</p>
                                <span class='price text-muted'>₹ 17,249</span>
                            </td>
                            <td>
                                Seller
                                <br>
                                TrueComRetail
                            </td>

                            <td width='250'>
                                <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#trackOrder'>Track order</button>
                                <div class='dropdown d-inline-block'>
                                    <a href='#' data-toggle='dropdown' class='dropdown-toggle btn btn-outline-secondary'>More</a>
                                    <div class='dropdown-menu dropdown-menu-right'>
                                        <a href='#' class='dropdown-item'>Return</a>
                                        <a href='#' class='dropdown-item' data-toggle='modal' data-target='#cancelOrder'>Cancel order</a>
                                    </div>
                                </div>
                            </td>

                        </tr>

                        <!-- Product Detail End -->

                    </tbody>

                </table>

            </div>

        </div>

    <!-- Order Card End -->    
        
    ";

        require('track-order.php');
    }

    ?>

    <!-- Cancel Order Modal -->
    <div class="modal fade" id="cancelOrder" tabindex="-1" aria-labelledby="cancelOrder" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cancelOrderLabel">Cancel Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    You will recieve an email conifirming cancellation of your order.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Cancel Order</button>
                </div>
            </div>
        </div>
    </div>





</div>