<?php
include('../check_install.php');
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
        <div class="question">
            <form action="#">
                <label for="question">Ask me question</label>
                <input type="text" placeholder="Ask me somethings">
            </form>
        </div>
        <div>
            <h3>General</h3>
            <div><span>1.</span> <a href="#">Question 1?</a> </div>
            <div><span>2.</span> <a href="#">Question 2?</a> </div>
            <div><span>3.</span> <a href="#">Question 3?</a> </div>
        </div>
        <div>
            <h3>Our services</h3>
            <div><span>1.</span> <a href="#">Question 1?</a> </div>
            <div><span>2.</span> <a href="#">Question 2?</a> </div>
            <div><span>3.</span> <a href="#">Question 3?</a> </div>
            <div><span>4.</span> <a href="#">Question 4?</a> </div>
            <div><span>5.</span> <a href="#">Question 5?</a> </div>
            <div><span>6.</span> <a href="#">Question 6?</a> </div>
        </div>
        <div>
            <h3>Our store</h3>
            <div><span>1.</span> <a href="#">Question 1?</a> </div>
            <div><span>2.</span> <a href="#">Question 2?</a> </div>
            <div><span>3.</span> <a href="#">Question 3?</a> </div>
            <div><span>4.</span> <a href="#">Question 4?</a> </div>
            <div><span>5.</span> <a href="#">Question 5?</a> </div>
            <div><span>6.</span> <a href="#">Question 6?</a> </div>
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