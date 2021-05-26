<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="utf-8">
    <title>My Account</title>
    <link rel="stylesheet" href="../css/mall/style.css">
	<style>
		@media screen and (min-width: 768px) {
			img {
				width: 160px;
				height: auto;
			}
		}
		@media screen and (max-width: 767px) {
			img {
				width: 140px;
				height: auto;
			}
		}
		img, label + img{
			float:left;
			margin-right: 30px;
			margin-top: 15px;
			margin-bottom: 15px;
		}
		div.ProfilePic{
			position: absolute;
			left: 150px;
		}
		div.UserInfo{
			position: relative;
			left: 150px;
		}
		main .ProfilePic img{
			width: 128px;
			height: 128px;
    	}
	</style>
	<?php 
		session_start();
		$user = $_SESSION["user"];

		if(!$user){
			header("Location: ../account/login.php");
		}else{
			$email = $user[0];
			$phone = $user[1];
			$avatar = $user[4];
			$first_name = $user[5];
			$last_name = $user[6];
			$address = $user[7];
			$city = $user[8];
			$country = $user[10];
			$account_type = $user[11];
		}
	?>
	<!-- <script>
		var checkLogin = function(){
			var myStorage = window.sessionStorage;
			let user = myStorage.getItem("user");	
			if (!user) {
				//redirect to login page
				location.replace("../account/login.php");
			}else{
				let parseUser = JSON.parse(user);
				document.getElementById("Name").innerHTML = parseUser.username;
				document.getElementById("Phone").innerHTML = parseUser.phone;
				document.getElementById("Email").innerHTML = parseUser.email;
				document.getElementById("avatar").src = parseUser.avatar;
			}
		};
		window.onload = function() {
			checkLogin();
		} 
	</script> -->
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
	<!-- End of Header -->

	<!-- Body -->
	<main>
  	<div>
		<div class="ProfilePic">
			<img src="<?php echo $avatar ?>" id="avatar" alt="Avatar" class="avatar"><br>
		</div>
		<div class="UserInfo">
			<div>
				<label for="email">First Name:</label>
				<span id="fname" name="fname"><?php echo $first_name ?></span>
				<br>
			</div>
			<div>
				<label for="email">Last Name:</label>
				<span id="fname" name="fname"><?php echo $last_name ?></span>
				<br>
			</div>
			<div>
				<label for="Email">Email Address:</label>
				<span id="Email"><?php echo $email ?></span>
				<br>
			</div>
			<div>
				<label for="Phone">Phone Number:</label>
				<span id="Phone" name="phone"><?php echo $phone ?></span>
				<br>
			</div>
			<div>
				<label for="address">Address:</label>
				<span id="address" name="address"><?php echo $address ?></span>
				<br>
			</div>
			<div>
				<label for="city">City:</label>
				<span id="city" name="city"><?php echo $city ?></span>
				<br>
			</div>
			<div>
				<label for="country">Country:</label>
				<span id="country" name="country"><?php echo $country ?></span>
				<br>
			</div>
			<div>
				<label for="acctype">Account Type:</label>
				<span id="acctype" name="acctype"><?php echo $account_type ?></span>
				<br>
			</div>
		</div>
	</div>
	</main>
	<!-- End of Body -->

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
	<!-- End of Footer -->	
	</body>
</html>