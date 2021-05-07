var myStorage = window.localStorage;
let accounts = [{username:'admin', pass:'admin123!', email:'admin@gmail.com'}];
myStorage.setItem("account", accounts);

//check login account
var checkLogin = function(event){
    event.preventDefault();
    let uname = document.getElementById("Uname").value;
    let pass = document.getElementById("Pass").value;
    if(uname == "admin" && pass == "admin123!"){
        myStorage.setItem("user", {username:'admin', pass:'admin123!', email:'admin@gmail.com'});
        alert("Login admin");
        window.location = "../account/myaccount.html";
    } else {
        myStorage.setItem("user", undefined);
        document.getElementById("incorrectAccount").style.color = "red";
        document.getElementById("incorrectAccount").innerHTML = "Incorrect Username or Password";
    }
};
