<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>
    <title>Login</title>    
    <link rel="stylesheet" href="../css/loginPage/login.css">
    <script src="../JavaScript/security/login.js">
    </script>
    <?php 
    ?>
</head>    
<body>    
    <h2>Login Page</h2><br>+
    <!--Body-->
    <main>  
        <div class="login">    
            <form id="login" method="post" onsubmit="return checkLogin();">
                <div>   
                <label><b>Username:     
                </b>    
                </label>    
                <input type="text" name="Uname" id="Uname" placeholder="admin || user2 || user3"><br><br>
                </div>
                <div>      
                <label><b>Password: </b></label>    
                <input type="Password" name="Pass" id="Pass" placeholder="Admin123! || User123!"><br><br>
                </div>
                <div>   
                <input type="submit" name="log" id="log" value="Log In"></a>
                <span id="incorrectAccount"></span>
                <br><br>
                </div>
                <div>         
                <input type="checkbox" id="check">    
                <label>Remember me</label>
                </div>
                <div>     
                <a href="../account/recover.html">Forgot Password?</a>
                <br><br>
                <a href="../account/register.html">Register</a>
                </div>     
            </form>     
        </div>
    </main>
    <!--End of Body-->      
</body>
</html>