<div class="tab-pane fade show active" id="my-settings" role="tabpanel">

    <div class="card card-mycart mb-3">

        <div class="card-body">

            <h5 class="font-weight-bold mb-4">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Edit Profile
            </h5>

            <form class="needs-validation" novalidate="">

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="User First Name" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="User Last Name" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="useremail@hotmail.com" required>
                        <div class="invalid-feedback">
                            Please enter your email.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" id="phone" placeholder="123456789" required>
                        <div class="invalid-feedback">
                            Please enter your phone number.
                        </div>
                    </div>

                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                        Please enter your address.
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

                <button class="btn btn-primary my-2" type="submit">Update</button>

            </form>

        </div>

    </div>

</div>