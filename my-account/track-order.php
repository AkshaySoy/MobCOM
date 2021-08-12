<div class="modal fade" id="trackOrder" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="trackOrderLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="trackOrderLabel">Track Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div id="stepper2" class="bs-stepper">

                    <div class="bs-stepper-header" role="tablist">

                        <?php


                        $activeUser = $_SESSION['user_id'];

                        $query = "SELECT * FROM order_master WHERE user_id = $activeUser";

                        $res = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_object($res)) {

                            $orderStatus = $row->order_status;
                            $trackStatus = $row->track_status;
                            $dateUpdated = $row->track_timestamp;

                            $newDateUpdted = date("d M Y h:i A", strtotime($dateUpdated));
                        }

                        ?>

                        <!-- Order Confirmed -->

                        <div class="step active" data-target="#test-nl-1">
                            <button type="button" class="step-trigger" role="tab" id="stepper2trigger1" disabled="disabled" aria-controls="test-nl-1" aria-selected="true">
                                <span class="bs-stepper-circle <?php if ($orderStatus == "order confirmed") echo 'bg-success';
                                                                else  echo 'bg-secondary'; ?>">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </span>
                                <span class="bs-stepper-label">Order Confirmed</span>
                            </button>
                        </div>

                        <div class="bs-stepper-line"></div>

                        <!-- Picked by Courier -->

                        <div class="step" data-target="#test-nl-2">
                            <button type="button" class="step-trigger" role="tab" id="stepper2trigger2" disabled="disabled" aria-selected="false">
                                <span class="bs-stepper-circle <?php if ($orderStatus == "picked by courier") echo 'bg-success';
                                                                else  echo 'bg-secondary'; ?>">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                <span class="bs-stepper-label">Picked by Courier</span>
                            </button>
                        </div>

                        <div class="bs-stepper-line"></div>

                        <!-- On The Way -->

                        <div class="step" data-target="#test-nl-3">
                            <button type="button" class="step-trigger" role="tab" id="stepper2trigger3" disabled="disabled" aria-selected="false">
                                <span class="bs-stepper-circle <?php if ($orderStatus == "on the way") echo 'bg-success';
                                                                else  echo 'bg-secondary'; ?>">
                                    <i class="fa fa-truck" aria-hidden="true"></i>
                                </span>
                                <span class="bs-stepper-label">On The Way</span>
                            </button>
                        </div>

                        <div class="bs-stepper-line"></div>

                        <!-- Delivered -->

                        <div class="step" data-target="#test-nl-3">
                            <button type="button" class="step-trigger" role="tab" id="stepper2trigger3" disabled="disabled" aria-selected="false">
                                <span class="bs-stepper-circle <?php if ($orderStatus == "delivered") echo 'bg-success';
                                                                else  echo 'bg-secondary'; ?>">
                                    <i class="fa fa-archive" aria-hidden="true"></i>
                                </span>
                                <span class="bs-stepper-label">Delivered</span>
                            </button>
                        </div>
                    </div>

                    <div class="bs-stepper-content">

                        <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane active dstepper-block" aria-labelledby="stepper2trigger1">

                            <h5>Last Updated : <?php echo $newDateUpdted ?></h5>

                            <ul class="text-muted">
                                <li><?php echo $trackStatus ?></li>
                            </ul>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

</div>