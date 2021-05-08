//Make sure DOM is fully load
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

//main function
function ready(){
    var addToCartButton = document.getElementsByClassName('add-button');
    if (sessionStorage.getItem('account')==null){
        thisButton= addToCartButton[0];
        thisButton.addEventListener('click', noAccount=>{
            alert('Need to login to use add to cart function!');
        });
    }else{
        thisButton= addToCartButton[0];
        thisButton.addEventListener('click', addToCartClicked);
    }

}

//event triggers whenever the buy button is clicked
function addToCartClicked() {
    var title = document.getElementsByClassName('product-title')[0].innerText
    var price = document.getElementsByClassName('product-price')[0].innerText
    var imageSrc = document.getElementsByClassName('image-feature')[0].src
    
    
    //check if the cart is empty to consider add new item to the cart or initialise new cart
    if (sessionStorage.getItem('cart') == null){
        var newCart= `
        <div class="cart-row">
            <div class="cart-item cart-column">
                <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
                <span class="cart-item-title">${title}</span>
            </div>
            <span class="cart-price cart-column">${price}</span>
            <div class="cart-quantity cart-column">
                <input class="cart-quantity-input" type="number" value="1">
                <button class="btn btn-remove" type="button">REMOVE</button>
            </div>
        </div>`;
        sessionStorage.setItem('cart',newCart);
    }else{
        addedToCartCheck(title,price,imageSrc);
    }
}

//Check if the product already existed in the cart
function addedToCartCheck(title,price,imageSrc){
    currentCart = sessionStorage.getItem('cart');
    if (currentCart.search(title) == -1){
        alert("Item added to the cart");
        currentCart += `
        <div class="cart-row">
            <div class="cart-item cart-column">
                <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
                <span class="cart-item-title">${title}</span>
            </div>
            <span class="cart-price cart-column">${price}</span>
            <div class="cart-quantity cart-column">
                <input class="cart-quantity-input" type="number" value="1">
                <button class="btn btn-remove" type="button">REMOVE</button>
            </div>
        </div>`;
        sessionStorage.setItem('cart',currentCart);
    }else{
        alert("Item is already added to the cart")
    }

}


