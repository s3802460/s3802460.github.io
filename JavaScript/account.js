var myStorage = window.localStorage;
let accounts = [{username:'admin', pass:'admin123!', email:'admin@gmail.com'}];
myStorage.setItem("account", accounts);

//redirect to myaccount
var redirect = function(){
    window.location.href = "../account/login.html";
};
//check login account
var checkLogin = function(){
    let uname = document.getElementById("Uname").value;
    let pass = document.getElementById("Pass").value;
    if(uname == "admin" && pass == "admin123!"){
        myStorage.setItem("user", {username:'admin', pass:'admin123!', email:'admin@gmail.com'});
        alert("Login admin");
        redirect();
        // alert("redirect");
    } else {
        myStorage.setItem("user", undefined);
        alert('Username or password is incorrect');
    }
};

//did not login
