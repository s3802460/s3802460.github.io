<?php
// Start the session
session_start();
?>
<?php
include('check_install.php');
include('fetch/fetch_data.php');
include('fetch/find_item_base_on_id.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mall home</title>
    <link rel="stylesheet" href="css/mall/style.css">
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
            <a href="index.php"><img src="img/logo.png" alt="logo"></a>
        </div>
        <nav class="">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="mall/about.php">About us</a></li>
                <li><a href="mall/fees.php">Fees</a></li>
                <li><a href="account/myaccount.php">My Account</a></li>
                <li>
                    <a href="#">Browse</a>
                    <ul>
                        <li><a href="mall/browse_name.php">Browse Stores by Name</a></li>
                        <li><a href="mall/browse_catagory.php">Browse Stores by Category</a></li>
                    </ul>
                </li>
                <li><a href="mall/faq.php">FAQs</a></li>
                <li><a href="mall/contact.php">Contact</a></li>
                <li><a href="account/login.php">Login</a></li>
                <li><a href="account/register.php">Register</a></li>
            </ul>
        </nav>
    </header>
    <!-- End of header -->

    <!-- Body -->
    <main>
        <div class="new-store">
            <h3>New store</h3>
            <div class="container">
                <div class="row">
                    <!-- <div class="item">
                        <div class="logo">
                            <a href="store/store_home.php">
                                <img src="img/store/store1.jpg" alt="logo">
                            </a>
                        </div>
                        <div class="content">
                            <a href="store/store_home.php">
                                <h5>Player1</h5>
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="item">
                        <div class="logo">
                            <a href="store2/store_home2.php">
                                <img src="img/store/store2.jpg" alt="logo">
                            </a>
                        </div>
                        <div class="content">
                            <a href="store2/store_home2.php">
                                <h5>Tee</h5>
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="item">
                        <div class="logo">
                            <a href="#">
                                <img src="img/store/store3.jpg" alt="logo">
                            </a>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5>Store 3</h5>
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="item">
                        <div class="logo">
                            <a href="#">
                                <img src="img/store/store4.jpg" alt="logo">
                            </a>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5>Store 4</h5>
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="item">
                        <div class="logo">
                            <a href="#">
                                <img src="img/store/store5.jpg" alt="logo">
                            </a>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5>Store 5</h5>
                            </a>
                        </div>
                    </div> -->
                    <?php
                    foreach ($new_stores as $new_store) {
                    ?>
                        <div class="item">
                            <div class="logo">
                                <a href="#store_link">
                                    <img src="#img_store_link" alt="logo_store">
                                </a>
                            </div>
                            <div class="content">
                                <a href="store/store_home.php?storeid=<?php echo $new_store[0]; ?>">
                                    <h5>
                                        <?php
                                        print $new_store[1];
                                        $_SESSION['storeid'] = $new_store[0];
                                        ?>
                                    </h5>
                                </a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="new-product">
            <h3>New products</h3>
            <div class="container">
                <div class="row">
                    <!-- <div class="item">
                        <h5>PS5-Standard Edition</h5>
                        <div class="img">
                            <a href="store/store1_p1.php">
                                <img src="img/products/product1.jpg" alt="PS5-Standard Edition">
                            </a>
                        </div>
                        <div class="content">
                            <div class="price">$500</div>
                            <div class="store"><a href="store/store_home.php">Player1</a> </div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>N1-Nike Sportwear</h5>
                        <div class="img">
                            <a href="store/store2_p1.php">
                                <img src="img/products/product2.jpg" alt="N1-Nike Sportwear">
                            </a>
                        </div>
                        <div class="content">
                            <div class="price">50$</div>
                            <div class="store"><a href="store/store_home2.php">Tee</a> </div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Product 3</h5>
                        <div class="img">
                            <img src="img/products/product3.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="price">15$</div>
                            <div class="store"><a href="#">store 3</a> </div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Product 4</h5>
                        <div class="img">
                            <img src="img/products/product4.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="price">15$</div>
                            <div class="store"><a href="#">store 4</a> </div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>PS5-Digital Edition</h5>
                        <div class="img">
                            <a href="store/store1_p2.php">
                                <img src="img/products/product5.jpg" alt="PS5-Digital Edition">
                            </a>
                        </div>
                        <div class="content">
                            <div class="price">$400</div>
                            <div class="store"><a href="store/store_home.php">Player1</a> </div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Product 6</h5>
                        <div class="img">
                            <img src="img/products/product6.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="price">15$</div>
                            <div class="store"><a href="#">store 5</a> </div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>PS4 Pro 1TB Black</h5>
                        <div class="img">
                            <a href="store/store1_p3.php">
                                <img src="img/products/product7.jpg" alt="PS4 Pro 1TB Black">
                            </a>
                        </div>
                        <div class="content">
                            <div class="price">$400</div>
                            <div class="store"><a href="store/store_home.php">Player1</a> </div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Product 8</h5>
                        <div class="img">
                            <img src="img/products/product8.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="price">15$</div>
                            <div class="store"><a href="#">store 8</a> </div>
                        </div>
                    </div> -->
                    <?php
                    foreach ($new_products as $new_product) {
                    ?>
                        <div class="item">
                            <a href="../store/store1_p1.php?productid=<?php echo $new_product[0]; ?>">
                                <h5>
                                    <?php print $new_product[1];
                                    $_SESSION['productid'] = $new_product[0]; 
                                    ?>
                                </h5>
                            </a>
                            <div class="img">
                                <img src="#new_product_logo_img" alt="new_product_logo">
                            </div>
                            <div class="content">
                                <div class="price"><?php print $new_product[2]; ?>$</div>
                                <div class="store"><a href="#">
                                        <?php
                                        $s = findItemBaseOnId($stores, $new_product[4]);
                                        print $s[1];
                                        ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="featured-store">
            <h3>Featured store</h3>
            <div class="container">
                <div class="row">
                    <!-- <div class="item">
                        <div class="logo">
                            <a href="store/store_home.php">
                                <img src="img/store/store1.jpg" alt="logo">
                            </a>
                        </div>
                        <div class="content">
                            <a href="store/store_home.php">
                                <h5>Player1</h5>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <a href="store2/store_home2.php">
                                <img src="img/store/store2.jpg" alt="logo">
                            </a>
                        </div>
                        <div class="content">
                            <a href="store2/store_home2.php">
                                <h5>Tee</h5>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <a href="#">
                                <img src="img/store/store3.jpg" alt="logo">
                            </a>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5>Store 3</h5>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <a href="#">
                                <img src="img/store/store4.jpg" alt="logo">
                            </a>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5>Store 4</h5>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo">
                            <a href="#">
                                <img src="img/store/store5.jpg" alt="logo">
                            </a>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5>Store 5</h5>
                            </a>
                        </div>
                    </div> -->
                    <?php
                    foreach ($featured_stores as $featured_store) {
                    ?>
                        <div class="item">
                            <div class="logo">
                                <a href="#featured_store_logo">
                                    <img src="#featured_store_logo_img" alt="featured_store_logo">
                                </a>
                            </div>
                            <div class="content">
                                <a href="store/store_home.php?storeid=<?php echo $new_store[0]; ?>">
                                    <h5>
                                        <?php
                                        print $featured_store[1];
                                        ?>
                                    </h5>
                                </a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="featured-product">
            <h3>Features products</h3>
            <div class="container">
                <div class="row">
                    <!-- <div class="item">
                        <h5>PS5-Standard Edition</h5>
                        <div class="img">
                            <a href="store/store1_p1.php">
                                <img src="img/products/product1.jpg" alt="PS5-Standard Edition">
                            </a>
                        </div>
                        <div class="content">
                            <div class="price">$500</div>
                            <div class="store"><a href="store/store_home.php">Player1</a> </div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>N1-Nike Sportwear</h5>
                        <div class="img">
                            <img src="img/products/product2.jpg" alt="N1-Nike Sportwear">
                        </div>
                        <div class="content">
                            <div class="price">50$</div>
                            <div class="store"><a href="store2/store_home2.php">Tee</a> </div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Product 3</h5>
                        <div class="img">
                            <img src="img/products/product3.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="price">15$</div>
                            <div class="store"><a href="#">store 3</a> </div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Product 4</h5>
                        <div class="img">
                            <img src="img/products/product4.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="price">15$</div>
                            <div class="store"><a href="#">store 4</a> </div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>PS5-Digital Edition</h5>
                        <div class="img">
                            <a href="store/store1_p2.php">
                                <img src="img/products/product5.jpg" alt="PS5-Digital Edition">
                            </a>
                        </div>
                        <div class="content">
                            <div class="price">$400</div>
                            <div class="store"><a href="store/store_home.php">Player1</a> </div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Product 6</h5>
                        <div class="img">
                            <img src="img/products/product6.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="price">15$</div>
                            <div class="store"><a href="#">store 5</a> </div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>PS4 Pro 1TB Black</h5>
                        <div class="img">
                            <a href="store/store1_p3.php">
                                <img src="img/products/product7.jpg" alt="PS4 Pro 1TB Black">
                            </a>
                        </div>
                        <div class="content">
                            <div class="price">15$</div>
                            <div class="store"><a href="store/store_home.php">Player1</a> </div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Product 8</h5>
                        <div class="img">
                            <img src="img/products/product8.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="price">15$</div>
                            <div class="store"><a href="#">store 8</a> </div>
                        </div>
                    </div> -->
                    <?php
                    foreach ($featured_products as $featured_product) {
                    ?>
                        <div class="item">
                            <a href="../store/store1_p1.php?productid=<?php echo $new_product[0]; ?>">
                                <h5>
                                    <?php print $new_product[1];
                                    $_SESSION['productid'] = $new_product[0]; 
                                    ?>
                                </h5>
                            </a>
                            <div class="img">
                                <img src="#featured_product_logo_img" alt="featured_product_logo">
                            </div>
                            <div class="content">
                                <div class="price"><?php print $featured_product[2]; ?>$</div>
                                <div class="store"><a href="#">
                                        <?php
                                        $s = findItemBaseOnId($stores, $featured_product[4]);
                                        print $s[1];
                                        ?>
                                    </a> 
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </main>
    <!-- End of body -->

    <!-- Footer -->
    <footer class="clearfix">
        <nav>
            <ul>
                <li><a href="mall/copyright.php">Copyright</a> </li>
                <li><a href="mall/termofservice.php">Term of service</a> </li>
                <li><a href="mall/privatepolicy.php">Private Policy</a> </li>
            </ul>
        </nav>
    </footer>
    <!-- End of footer -->

    <!-- Notification -->
    <!-- <div class="notification">
        <h1>I use cookies</h1>
        <p>My website use coookies necessary for its basic functioning. By continuing browsing, you consent to my use of cookies and other technologies</p>
        <a href="javascript:void(0)" id="accept" onclick="">I understand</a>
        <a href="javascript:void(0)" id="learn-more">Learn more</a>
    </div> -->
    <script src="JavaScript/mall/main.js"></script>
    <script src="JavaScript/mall/loop.js"></script>
</body>

</html>