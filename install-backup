<?php
if (isset($_REQUEST['sub'])) {
  // print "<pre>";
  // print_r($_REQUEST);
  // print "</pre>";
  $_SESSION['username'] = $_REQUEST['username'];
  $_SESSION['password'] = $_REQUEST['password'];
  $error_mess = array();
  if (empty($_REQUEST['username'])) {
    $error_mess['username'] = 'Username is require';
  }
  if (empty($_REQUEST['password'])) {
    $error_mess['password'] = 'Password is require';
  }else{
    if (empty($_REQUEST['re-password'])) {
      $error_mess['re-password'] = 'Re-password is require';
    }else{
      if (!$_REQUEST['password'] == $_REQUEST['re-password']) {
        $error_mess['re-password'] = 'Password not match';
      }
    }
  }

  if(empty($error_mess)){
    $admin_info = fopen('../admin_info.txt','w');
    fwrite($admin_info,$_SESSION['username']);
    fwrite($admin_info,'$$$$$$');
    fwrite($admin_info,password_hash($_SESSION['password'], PASSWORD_DEFAULT));
    fclose($admin_info);
    unlink('install.php');
    header('Location:'.'index.php');
    exit;
  }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Install</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <!-- <div class="shadow"> -->
      <div class="content">
        <p>Hi, This is your first time be here</p>
        <p>
          Please choose your <span>username and password</span> for the Admin
          account
        </p>
      </div>
      <div class="form">
        <form action="" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : '' ?>"/>
            <div class="error">
              <?php
              if (isset($error_mess['username'])) {
                print $error_mess['username'];
              };
              ?>
            </div>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : '' ?>"/>
            <div class="error">
              <?php
              if (isset($error_mess['password'])) {
                print $error_mess['password'];
              };
              ?>
            </div>
          </div>
          <div class="form-group">
            <label for="re-password">Re-password</label>
            <input type="password" name="re-password" />
            <div class="error">
              <?php
              if (isset($error_mess['re-password'])) {
                print $error_mess['re-password'];
              };
              ?>
            </div>
          </div>
          <button type="submit" name="sub">Create</button>
        </form>
      </div>
      <!-- </div> -->
      <!-- <div class="error">
        <?php
        if (isset($error_mess)) {
          foreach ($error_mess as $mess) {
        ?>
            <p>
              <?php
              print $mess;
              ?>
            </p>
        <?php
          };
        };
        ?>
      </div> -->
    </div>
  </div>
  <style>
    * {
      box-sizing: border-box;
    }

    .container {
      width: 100vw;
      height: 90vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .row {
      border-radius: 10px;
      width: 55%;
      height: 70%;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 12px 12px 30px 2px #25252585;
    }

    .row .error {
      font-size: 10px;
      font-family: Arial, Helvetica, sans-serif;
      margin-top: 5px;
      margin-left: 10px;
      color: crimson;
    }

    .row .content,
    .row .form {
      height: 100%;
      padding: 25px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    }

    .row .content {
      border-radius: 10px 0 0 10px;
      width: 60%;
      font-size: 32px;
      text-align: center;
      background-image: url(bg.jpg);
      color: whitesmoke;
    }

    .row .content span {
      color: rgb(5, 131, 114);
    }

    .row .form {
      width: 40%;
      align-items: flex-start;
      font-size: 20px;
    }

    .row .form .form-group {
      margin-bottom: 10px;
    }

    .row .form .form-group label {
      display: block;
      text-align: left;
      color: rgb(11, 65, 53);
    }

    .row .form .form-group input {
      padding: 10px 20px;
      margin-top: 5px;
      border-radius: 40px;
      width: 130%;
      outline: none;
      border: 0.5px solid rgba(14, 121, 76, 0.582);
    }

    .row .form button {
      font-size: 20px;
      margin-top: 20px;
      padding: 15px 40px;
      color: white;
      cursor: pointer;
      background: rgb(93, 196, 35);
      background: linear-gradient(55deg,
          rgba(93, 196, 35, 1) 0%,
          rgba(9, 121, 102, 1) 34%,
          rgba(0, 225, 255, 1) 100%);
      border: none;
      border-radius: 35px;
      transition: background 1s ease-in-out;
    }

    .row .form button:hover {
      background: rgb(249, 245, 15);
      background: linear-gradient(55deg,
          rgba(249, 245, 15, 1) 0%,
          rgba(93, 196, 35, 1) 22%,
          rgba(9, 121, 102, 1) 62%,
          rgba(0, 225, 255, 1) 100%);
    }
  </style>
</body>

</html>