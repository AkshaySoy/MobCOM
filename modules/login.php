<form action="" method="POST" class="needs-validation" novalidate>

    <!-- Input Start -->

    <div class="form-group">
        <label for="email">
            <p class="mb-0">Email</p>
        </label>
        <div class="input-group mt-0">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <i class="fa fa-at" aria-hidden="true"></i>
                </span>
            </div>
            <input type="text" id="userEmail" name="userEmail" class="form-control" placeholder="Enter Email" required>
            <div class="invalid-feedback">             
                Please enter a valid email id
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="password">
            <p class="mb-0">Password</p>
        </label>
        <div class="input-group mt-0">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>
            <input type="password" id="userPwd" name="userPwd" class="form-control" placeholder="Enter Password" required>
            <div class="invalid-feedback">
                Please enter your password
            </div>
        </div>
    </div>

    <div class="form-check mt-0">
        <input class="form-check-input showPwd" type="checkbox" onclick="showpassword()" novalidate>
        <label class="form-check-label" for="userPwdInput">
            Show Password
        </label>
    </div>

    <button type="submit" id="login" name="loginBtn" class="btn btn-success btn-block mt-3">Login</button>

    <p class="text-muted text-center p-2">New User ?
        <a href="#nav-register" class="card-link text-primary">Register Here</a>
    </p>

</form>