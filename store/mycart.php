<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mall home</title>
    <link rel="stylesheet" href="../css/mall/style.css">
    <link rel="stylesheet" href="../css/cart/cart.css">
    <script src="../JavaScript/addtocart.js"></script>
    <?php 
        session_start();
        $user = $_SESSION["user"];
    ?>
</head>
<body>
    <!-- Header -->
    <header class="clearfix">
        
        <div class="logo">
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <a href="../mall/index.html"><img src="../img/logo.png" alt="logo"></a>
        </div>
        <nav class="">
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="../mall/about.html">About us</a></li>
                <li><a href="../mall/fees.html">Fees</a></li>
                <li><a href="../account/myaccount.php">My Account</a></li>
                <li>
                    <a href="#">Browse</a>
                    <ul>
                        <li><a href="../mall/browse_name.html">Browse Stores by Name</a></li>
                        <li><a href="../mall/browse_catagory.html">Browse Stores by Category</a></li>
                    </ul>
                </li>
                <li><a href="../mall/faq.html">FAQs</a></li>
                <li><a href="../mall/contact.html">Contact</a></li>
                 <li><a href="../account/login.php">Login</a></li>
                <li><a href="../account/register.php">Register</a></li>
            </ul>
        </nav>
    </header>
    <!-- End of header -->

    <!-- Body -->
    <main>
        <section class="container content-section">
            <h2 class="section-header">My Cart</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-coupon">
                <form id="coupon-form" onsubmit=''>
                    <p>Coupon :<input type='text' id = 'coupon' name='coupon' value=''/></p>
                </form>
            </div>        
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <?php
            if(!$user){
            ?>
                <a href="../account/register.php" class="order-button">Order (Not Registered)</a>
                
            <?php
            }else{
            ?>
                <a href="../store/thankyou.html" class="order-button">Order</a>
            <?php
            }
            ?>
            <a href="../store/store_home.php" class="continue-button">Continue Shopping</a>
        </section>
    </main>
    <!-- End of body -->

    <!-- Footer -->
    <footer class="clearfix">
        <nav>
            <ul>
                <li><a href="../mall/copyright.html">Copyright</a> </li>
                <li><a href="../mall/termofservice.html">Term of service</a> </li>
                <li><a href="../mall/privatepolicy.html">Private Policy</a> </li>
            </ul>
        </nav>
    </footer>
    <!-- End of footer
</body>
</html>
