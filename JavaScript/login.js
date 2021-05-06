var myStorage = window.localStorage;
let accounts = [{username:'admin', pass:'admin123!', email:'admin@gmail.com'},
{username:'admin2', pass:'admin123!', email:'admin2@gmail.com'}];

myStorage.setItem("account", accounts);


var checkLogin = function(){
    let uname = document.getElementById("Uname").value;
    let pass = document.getElementById("Pass").value;

    // if(accounts has uname and pass){
    //     myStorage.setItem("user", {username:'admin', pass:'admin123!', email:'admin@gmail.com'});
    //     //redirect to my accounts;
    // } else {
    //     myStorage.setItem("user", undefined);
    //     alert('Username or password is incorrect');
    // }
    
    if(true){
        alert(uname);
        myStorage.setItem("user", {username:'admin', pass:'admin123!', email:'admin@gmail.com'});
        //redirect to my accounts;
        Redirect();
        alert(uname);
    } else {
        myStorage.setItem("user", undefined);
        alert('Username or password is incorrect');
    }

};
