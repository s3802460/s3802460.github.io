
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
    <div id="dim"></div>
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
        <div class="our-group">
            <h3>Our group</h3>
            <div>
                <p style="text-indent: 10px;">
                    Welcome to Buyal, your number one source for all things .We're dedicated to providing you the best
                    of in
                    terms of pricing, with a focus on dependability. and customer service
                </p>
                <p style="text-indent: 10px;margin-top: 20px;">
                    We're working to turn our passion into a booming online store. We hope you enjoy our products as
                    much as
                    we enjoy offering them to you.

                </p>
                <p style="margin-top: 20px;">
                    Sincerely,

                    Phu, Long and Vu
                </p>
            </div>
        </div>
        <div class="members">
            <h3>Members</h3>
            <div class="row">
                <div class="member">
                    <img src="../img/member/Chan Dung.jpg" alt="member">
                    <div class="name">Pham Nguyen Vu</div>
                    <div class="role">Web Designer</div>
                    <div class="content">
                        An RMIT student with a passion for web programming. I have two years of experience in
                        programming and am able to use several programming languages ​​like Java and Python.</div>
                    <div class="back">
                        <div class="hidden">
                            An RMIT student with a passion for web programming. I have two years of experience in
                        programming and am able to use several programming languages ​​like Java and Python. Currently, I'm working on a capstone for NetCompany
                        about office climate monitoring.
                        </div>
                    </div>
                </div>
                <div class="member">
                    <img src="../img/member/mem2.jpg" alt="member">
                    <div class="name">Lieu Hoang Long</div>
                    <div class="content">Hi my name is Long and I have learnt about web programming before especially
                        php. I also have 4 years experience at java, c++ and python programming"?</div>
                    <div class="back">
                        <div class="hidden">
                            Hi my name is Long and I have learnt about web programming before especially
                            php. I also have 4 years experience at java, c++ and python programming"? I'm working hard on Web Project
                        </div>
                    </div>
                </div>
                <div class="member">
                    <img src="../img/member/mem3.jpg" alt="member">
                    <div class="name">Nguyen Minh Phu</div>
                    <div class="content">Hi i am Phu and I am proficient in six coding languages: Python, JavaScript,
                        Java, C++, CSS and HTML. I am also a quick learner and am passionate about coding. When I began
                        coding at my first job, I was working on a landing page in a CMS editor and realized no one at
                        the company knew how to code in CSS. I taught myself CSS by researching the topic online. It’s
                        because of my desire to learn that I was able to complete the project successfully. The landing
                        page went up ahead of the deadline.”</div>

                    <div class="back">
                        <div class="hidden">
                            Hi i am Phu and I am proficient in six coding languages: Python, JavaScript,
                            Java, C++, CSS and HTML. I am also a quick learner and am passionate about coding. When I began
                            coding at my first job, I was working on a landing page in a CMS editor and realized no one at
                            the company knew how to code in CSS. I taught myself CSS by researching the topic online. It’s
                            because of my desire to learn that I was able to complete the project successfully. The landing
                            page went up ahead of the deadline. For this semester, I'm learning Web Programming, Software Engineer
                            Project Management and User Center Design.
                        </div>
                    </div>
                </div>
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