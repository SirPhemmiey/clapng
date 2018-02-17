<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transporters Log In</title> 
    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500"> -->
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/font-awesome.min.css">
<link href="<?php echo $this->webroot;?>css/animate.min.css" rel="stylesheet">
<link href="<?php echo $this->webroot;?>css/jquery.iphone.toggle.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/form-elements.css">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/login_logout.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Favicon and touch icons -->
<link rel="shortcut icon" href="<?php echo $this->webroot;?>ico/fav.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->webroot;?>ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->webroot;?>ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->webroot;?>ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo $this->webroot;?>ico/apple-touch-icon-57-precomposed.png">

<style>
body {
margin-top: 50px;
margin-bottom: 50px;
background: url("<?php echo $this->webroot;?>img/1.jpg") no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
.panel-default {
opacity: .9;
margin-top:-50px;
}
.form-group.last { margin-bottom:0px; }
  </style>
  </head>
  <body>
<div class="container">
<div class="row">
<div class="col-md-7" style = "margin-top:90px;">
<div class="panel panel-default">
<div class="page-header">
<h1 style = "margin-left:30px;">Log in!</h1>
</div>
<div class="panel-body">
<form method="post" action="<?php echo $this->webroot;?>transporters/login" class="form-horizontal" role="form">
<?php $error = $this->Flash->render('loginError'); ?>
<?php $auth = $this->Flash->render('loginAuth'); ?>
<?php $logout = $this->Flash->render('loginOut'); ?>
<?php if(isset($error)){
  echo "<div class='alert alert-danger alert-dismissable'>";
    echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
    echo "<p>$error</p>";
    echo "</div>";
    }?>
<?php if(isset($auth)){
  echo "<div class='alert alert-danger alert-dismissable'>";
    echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
    echo "<p>$auth</p>";
    echo "</div>";
    }?>
    <?php if(isset($logout)){
  echo "<div class='alert alert-success alert-dismissable'>";
    echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
    echo "<p>$logout</p>";
    echo "</div>";
    }?>
<div class="form-group">
<label for="email_address" class="col-sm-1 control-label"></label>
<div class="col-sm-12">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-user"></i></span>
  <input type="email" id="" name="email" class="form-control" data-toggle="tooltip" data-placement="top" title="Email here" placeholder="Username..." required value=" <?php if(isset($email)){echo $email;} ?> ">
  </div>
</div>
</div>
<div class="form-group">
<label for="password" class="col-sm-1 control-label"></label>
<div class="col-sm-12">
<div class="input-group">
<span class="input-group-addon">
  <i class="fa fa-lock"></i></span>
  <input type="password" id="" name="password" class="form-control" data-toggle="tooltip" data-placement="top" title="Password here" placeholder="Password..." required>
  </div>
</div>
</div>

<div class="form-group last">
<div class="col-sm-offset-4 col-sm-12">
  <button type="submit" id="submit" name="submit" class="btn">Go <i class="fa fa-sign-in"></i></button>
</div>
</div>
</form>
</div><!--Closen panel-body-->
</div><!--Close panel-default-->
</div><!--Close col-md-->
</div><!--Close row-->
</div><!--Close container-->


<!-- Javascript -->
<script src="<?php echo $this->webroot;?>js/jquery-2.1.1.min.js"></script>
<script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery.backstretch.min.js"></script>
<script src="<?php echo $this->webroot;?>js/retina-1.1.0.min.js"></script>
<script src="<?php echo $this->webroot;?>js/scripts.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery-ui-1.9.2.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery.iphone.toggle.js"></script>

<!--[if lt IE 10]>
<script src="<?php echo $this->webroot;?>js/placeholder.js"></script>
<![endif]-->
</body>
</html>