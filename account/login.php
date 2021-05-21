<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>
    <title>Login</title>    
    <link rel="stylesheet" href="../css/loginPage/login.css">
    <?php
    $errorMessage = "";
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
       session_start();
       $username = "";
       $password = "";
       function clean_text($string){
            $string = trim($string);
            $string = stripslashes($string);
            $string = htmlspecialchars($string);
            return $string;
       }
       $loggedIn = false;
       $username = trim($_POST['Uname']);
       $password = trim($_POST['Pass']);
       if (!strlen($username) || !strlen($password)) {
            $errorMessage = "Please enter a username and password";
       }else{
            $userdata =  fopen("../csv/account/userdata.csv","r");
            while(($data = fgetcsv($userdata)) !== FALSE){
            
                if($data[2] == $username && $data [3] == $password){
                $_SESSION["user"] = $data;
                    $loggedIn = true;
                    break;
                }
            }
        fclose($userdata);
        if($loggedIn){
                header("Location: ../account/myaccount.php");
                exit();
        }else{
            $errorMessage = "Invalid username or Password";
        }
       }
        
    }
    ?>
</head>    
<body>    
    <h2>Login Page</h2><br>+
    <!--Body-->
    <main>  
        <div class="login">    
            <form id="login" method="post">
                <div>   
                <label><b>Username:     
                </b>    
                </label>    
                <input type="text" name="Uname" id="Uname" placeholder="admin || user2 || user3" value="admin"><br><br>
                </div>
                <div>      
                <label><b>Password: </b></label>    
                <input type="Password" name="Pass" id="Pass" placeholder="Admin123! || User123!" value="Admin123!"><br><br>
                </div>
                <div>   
                <input type="submit" name="log" id="log" value="Log In"></a>
                <span id="incorrectAccount"></span>
                <br><br>
                </div>
                <div>         
                <input type="checkbox" id="check">    
                <label>Remember me</label><br>
                <span id="error" name="errormsg"><?php echo $errorMessage ?></span>
                </div>
                <div>     
                <a href="../account/recover.html">Forgot Password?</a>
                <br><br>
                <a href="../account/register.php">Register</a>
                </div>     
            </form>     
        </div>
    </main>
    <!--End of Body-->      
</body>
</html>