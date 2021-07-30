<div class="tab-pane fade show" id="my-orders" role="tabpanel">

    <?php

    $activeUser = $_SESSION['user_id'];

    $query = "SELECT `user_master`.*, `product_master`.*, `order_master`.*
              FROM `user_master`, `product_master`, `order_master`
              WHERE `user_master`.`user_id`= $activeUser
              AND `order_master`.`user_id`= $activeUser
              AND `order_master`.`product_id`=`product_master`.`product_id`
              ORDER BY `order_master`.`date_added` DESC";

    $res = mysqli_query($conn, $query);

    if ($res) {
        $num = mysqli_num_rows($res);
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

        while ($row = mysqli_fetch_object($res)) {

            $orignalDate = $row->date_added;
            $dateAdded = date("d M Y", strtotime($orignalDate));

            echo "
    
            <!-- Order Card Start -->
    
            <div class='card card-mycart mb-4'>
    
                <!-- Delivery Deitail Start -->
    
                <div class='card-header'>
                    <strong class='mr-3'>Order ID: $row->order_id</strong>
                    <span>Order Date: $dateAdded</span>
                </div>
    
                <div class='card-body'>
    
                    <div class='row'>
    
                        <div class='col-md-8'>
    
                            <h6 class='text-muted'>Delivery to</h6>
                            <p>
                                $row->name
                                <br>
                                Phone $row->user_phone
                                <br>
                                Email: $row->user_email
                                <br>
                                Location: $row->order_address
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
                                Shipping fee: Free
                                <br>
                                <span>Total: ₹ $row->mobile_price</span>
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
                                    <img class='img-xs border p-1' src='images/$row->brand_name/$row->model_name/1.jpg' alt=''>
                                </td>
                                <td>
                                    <p class=' mb-0'>$row->brand_name $row->model_name ($row->model_colour, $row->internal_storage GB)</p>
                                    <span class='price text-muted'>₹ $row->mobile_price</span>
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
        }

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