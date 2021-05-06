// Hide and Show div 
function hidetype(){
    document.getElementById('Bussinesstype').style.display ='none';
}
function showtype(){
    document.getElementById('Bussinesstype').style.display = 'block';
}

//Check Retype Password 
var check = function() {
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
    emailPattern = /^\(?[a-z]?[A-Z]){3,})$/;
    if (document.getElementById("email").value.match(emailPattern)) {
        document.getElementById("validEmail").style.color = 'green';
        document.getElementById("validEmail").innerHTML = 'Valid Email';
    } else {
        document.getElementById("validEmail").style.color = 'red';
        document.getElementById("validEmail").innerHTML = 'Not a Valid Email';
    }
};

//Validate Password
var validatePassword = function(){

};