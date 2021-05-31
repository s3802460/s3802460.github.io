<?php
include('../check_install.php');
include('../fetch/browse_by_category.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mall home</title>
    <link rel="stylesheet" href="../css/mall/style.css">
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
            <a href="../index.php"><img src="../img/logo.png" alt="logo"></a>
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

    <!-- Body -->
    <main>
        <div>
            <label for="list">Category</label>
            <form method ="GET" action="#">
                <select name="list" id="list">
                    <!--<option value="0">Category 1</option>
                    <option value="1">Category 2</option>
                    <option value="2">Category 3</option>
                    <option value="3">Category 4</option>
                    <option value="4">Category 5</option>
                    <option value="5">Category 6</option>-->
                    <?php
                    foreach ($category as $cate) {
                    ?>
                    <option value="<?php echo $cate[0]; ?>"><?php echo $cate[1]; ?></option>
                    <?php
                    }
                    ?>
                </select>
                <button type="submit">Filter</button>
            </form>
        </div>
        <div class="store">
            <div class="row">
                <!--<div class="item">
                    <div class="logo">
                        <a href="../store/store_home.php">
                            <img src="../img/store/store1.jpg" alt="logo">
                        </a>
                    </div>
                    <div class="content">
                        <a href="../store/store_home.php">
                            <h5>Player1</h5>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="logo">
                        <a href="../store2/store_home2.html">
                            <img src="../img/store/store2.jpg" alt="logo">
                        </a>
                    </div>
                    <div class="content">
                        <a href="../store2/store_home2.html">
                            <h5>Tee</h5>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="logo">
                        <a href="#">
                            <img src="../img/store/store3.jpg" alt="logo">
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
                            <img src="../img/store/store4.jpg" alt="logo">
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
                            <img src="../img/store/store5.jpg" alt="logo">
                        </a>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Store 5</h5>
                        </a>
                    </div>
                </div>-->
                <?php
                foreach ($stores_sorted as $sorted_store) {
                ?>
                    <div class="item">
                        <div class="logo">
                            <a href="#store_link">
                                <img src="#img_store_link" alt="logo_store">
                            </a>
                        </div>
                        <div class="content">
                            <a href="store/store_home.php?storeid=<?php echo $sorted_store[0]; ?>">
                                <h5>
                                    <?php
                                    print $sorted_store[1];
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
    </main>
    <!-- End of body -->

    <!-- Footer -->
    <footer class="clearfix">
        <nav>
            <ul>
                <li><a href="../mall/copyright.php">Copyright</a> </li>
                <li><a href="../mall/termofservice.php">Term of service</a> </li>
                <li><a href="../mall/privatepolicy.php">Private Policy</a> </li>
            </ul>
        </nav>
    </footer>
    <!-- <!-- End of footer -->
    <script src="../JavaScript/mall/main.js"></script>
</body>
</html>