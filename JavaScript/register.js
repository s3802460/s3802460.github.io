function hidetype(){
    document.getElementById('Bussinesstype').style.display ='none';
}
function showtype(){
    document.getElementById('Bussinesstype').style.display = 'block';
}
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