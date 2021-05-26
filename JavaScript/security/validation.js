// Hide and Show div 
function hidetype(){
    document.getElementById('Bussinesstype').style.display ='none';
}
function showtype(){
    document.getElementById('Bussinesstype').style.display = 'block';
}

//Check Retype Password 
var retypePass = function() {
    if (document.getElementById("pass").value ==
        document.getElementById("confirmpass").value) {
        document.getElementById("correctPassword").style.color = 'green';
        document.getElementById("correctPassword").innerHTML = 'Passwords Match';
    } else {
        document.getElementById("correctPassword").style.color = 'red';
        document.getElementById("correctPassword").innerHTML = 'Passwords Mismatch';
    }
}

//Validate Phone Number 
var validatePhone = function() {
    phonePattern = /^[0-9]\d{8}$|^[0-9]\d{9}$|^[0-9]\d{10}$/;
    phonePattern2 = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    phonePattern3 = /^\(?([0-9]{1})\)?[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})$/;
    phonePattern4 = /^\(?([0-9]{1})\)?[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})$/;
    phonePattern5 = /^\(?([0-9]{1})\)?[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})$/;
    if(document.getElementById("phone").value.match(phonePattern) || document.getElementById("phone").value.match(phonePattern2)
        || document.getElementById("phone").value.match(phonePattern3) || document.getElementById("phone").value.match(phonePattern4)
        || document.getElementById("phone").value.match(phonePattern5)) {
        document.getElementById("validPhone").style.color = 'green';
        document.getElementById("validPhone").innerHTML = 'Valid Phone Number';
        return true;
    } else {
        document.getElementById("validPhone").style.color = 'red';
        document.getElementById("validPhone").innerHTML = 'Not a Valid Phone Number';
        return false;
    }
};

//Validate Email
var validateEmail = function() {
    emailPattern = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{3,})$/;
    if (document.getElementById("email").value.match(emailPattern)) {
        document.getElementById("validEmail").style.color = 'green';
        document.getElementById("validEmail").innerHTML = 'Valid Email';

        return true;
    } else {
        document.getElementById("validEmail").style.color = 'red';
        document.getElementById("validEmail").innerHTML = 'Not a Valid Email';
        
        return false;
    }
};

//Validate Password
var validatePassword = function(){
    retypePass();
    passwordPattern = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*])([a-zA-Z0-9!@#$%^&*]{8,})$/;
    if (document.getElementById("pass").value.match(passwordPattern)) {
        document.getElementById("pdmsg").style.color = 'green';
        document.getElementById("pdmsg").innerHTML = 'Strong Password';
        return true;
    } else {
        document.getElementById("pdmsg").style.color = 'red';
        document.getElementById("pdmsg").innerHTML = 'Weak Password';
        return false;
    }
    
};