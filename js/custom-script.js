// Show Password Start

function showpassword() {
    var x = document.getElementById("userPwd");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

// Show Password End

// phoneNumber Validation Start

var checkPhoneNumber = function () {

    if (document.getElementById('phoneNumber').value.length != 10) {
        document.getElementById('phoneNumber').className = 'form-control is-invalid';
        document.getElementById('phoneNumber-feedback').innerHTML = '<i class="fa fa-info-circle" aria-hidden="true"></i> Please enter a valid 10-digit phone number';
    } else {
        document.getElementById('phoneNumber').className = 'form-control';
    }

}

// phoneNumber Validation End

// Check Password Start

function checkPwd() {

    var pwd = document.getElementById('password');
    var confirmPwd = document.getElementById('confirm_password');

    // Check if both password matches

    if (pwd.value != confirmPwd.value) {
        confirmPwd.className = 'form-control is-invalid';
        document.getElementById('confirmPwd-feedback').className = 'invalid-feedback';
        document.getElementById('confirmPwd-feedback').innerHTML = '<i class="fa fa-times" aria-hidden="true"></i> Incorrect';
    } else {
        confirmPwd.className = 'form-control is-valid';
        document.getElementById('confirmPwd-feedback').className = 'valid-feedback';
        document.getElementById('confirmPwd-feedback').innerHTML = '<i class="fa fa-check" aria-hidden="true"></i> Correct';
    }

}

// Check Password End