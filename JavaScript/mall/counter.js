var counter = function(){
    let minlength=50;
    let maxlength = 500;
    let currentlength = document.getElementById("messagebox").value.length;
    if (currentlength <= minlength) {
        document.getElementById("countChars").innerHTML = 'Please type ' + 
        (50 - currentlength) + " more characters to meet the minimum length";
    } else if (currentlength >= maxlength){
        document.getElementById("countChars").innerHTML = 'You have reached the maximum amount of characters ';
    } else{
        document.getElementById("countChars").innerHTML = "You have " + (500 - currentlength) + " characters left";
    }
}