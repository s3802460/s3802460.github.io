/*Hide and Show div */
function hidetype(){
    document.getElementById('Bussinesstype').style.display ='none';
}
function showtype(){
    document.getElementById('Bussinesstype').style.display = 'block';
}
/*End of Hide and Show div */

/*Check Retype Password */
var check = function() {
    if (document.getElementById("pass").value ==
        document.getElementById("confirmpass").value) {
        document.getElementById("validmsg").style.color = 'green';
        document.getElementById("validmsg").innerHTML = 'Passwords Match';
    } else {
        document.getElementById("validmsg").style.color = 'red';
        document.getElementById("validmsg").innerHTML = 'Passwords Mismatch';
    }
}
/*End of Check Retype Password */

/*Validate Phone Number */
var validatePhone = function() {
    phonePattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if((document.getElementById("phone").value.match(phonePattern))) {
        document.getElementById("validPhone").style.color = 'green';
        document.getElementById("validPhone").innerHTML = 'Valid Phone Number';
        return true;
    } else {
        document.getElementById("validPhone").style.color = 'red';
        document.getElementById("validPhone").innerHTML = 'Not a Valid Phone Number';
        return false;
    }
};
/*End of Validate Phone Number */

/*Validate Email */
var validateEmail = function() {

};
/*End of Validate Email */