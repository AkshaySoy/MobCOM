<div class="modal fade" id="manageProduct" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="manageProductLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="manageProductLabel">
                    Manage Product
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

                <form method="">

                    <div class="form-row">

                        <div class="form-group col-md-3">
                            <label for="brand">Brand</label>
                            <select class="custom-select d-block w-100" id="brand" name="brand" required>
                                <option value="">Apple</option>
                                <option value="">Apple</option>
                                <option value="">Samsung</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="model-name">Model Name</label>
                            <input type="text" class="form-control" id="model-name" name="model-name" placeholder="iPhone 7" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="model-number">Model Number</label>
                            <input type="text" class="form-control" id="model-number" name="model-number" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="model-colour">Model Colour</label>
                            <input type="text" class="form-control" id="model-colour" name="model-colour" required>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="display-size">Display Size</label>
                            <input type="number" class="form-control" name="display-size" required>

                        </div>

                        <div class="form-group col-md-4">
                            <label for="os">Operating System</label>
                            <input type="text" class="form-control" id="os" name="os" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="processor">Processor</label>
                            <input type="text" class="form-control" id="processor" name="processor" required>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="internal-storage">Internal Storage</label>
                            <input type="number" class="form-control" name="internal-storage" required>
                            <small class="text-muted">*In GB</small>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="RAM">RAM</label>
                            <input type="number" class="form-control" name="RAM" required>
                            <small class="text-muted">*In GB</small>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="memory-card">Memory Card Availabe ?</label>
                            <input type="text" class="form-control" id="memory-card" name="memory-card" required>
                            <small class="text-muted">Yes or No</small>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="primary-camera">Primary Camera</label>
                            <input type="text" class="form-control" name="primary-camera" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="secondary-camera">Secondary Camera</label>
                            <input type="text" class="form-control" name="secondary-camera" required>
                        </div>

                    </div>


                    <div class="form-row">

                        <div class="form-group col-md-3">
                            <label for="battery-capacity">Battery Capacity</label>
                            <input type="number" class="form-control" name="battery-capacity" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="width">Width</label>
                            <input type="number" class="form-control" name="width" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="depth">Depth</label>
                            <input type="number" class="form-control" name="depth" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="height">Height</label>
                            <input type="number" class="form-control" name="height" required>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" name="price" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="stock">Stock</label>
                            <input type="number" class="form-control" name="stock" required>
                        </div>

                    </div>

                    <div class="form-row">

                        <label for="select-image">Select Images</label>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" multiple>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>

                        <small class="text-muted">Please select multiple images in Explorer</small>

                    </div>

                    <div class="modal-footer mt-2">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="manageProduct" class="btn btn-primary">Update</button>
                    </div>


                </form>

            </div>


        </div>
    </div>
</div>