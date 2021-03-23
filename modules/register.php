<form action="" method="POST" class="needs-validation" novalidate>

    <!-- Name -->

    <div class="form-row">

        <div class="col form-group">
            <label for="validationDefault01">First name</label>
            <input type="text" class="form-control" placeholder="Enter your first name" name="firstName" id="validationDefault01" value="<?php echo $firstName; ?>" required>
            <div class="invalid-feedback">             
                Please enter your first name
            </div>
        </div>


        <div class="col form-group">
            <label>Last name</label>
            <input type="text" class="form-control" placeholder="Enter you last name" name="lastName" id="lastName" value="<?php echo $lastName; ?>" required>
            <div class="invalid-feedback">               
                Please enter your last name
            </div>
        </div>

    </div>

    <!-- Email -->

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter your email id" name="email" id="email" value="<?php echo $email; ?>" required>
        <div class="invalid-feedback">        
            Please enter a valid email id
        </div>
        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <!-- Phone Number -->

    <div class="form-group">

        <label>Phone Number</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">+91</span>
            </div>
            <input type="tel" class="form-control" placeholder="Enter a valid phone number" maxlength="10" name="phoneNumber" id="phoneNumber" onkeyup='checkPhoneNumber();' value="<?php echo $phoneNumber; ?>" required>
            <div class="invalid-feedback" id="phoneNumber-feedback">            
                Please enter phone number
            </div>
        </div>

    </div>

    <!-- Gender -->

    <div class="form-group my-1">

        <label class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input" type="radio" name="gender" id="male" value="Male" required>
            <span class="custom-control-label"> Male </span>
        </label>

        <label class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input" type="radio" name="gender" id="female" value="Female" required>
            <span class="custom-control-label"> Female </span>
        </label>

        <label class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input" type="radio" name="gender" id="others" value="Others" required>
            <span class="custom-control-label"> Others </span>

            <span class="invalid-feedback ml-2">
                <i class="fa fa-info-circle" aria-hidden="true"></i>
                Please select your gender
            </span>

        </label>


    </div>

    <!-- Address -->

    <div class="mb-3">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address1" placeholder="1234 Main St" id="address1" value="<?php echo $address1; ?>" required>
        <div class="invalid-feedback">
            
            Please enter your address
        </div>
    </div>

    <!-- Address 2 -->

    <div class="mb-3">
        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
        <input type="text" class="form-control" name="address2" placeholder="Apartment or suite" value="<?php echo $address2; ?>">
        <div class="invalid-feedback"></div>
    </div>

    <div class="row">

        <!-- State -->

        <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" name="state" id="state" required>
                <option value="">Choose...</option>
                <option>Jharkhand</option>
            </select>
            <div class="invalid-feedback">
                
                Please select your state
            </div>
        </div>

        <!-- City -->

        <div class="col-md-4 mb-3">
            <label for="city">City</label>
            <select class="custom-select d-block w-100" id="city" name="city" required>
                <option value="">Choose...</option>
                <option>Jamshedpur</option>
            </select>
            <div class="invalid-feedback">        
                Please select a valid city
            </div>
        </div>

        <!-- Pin Code -->

        <div class="col-md-4 mb-3">
            <label for="pincode">Pin Code</label>
            <input type="text" class="form-control" name="pincode" placeholder="833201" id="pincode" value="<?php echo $pincode; ?>" required>
            <div class="invalid-feedback">               
                Please enter your pincode
            </div>
        </div>

    </div>

    <!-- Password -->

    <div class="form-row">

        <div class="form-group col-md-6">

            <label>Create password</label>
            <input type="password" class="form-control" id="password" name="password" onkeyup='checkPwd();' required>
            <div class="invalid-feedback" id="pwd-feedback">               
                Please enter a password
            </div>
            <div class="invalid-feedback" id="pwd-feedback"></div>

        </div>

        <div class="form-group col-md-6">
            <label>Repeat password</label>
            <input type="password" class="form-control" id="confirm_password" onkeyup='checkPwd();'>
            <div class="invalid-feedback">                
                Please re-enter the password
            </div>
            <div class="invalid-feedback" id="confirmPwd-feedback"></div>
        </div>

    </div>

    <div class="form-group">
        <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" required>
            <div class="custom-control-label"> I agree with the
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Terms and Contitions</a>.
            </div>

            <div class="invalid-feedback">               
                You must agree before registering
            </div>
        </label>
    </div>

    <div class="form-group">
        <button type="submit" name="SubmitBtn" class="btn btn-success btn-block"> Sign Up </button>
    </div>

</form>