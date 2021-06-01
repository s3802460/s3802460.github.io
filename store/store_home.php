<?php
// Start the session
session_start();
?>
<?php
include('fetch_data_storehome.php');
include('../fetch/find_item_base_on_id.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Home</title>
    <link rel="stylesheet" href="../css/mall/style.css">
    <style>
    	header{
    		background-color:#bedde6;
    	}
    </style>

</head>
  <body>
        <!-- Header -->
    <header class="clearfix">
      <div class="logo">
          <div class="hamburger"></div>
          <a href="#"><img src="../img/store/store1.jpg" alt="logo-store1">
      </div>
      <nav class="">
          <ul>
              <li><a href="#">Store Home</a></li>
              <li><a href="../index.php">Home</a></li>
              <li><a href="../mall/about.php">About us</a></li>
              <li>
                    <a href="#">Products</a>
                    <ul>
                        <li><a href="../store/browse_time.php?timelist=0&storeid=<?php echo $_SESSION['storeid']?>">Browse Products by Time Created</a></li>
                        <li><a href="../store/browse_Pcategory.html">Browse Products by Category</a></li>
                    </ul>
                </li>
              <li><a href="../mall/contact.html">Contact</a></li>
          </ul>
      </nav>
    </header>
        <!-- End of header -->

    <!-- Main Body-->
    <main>
      <div class="new-product">
          <h3>New Products</h3>
          	<div class="container">
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
		                </div>
		            </div>
		            <div class="item">
		                <h5>Nintendo Switch V2</h5>
		                <div class="img">
		                	<a href="../store/store1_p5.html">
		                    	<img src="../img/products/product10.jpg" alt="Nintendo Switch V2">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$400</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Nintendo Switch Mario Edition</h5>
		                <div class="img">
		                	<a href="../store/store1_p6.html">
		                    	<img src="../img/products/product11.jpg" alt="Nintendo Switch Mario Edition">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$450</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Nintendo Switch Animal Crossing</h5>
		                <div class="img">
		                	<a href="../store/store1_p7.html">
		                    	<img src="../img/products/product13.jpg" alt="Nintendo Switch Animal Crossing">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$450</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Nintendo Switch Lite</h5>
		                <div class="img">
		                	<a href="../store/store1_p8.html">
		                    	<img src="../img/products/product12.jpg" alt="Nintendo Switch Lite">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$250</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Xbox Series X</h5>
		                <div class="img">
		                	<a href="../store/store1_p9.html">
		                    	<img src="../img/products/product14.jpg" alt="Xbox Series X">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$500</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Xbox Series S</h5>
		                <div class="img">
		                	<a href="../store/store1_p10.html">
		                    	<img src="../img/products/product15.jpg" alt="Xbox Series S">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$300</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Xbox One 1TB</h5>
		                <div class="img">
		                	<a href="../store/store1_p11.html">
		                    	<img src="../img/products/product16.jpg" alt="Xbox One">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$200</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Xbox 360 Holiday Bundle</h5>
		                <div class="img">
		                	<a href="../store/store1_p12.html">
		                    	<img src="../img/products/product17.jpg" alt="Xbox 360 Holiday Bundle">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$200</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Outriders PS5</h5>
		                <div class="img">
		                	<a href="../store/store1_p13.html">
		                    	<img src="../img/products/product18.jpg" alt="Outriders PS5">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$60</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Marvel's Avengers PS5</h5>
		                <div class="img">
		                	<a href="../store/store1_p14.html">
		                    	<img src="../img/products/product19.jpg" alt="Marvel's Avengers PS5">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$60</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Assassin's Creed Valhalla PS5</h5>
		                <div class="img">
		                	<a href="../store/store1_p15.html">
		                    	<img src="../img/products/product20.jpg" alt="Assassin's Creed Valhalla PS5">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$60</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Demon Souls PS5</h5>
		                <div class="img">
		                	<a href="../store/store1_p16.html">
		                    	<img src="../img/products/product21.jpg" alt="Demon Souls PS5">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$60</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Monster Hunter Rise Switch</h5>
		                <div class="img">
		                	<a href="../store/store1_p17.html">
		                    	<img src="../img/products/product22.jpg" alt="Monster Hunter Rise Switch">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$60</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Super Mario Odyssey Switch</h5>
		                <div class="img">
		                	<a href="../store/store1_p18.html">
		                    	<img src="../img/products/product23.jpg" alt="Super Mario Odyssey Switch">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$60</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Zelda Breath of the Wild Switch</h5>
		                <div class="img">
		                	<a href="../store/store1_p19.html">
		                    	<img src="../img/products/product24.jpg" alt="Zelda Breath of the Wild Switch">
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="price">$60</div>
		                </div>
		            </div>
		            <div class="item">
		                <h5>Pokemon Sword Switch</h5>
		                <div class="img">
		                	<a href="../store/store1_p20.html">
		                    	<img src="../img/products/product25.jpg" alt="Pokemon Sword Switch">
		                    </a>
		                    </div>
		                <div class="content">
		                    <div class="price">$60</div>
		                </div>
		            </div>-->
                    <?php
                    foreach ($new_products5 as $new_product) {
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
                                <div class="price"><?php print $new_product[2]; ?>$</div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
	            </div>
       		</div>
        </div>
        <div class="featured-product">
            <h3>Featured Products</h3>
            <div class="container">
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
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Nintendo Switch V2</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p5.html">
	                        	<img src="../img/products/product10.jpg" alt="Nintendo Switch V2">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$400</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Nintendo Switch Mario Edition</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p6.html">
	                        	<img src="../img/products/product11.jpg" alt="Nintendo Switch Mario Edition">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$450</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Nintendo Switch Animal Crossing</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p7.html">
	                        	<img src="../img/products/product13.jpg" alt="Nintendo Switch Animal Crossing">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$450</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Nintendo Switch Lite</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p8.html">
	                        	<img src="../img/products/product12.jpg" alt="Nintendo Switch Lite">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$250</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Xbox Series X</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p9.html">
	                        	<img src="../img/products/product14.jpg" alt="Xbox Series X">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$500</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Xbox Series S</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p10.html">
	                        	<img src="../img/products/product15.jpg" alt="Xbox Series S">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$300</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Xbox One 1TB</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p11.html">
	                        	<img src="../img/products/product16.jpg" alt="Xbox One">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$200</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Xbox 360 Holiday Bundle</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p12.html">
	                        	<img src="../img/products/product17.jpg" alt="Xbox 360 Holiday Bundle">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$200</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Outriders PS5</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p13.html">
	                        	<img src="../img/products/product18.jpg" alt="Outriders PS5">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$60</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Marvel's Avengers PS5</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p14.html">
	                        	<img src="../img/products/product19.jpg" alt="Marvel's Avengers PS5">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$60</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Assassin's Creed Valhalla PS5</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p15.html">
	                        	<img src="../img/products/product20.jpg" alt="Assassin's Creed Valhalla PS5">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$60</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Demon Souls PS5</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p16.html">
	                        	<img src="../img/products/product21.jpg" alt="Demon Souls PS5">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$60</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Monster Hunter Rise Switch</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p17.html">
	                        	<img src="../img/products/product22.jpg" alt="Monster Hunter Rise Switch">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$60</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Super Mario Odyssey Switch</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p18.html">
	                        	<img src="../img/products/product23.jpg" alt="Super Mario Odyssey Switch">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$60</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Zelda Breath of the Wild Switch</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p19.html">
	                        	<img src="../img/products/product24.jpg" alt="Zelda Breath of the Wild Switch">
	                        </a>
	                    </div>
	                    <div class="content">
	                        <div class="price">$60</div>
	                    </div>
	                </div>
	                <div class="item">
	                    <h5>Pokemon Sword Switch</h5>
	                    <div class="img">
	                    	<a href="../store/store1_p20.html">
	                        	<img src="../img/products/product25.jpg" alt="Pokemon Sword Switch">
	                        </a>
		                    </div>
	                    <div class="content">
	                        <div class="price">$60</div>
	                    </div>
	                </div>-->
	                <?php
                    foreach ($featured_products_store as $featured_product) {
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
                            </div>
                        </div>
                    <?php
                    }
                    ?>
            	</div>
            </div>
        </div>
    </main>

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
    <!-- End of footer-->
  </body>
</html>