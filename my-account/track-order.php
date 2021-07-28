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

                        <!-- Order Confirmed -->

                        <div class="step active" data-target="#test-nl-1">
                            <button type="button" class="step-trigger" role="tab" id="stepper2trigger1" disabled="disabled" aria-controls="test-nl-1" aria-selected="true">
                                <span class="bs-stepper-circle bg-success">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </span>
                                <span class="bs-stepper-label">Order Confirmed</span>
                            </button>
                        </div>

                        <div class="bs-stepper-line"></div>

                        <!-- Picked by Courier -->

                        <div class="step" data-target="#test-nl-2">
                            <button type="button" class="step-trigger" role="tab" id="stepper2trigger2" disabled="disabled" aria-selected="false">
                                <span class="bs-stepper-circle bg-secondary">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                <span class="bs-stepper-label font-weight-light">Picked by Courier</span>
                            </button>
                        </div>

                        <div class="bs-stepper-line"></div>

                        <!-- On The Way -->

                        <div class="step" data-target="#test-nl-3">
                            <button type="button" class="step-trigger" role="tab" id="stepper2trigger3" disabled="disabled" aria-selected="false">
                                <span class="bs-stepper-circle bg-secondary">
                                    <i class="fa fa-truck" aria-hidden="true"></i>
                                </span>
                                <span class="bs-stepper-label font-weight-light">On The Way</span>
                            </button>
                        </div>

                        <div class="bs-stepper-line"></div>

                        <!-- Delivered -->
                        
                        <div class="step" data-target="#test-nl-3">
                            <button type="button" class="step-trigger" role="tab" id="stepper2trigger3" disabled="disabled" aria-selected="false">
                                <span class="bs-stepper-circle bg-secondary">
                                    <i class="fa fa-archive" aria-hidden="true"></i>
                                </span>
                                <span class="bs-stepper-label font-weight-light">Delivered</span>
                            </button>
                        </div>
                    </div>

                    <div class="bs-stepper-content">

                        <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane active dstepper-block" aria-labelledby="stepper2trigger1">

                        <h5>Last Updated : 28 July 2021 13:00</h5>

                        <ul class="text-muted">
                            <li>Preparing for dispatch</li>
                            <li>Package has shipped</li>
                            <li>Package left Jamshedpur Courier facility</li>
                            <li>Package has arrived near your location</li>
                            <li>Package is out for delivery</li>
                        </ul>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

</div>