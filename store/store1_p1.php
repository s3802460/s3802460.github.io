<?php
// Start the session
session_start();
?>
<?php
include('../fetch/find_item_base_on_id.php');
include('look_up_product_info.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Home</title>
    <link rel="stylesheet" href="../css/mall/style.css">
    <script src="../JavaScript/getdata.js"></script>
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
            <a href="../index.html"><img src="../img/logo.png" alt="logo"></a>
        </div>
        <nav class="">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../mall/about.php">About us</a></li>
                <li><a href="../mall/fees.php">Fees</a></li>
                <li><a href="../account/myaccount.php">My Account</a></li>
                <li>
                    <a href="#">Browse</a>
                    <ul>
                        <li><a href="../mall/browse_name.php">Browse Stores by Name</a></li>
                        <li><a href="../mall/browse_catagory.php">Browse Stores by Category</a></li>
                    </ul>
                </li>
                <li><a href="../mall/faq.php">FAQs</a></li>
                <li><a href="../mall/contact.php">Contact</a></li>
                 <li><a href="../account/login.php">Login</a></li>
                <li><a href="../account/register.php">Register</a></li>
            </ul>
        </nav>
    </header>
    <!-- End of header -->

    <!-- Main Body-->
    <main>
      <div class="product-page">
          <div class ="product-page-img">
            <img class="image-feature" src="../img/products/product1.jpg" alt="Product 1">
          </div>
          <div class ="product-detail">
            <h1 class='product-title'><?php print $productpage[1];?></h1>
            <h2 class='product-price'>$<?php print $productpage[2];?></h2>
            <a href="#" class="add-button">Add To Cart</a>
            <a href="../store/mycart.php" class="buy-button">Buy Now</a>
            <div>
                <p>Description</p>
            </div>
            <p>-Lightning Speed - Harness the power of a custom CPU, GPU, and SSD with Integrated I/O that rewrite the rules of what a PlayStation console can do. <br>-Stunning Games - Marvel at incredible graphics and experience new PS5 features. <br>-Breathtaking Immersion - Discover a deeper gaming experience with support for haptic feedback, adaptive triggers, and 3D Audio technology.</p>
          </div>
      </div>
      <div class="featured-product">
            <h3>Recommended Products</h3>
            <div class="row">
                <!--<div class="item">
                    <h5>PS5-Standard Edition</h5>
                    <div class="img">
                        <a href="../store/store1_p1.html">
                        <img src="../img/products/product1.jpg" alt="PS5-Standard Edition">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$500</div>
                        <div class="store"><a href="#">store 1</a> </div>
                    </div>
                </div>
                <div class="item">
                    <h5>PS5-Digital Edition</h5>
                    <div class="img">
                        <a href="../store/store1_p2.html">
                        <img src="../img/products/product5.jpg" alt="PS5-Digital Edition">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$400</div>
                        <div class="store"><a href="#">store 1</a> </div>
                    </div>
                </div>
                <div class="item">
                    <h5>PS4 Pro 1TB Black</h5>
                    <div class="img">
                        <a href="../store/store1_p3.html">
                        <img src="../img/products/product7.jpg" alt="PS4 Pro 1TB Black">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$400</div>
                        <div class="store"><a href="#">store 1</a> </div>
                    </div>
                </div>
                <div class="item">
                    <h5>PS4 Slim 1TB</h5>
                    <div class="img">
                        <a href="../store/store1_p4.html">
                        <img src="../img/products/product9.jpg" alt="PS4 Slim 1TB">
                        </a>
                    </div>
                    <div class="content">
                        <div class="price">$350</div>
                        <div class="store"><a href="#">store 1</a> </div>
                    </div>
                </div>-->
                <?php
                foreach ($new_products5 as $new_product) {
                ?>
                    <div class="item">
                        <a href="store/store_home.php?productid=<?php echo $new_product[0]; ?>">
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
                            <div class="price"><?php print $new_product[2]; ?>$</div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>

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

    <!-- End of footer-->
    
  </body>
</html>