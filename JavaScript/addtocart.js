//Make sure DOM is fully load
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

function ready(){
    //Show items to cart section

    addItemToCart();

    document.getElementsByClassName('order-button')[0].addEventListener('click', purchaseClicked)
    
    //Remove cart item buttons
    var removeCartItemButtons = document.getElementsByClassName('btn-remove');
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i];
        button.addEventListener('click', removeCartItem);
    }

    //Quantity input fields
    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener('change', quantityChanged);
    }
}

function purchaseClicked() {
    alert('Thank you for your purchase');
    var cartItems = document.getElementsByClassName('cart-items')[0]
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild);
    }
    sessionStorage.clear();
    updateCartTotal();
}

//Get data from sessionStorage and add it to item rows
function addItemToCart(){
    var cartRow = document.createElement('div');
    var cartItems = document.getElementsByClassName('cart-items')[0];
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title');
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    }

    //Add new item row by html
    var cartRowContents = sessionStorage.getItem('cart')
    cartRow.innerHTML = cartRowContents;
    cartItems.append(cartRow);
    cartRow.getElementsByClassName('btn-remove')[0].addEventListener('click', removeCartItem);
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged);
}

//Remove item from cart and update cart total
function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal();
}

//set quantity to 1 if quantity field changed to NaN or below 0
function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updateCartTotal();
}

//Loop through the cart to get cart total
function updateCartTotal() {
    var itemContainer = document.getElementsByClassName('cart-items')[0];
    var cartRows = itemContainer.getElementsByClassName('cart-row');
    var coupon = document.getElementById('coupon').value;
    console.log(coupon);
    var discount = 0;
    var total = 0;
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i];
        var priceElement = cartRow.getElementsByClassName('cart-price')[0];
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0];
        //Change String type to Float to do calculation
        var price = parseFloat(priceElement.innerText.replace('Price: $', ''));
        var quantity = quantityElement.value;
        total = total + (price * quantity);
    }
    //20% sale if entered this coupon
    if (coupon == "COSC2430-HD"){
        alert("Applied 20% sale coupon")
        discount = 0.2;
    //10% sale for this coupon
    }else if(coupon == "COSC2430-DI"){ 
        alert("Applied 10% sale coupon")
        discount = 0.1;
    }else{
        discount = 0;
    }
    //round float total price number to be integer
    total = Math.round(((total*(1-discount)) * 100) / 100);
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total;
}