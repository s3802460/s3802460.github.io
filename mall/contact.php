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
    <script src="../JavaScript/mall/counter.js">
        function counter(){}
    </script>
    <script src="../JavaScript/security/validation.js">
        function validateEmail(){}
        function validatePhone(){}
    </script>
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
        <div class="contact">
            <h3>Contact</h3>
            <form action="#">
                <div>
                    <label for="">Contact purpose</label>
                    <select name="purpose" id="">
                        <option value="0">Account and privacy</option>
                        <option value="1">Return and Refund</option>
                        <option value="2">Payment</option>
                        <option value="3">Feedback</option>
                        <option value="4">Report a store</option>
                        <option value="5">Others</option>
                    </select>
                </div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" placeholder="Enter name" id="name" required minlength="3">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" placeholder="Enter email" required id="email" onkeyup="validateEmail();">
                    <br>
                    <span id="validEmail"></span>
                </div>
                <div>
                    <label for="name">Phone</label>
                    <input type="text" placeholder="Enter phone" required id="phone" onkeyup="validatePhone();">
                    <br>
                    <span id="validPhone"></span>
                </div>
                <div>
                    <label for="contact">Preferred contact method</label>
                    <div>
                        <input type="radio" value="0" name="contact_method">
                        <span>Email</span>
                    </div>
                    <div>
                        <input type="radio" value="1" name="contact_method">
                        <span>Phone</span>
                    </div>
                </div>
                <div>
                    <label for="Day">Contact days</label>
                    <div>
                        <input type="checkbox" value="1" name="day">
                        <span>Monday</span>
                    </div>
                    <div>
                        <input type="checkbox" value="2" name="day">
                        <span>Tuesday</span>
                    </div>
                    <div>
                        <input type="checkbox" value="3" name="day">
                        <span>Wednesday</span>
                    </div>
                    <div>
                        <input type="checkbox" value="4" name="day">
                        <span>Thursday</span>
                    </div>
                    <div>
                        <input type="checkbox" value="5" name="day">
                        <span>Friday</span>
                    </div>
                    <div>
                        <input type="checkbox" value="6" name="day">
                        <span>Saturday</span>
                    </div>
                    <div>
                        <input type="checkbox" value="7" name="day">
                        <span>Sunday</span>
                    </div>
                    
                </div>
                <div>
                    <label for="mesage">Message</label>
                    <div class="mes">
                        <textarea name="message" id="messagebox" placeholder="Your message..." cols="150" rows="10" 
                        maxlength="500" onkeyup="counter();"></textarea>
                        <br>
                    </div>
                    <span id="countChars"></span>
                </div>
                <div>
                    <button type="reset">Clear</button>
                    <button type="submit">Send</button>
                </div>
            </form>
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
