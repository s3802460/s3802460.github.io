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
        <div class="fee">
            <h3> Our services</h3>
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th>price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sevice 1</td>
                            <td>150$</td>
                        </tr>
                        <tr>
                            <td>Sevice 2</td>
                            <td>150$</td>
                        </tr>
                        <tr>
                            <td>Sevice 3</td>
                            <td>150$</td>
                        </tr>
                        <tr>
                            <td>Sevice 4</td>
                            <td>150$</td>
                        </tr>
                        <tr>
                            <td>Sevice 5</td>
                            <td>150$</td>
                        </tr>
                        <tr>
                            <td>Sevice 6</td>
                            <td>150$</td>
                        </tr>
                        <tr>
                            <td>Sevice 7</td>
                            <td>150$</td>
                        </tr>
                    </tbody>
                </table>
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