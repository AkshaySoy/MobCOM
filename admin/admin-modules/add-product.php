<div class="modal fade" id="addProduct" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="addProductLabel">
                    Add Product
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <!-- Form Order -->

                <!-- brand
                model-name
                model-number
                model-colour
                display-size
                operating-system
                processor
                internal-storage
                ram
                memory-card-available
                primary-camera
                secondary-camera
                battery-capacity
                width
                depth
                height
                price
                stock
                select-image -->

                <form action="../admin-modules/upload-multiple.php" method="POST" enctype="multipart/form-data">

                    <div class="form-row">

                        <div class="form-group col-md-3">
                            <label for="brand">Brand</label>
                            <select class="custom-select d-block w-100" name="brand_name" required>
                                <option value="" disabled selected>Choose...</option>
                                <option>Apple</option>
                                <option>Samsung</option>
                                <option>Nokia</option>
                                <option>Realme</option>
                                <option>Redmi</option>
                                <option>Xiomi</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="model-name">Model Name</label>
                            <input type="text" class="form-control" name="model_name" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="model-number">Model Number</label>
                            <input type="text" class="form-control" name="model_number" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="model-colour">Model Colour</label>
                            <input type="text" class="form-control" name="model_colour" required>
                        </div>
                    
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="model-colour">Description</label>
                            <input type="text" class="form-control" name="product_desc" required>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-3">
                            <label for="display-size">Display Size</label>
                            <input type="number" class="form-control" name="display_size" required>
                            <small class="text-muted">*In centimeters</small>

                        </div>

                        <div class="form-group col-md-3">
                            <label for="display-size">Display Resolution</label>
                            <input type="text" class="form-control" name="display_resolution" required>
                            <small class="text-muted">*number x number</small>

                        </div>

                        <div class="form-group col-md-3">
                            <label for="os">Operating System</label>
                            <input type="text" class="form-control" name="operating_system" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="processor">Processor</label>
                            <input type="text" class="form-control" id="processor" name="processor" required>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="internal-storage">Internal Storage</label>
                            <input type="number" class="form-control" name="internal_storage" required>
                            <small class="text-muted">*In GB</small>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="RAM">RAM</label>
                            <input type="number" class="form-control" name="ram" required>
                            <small class="text-muted">*In GB</small>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="memory-card">Memory Card Availabe ?</label>
                            <input type="text" class="form-control" name="memory_card_available" required>
                            <small class="text-muted">*In GB if yes</small>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="primary-camera">Primary Camera Setup</label>
                            <input type="text" class="form-control" name="primary_camera" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="secondary-camera">Secondary Camera Setup</label>
                            <input type="text" class="form-control" name="secondary_camera" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="secondary-camera">Network Type</label>
                            <input type="text" class="form-control" name="network_type" required>
                        </div>

                    </div>


                    <div class="form-row">

                        <div class="form-group col-md-3">
                            <label for="battery-capacity">Battery Capacity</label>
                            <input type="number" class="form-control" name="battery_capacity" required>
                            <small class="text-muted">*In mAh</small>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="mobile_width">Width</label>
                            <input type="number" class="form-control" name="mobile_width" required>
                            <small class="text-muted">*In cms</small>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="mobile_depth">Depth</label>
                            <input type="number" class="form-control" name="mobile_depth" required>
                            <small class="text-muted">*In cms</small>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="mobile_weight">Weight</label>
                            <input type="number" class="form-control" name="mobile_weight" required>
                            <small class="text-muted">*In gms</small>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="mobile_price">Price</label>
                            <input type="number" class="form-control" name="mobile_price" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="mobile_availability">Stock</label>
                            <input type="number" class="form-control" name="mobile_availability" required>
                        </div>

                    </div>

                    <div class="form-row">

                        <label for="select-image">Select Images</label>

                        <div class="custom-file">
                            <input type="file" name="files[]" class="custom-file-input" multiple>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>

                        <small class="text-muted">Please select multiple images in Explorer</small>

                    </div>

                    <div class="modal-footer mt-2">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="addProduct" class="btn btn-primary">Add</button>
                    </div>

                </form>

            </div>


        </div>
    </div>
</div>