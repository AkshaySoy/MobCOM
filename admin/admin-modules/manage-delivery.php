<div class="modal fade manage-delivery" id="manageDelivery" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="manageDeliveryLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="manageDeliveryLabel">
                    Manage Delivery Associate
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="deli-name">Enter Associate Name</label>
                        <input type="text" class="form-control" id="deli-name" name="deli-name" value="<?php echo $deliName ?>" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="deli-phone">Enter Phone Number</label>
                        <input type="number" class="form-control" id="deli-phone" name="deli-phone" value="<?php echo $deliPhone ?>" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="status">Change Status</label>
                        <select class="custom-select d-block w-100" id="deli-status" name="status" required>
                            <option value selected disabled>Select Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>

                    <!-- <input type="hidden" id="deli-id" value=""> -->

                </div>

                <div class="modal-footer mt-2">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="updateDelivery" type="button" name="updateDelivery" class="btn btn-primary">Update</button>
                </div>

            </div>

        </div>

    </div>

</div>