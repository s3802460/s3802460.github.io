var myStorage = window.sessionStorage;
let accounts = [
    {username:"admin", 
        pass:"Admin123!", 
        phone:"123456789", 
        email: "admin@gmail.com", 
        avatar: "https://s3.zerochan.net/Berserker.%28Kiyohime%29.240.2118242.jpg"},
    {username:"user2", 
        pass:"User123!",
        phone:"1231231231", 
        email:"user2@gmail.com", 
        avatar:"https://s3.zerochan.net/Hoshimachi.Suisei.240.2989574.jpg"},
    {username:"user3", 
        pass:"User123!", 
        phone:"111.222.3333", 
        email:"user3@gmail.com", 
        avatar:"https://pbs.twimg.com/profile_images/1362423294629085190/MvJqEGbF_400x400.jpg"}];
myStorage.setItem("account", accounts);

function redirect(url) {
    window.location.replace(url);    
  }

//check login account
var checkLogin = function(event){
    //event.preventDefault();
    let uname = document.getElementById("Uname").value;
    let pass = document.getElementById("Pass").value;

    let loginUser = accounts.find(user => user.username === uname);

    if(loginUser && loginUser.pass === pass) {
        myStorage.setItem("user", JSON.stringify(loginUser));
        redirect("../account/myaccount.php");
        return false;        
    }else{
        loginFail();
        return false;    
    }
    
};

var loginFail = function(){
    myStorage.setItem("user", undefined);
    document.getElementById("incorrectAccount").style.color = "red";
    document.getElementById("incorrectAccount").innerHTML = "Incorrect Username or Password"; 
};