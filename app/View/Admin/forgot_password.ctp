<html>
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <title>CLAP - Reset Password</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $this->webroot;?>css/bootstrap.min.css">
  <link rel="shortcut icon" href="<?php echo $this->webroot;?>ico/fav.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->webroot;?>ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->webroot;?>ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->webroot;?>ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo $this->webroot;?>ico/apple-touch-icon-57-precomposed.png">
  <style>
    a:link{text-decoration: none;}
    a:hover{text-decoration: none;}
    a:active{text-decoration: none;}
    a:visited{text-decoration: none;}
    img{border: 0px none;}
    .form-signin
    {
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
    }
    .form-signin .form-signin-heading, .form-signin .checkbox
    {
      margin-bottom: 10px;
    }
    .form-signin .checkbox
    {
      font-weight: normal;
    }
    .form-signin .form-control
    {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
    .form-signin .form-control:focus
    {
      z-index: 2;
    }
    .form-signin input[type="text"]
    {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }
    .form-signin input[type="password"]
    {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    .account-wall
    {
      margin-top: 20px;
      padding: 40px 0px 20px 0px;
      background-color: #f7f7f7;
      -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }
    .login-title
    {
      color: #555;
      font-size: 18px;
      font-weight: 400;
      display: block;
    }
    .profile-img
    {
      width: 96px;
      height: 96px;
      margin: 0 auto 10px;
      display: block;
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%;
      border-radius: 50%;
    }
    .forgot-password
    {
      margin-top: 10px;
    }
    .new-account
    {
      display: block;
      margin-top: 10px;
    }
    button{
      border-radius: 5px;
      border: none;
      padding: 0;
      width: 120px;
      height: 40px;
      color:white;
      background-color:#4CAF50;

    }
    button:hover{

      background-color:#64DD17;
    }
  </style>
</head>
<body style="font-family: 'Open Sans', sans-serif; text-align: center; font-weight: 200; background-color:#f5f5f5;">

  <div style="max-width: 500px; width: 100%; margin: 0px auto; padding: 1.5em; margin-top:3em; color: #343434; box-sizing: border-box; background-color:white; border-radius: 3px; -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); text-align: center;">

  <!-- <div class="account-wall">-->
  <img  src="<?php echo $this->webroot;?>img/162by36.png" alt=""><br>
  <br>
  <form class="form-signin form-horizontal" method="post" action="<?php echo $this->webroot;?>admin/forgotPassword">
    <?php $errorReg = $this->Flash->render('errorEmailNotReg'); ?>
<?php $error = $this->Flash->render('errorEmail'); ?>
<?php $success = $this->Flash->render('successEmail'); ?>
<?php if(isset($error)){
  echo "<div class='alert alert-danger alert-dismissable'>";
    echo "<p>$error</p>";
    echo "</div>";
    }?>
    <?php if(isset($errorReg)){
  echo "<div class='alert alert-danger alert-dismissable'>";
    echo "<p>$errorReg</p>";
    echo "</div>";
    }?>
<?php if(isset($success)){
  echo "<div class='alert alert-success alert-dismissable'>";
    echo "<p>$success</p>";
    echo "</div>";
    }?>
<input type="email" class="form-control" name="data[Admin][email]" placeholder="Email" required autofocus><br>
<center> <button class="btn btn-lg btn-primary btn-block" type="submit">
  Reset</button></center>
</form>
</div>
</div><br><br><br>

<p> Powered By <a href='http://www.playspread.com'>PlaySpread</a></p>
</body>

</html>