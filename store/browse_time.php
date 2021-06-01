<?php
// Start the session
session_start();
?>
<?php
include('../fetch/browse_by_created_time.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mall home</title>
    <link rel="stylesheet" href="../css/mall/style.css">
    <style>
        header{
            background-color: #bedde6;
        }
    </style>
</head>
<body>
    <!-- Header -->
<header class="clearfix">
      <div class="logo">
          <div class="hamburger"></div>
          <a href="../store/store_home.php"><img src="../img/store/store1.jpg" alt="logo-store1">
      </div>
      <nav class="">
          <ul>
              <li><a href="../store/store_home.php">Store Home</a></li>
              <li><a href="../index.php">Home</a></li>
              <li><a href="../mall/about.php">About us</a></li>
              <li>
                    <a href="#">Products</a>
                    <ul>
                        <li><a href="../store/browse_time.php?page=1">Browse Products by Time Created</a></li>
                        <li><a href="../store/browse_Pcategory.html">Browse Products by Category</a></li>
                    </ul>
                </li>
              <li><a href="../mall/contact.html">Contact</a></li>
          </ul>
      </nav>
    </header>
    <!-- End of header -->

    <!-- Body -->
    <main>
        <div>
            <label for="list">Category</label>
            <form method ="GET" action="">
                <select name="timelist" id="timelist">
                    <option value="0">Newest First</option>
                    <option value="1">Oldest First</option>
                </select>
                <button type="submit">Filter</button>
            </form>
        </div>
        <div class="new-product">
            <div class="container">
                <div class="row">
                    <!--<div class="item">
                        <h5>PS5-Standard Edition</h5>
                        <div class="img">
                            <img src="../img/products/product1.jpg" alt="PS5-Standard Edition">
                        </div>
                        <div class="content">
                            <div class="price">$500</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>PS5-Digital Edition</h5>
                        <div class="img">
                            <img src="../img/products/product5.jpg" alt="PS5-Digital Edition">
                        </div>
                        <div class="content">
                            <div class="price">$400</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>PS4 Pro 1TB Black</h5>
                        <div class="img">
                            <img src="../img/products/product7.jpg" alt="PS4 Pro 1TB Black">
                        </div>
                        <div class="content">
                            <div class="price">$400</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>PS4 Slim 1TB</h5>
                        <div class="img">
                            <img src="../img/products/product9.jpg" alt="PS4 Slim 1TB">
                        </div>
                        <div class="content">
                            <div class="price">$350</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Nintendo Switch V2</h5>
                        <div class="img">
                            <img src="../img/products/product10.jpg" alt="Nintendo Switch V2">
                        </div>
                        <div class="content">
                            <div class="price">$400</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Nintendo Switch Mario Edition</h5>
                        <div class="img">
                            <img src="../img/products/product11.jpg" alt="Nintendo Switch Mario Edition">
                        </div>
                        <div class="content">
                            <div class="price">$450</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Nintendo Switch Animal Crossing</h5>
                        <div class="img">
                            <img src="../img/products/product13.jpg" alt="Nintendo Switch Animal Crossing">
                        </div>
                        <div class="content">
                            <div class="price">$450</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Nintendo Switch Lite</h5>
                        <div class="img">
                            <img src="../img/products/product12.jpg" alt="Nintendo Switch Lite">
                        </div>
                        <div class="content">
                            <div class="price">$250</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Xbox Series X</h5>
                        <div class="img">
                            <img src="../img/products/product14.jpg" alt="Xbox Series X">
                        </div>
                        <div class="content">
                            <div class="price">$500</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Xbox Series S</h5>
                        <div class="img">
                            <img src="../img/products/product15.jpg" alt="Xbox Series S">
                        </div>
                        <div class="content">
                            <div class="price">$300</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Xbox One 1TB</h5>
                        <div class="img">
                            <img src="../img/products/product16.jpg" alt="Xbox One">
                        </div>
                        <div class="content">
                            <div class="price">$200</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Xbox 360 Holiday Bundle</h5>
                        <div class="img">
                            <img src="../img/products/product17.jpg" alt="Xbox 360 Holiday Bundle">
                        </div>
                        <div class="content">
                            <div class="price">$200</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Outriders PS5</h5>
                        <div class="img">
                            <img src="../img/products/product18.jpg" alt="Outriders PS5">
                        </div>
                        <div class="content">
                            <div class="price">$60</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Marvel's Avengers PS5</h5>
                        <div class="img">
                            <img src="../img/products/product19.jpg" alt="Marvel's Avengers PS5">
                        </div>
                        <div class="content">
                            <div class="price">$60</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Assassin's Creed Valhalla PS5</h5>
                        <div class="img">
                            <img src="../img/products/product20.jpg" alt="Assassin's Creed Valhalla PS5">
                        </div>
                        <div class="content">
                            <div class="price">$60</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Demon Souls PS5</h5>
                        <div class="img">
                            <img src="../img/products/product21.jpg" alt="Demon Souls PS5">
                        </div>
                        <div class="content">
                            <div class="price">$60</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Monster Hunter Rise Switch</h5>
                        <div class="img">
                            <img src="../img/products/product22.jpg" alt="Monster Hunter Rise Switch">
                        </div>
                        <div class="content">
                            <div class="price">$60</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Super Mario Odyssey Switch</h5>
                        <div class="img">
                            <img src="../img/products/product23.jpg" alt="Super Mario Odyssey Switch">
                        </div>
                        <div class="content">
                            <div class="price">$60</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Zelda Breath of the Wild Switch</h5>
                        <div class="img">
                            <img src="../img/products/product24.jpg" alt="Zelda Breath of the Wild Switch">
                        </div>
                        <div class="content">
                            <div class="price">$60</div>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Pokemon Sword Switch</h5>
                        <div class="img">
                            <img src="../img/products/product25.jpg" alt="Pokemon Sword Switch">
                        </div>
                        <div class="content">
                            <div class="price">$60</div>
                        </div>
                    </div>-->
                    <?php
                    foreach ($sorted_products as $new_product) {
                    ?>
                        <div class="item">
                            <h5><?php print $new_product[1]; ?></h5>
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
        </div>
    </main>
    <!-- End of body -->

    <!-- Footer -->
    <footer class="store1">
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