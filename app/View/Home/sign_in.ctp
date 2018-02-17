<!DOCTYPE html>
<html lang="en">

<head> 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tarriffs with Parameters</title>

<!-- CSS -->
<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500"> -->
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/font-awesome.min.css">
<link href="<?php echo $this->webroot;?>css/jquery.iphone.toggle.css" rel="stylesheet">
<link href="<?php echo $this->webroot;?>css/animate.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/form-elements.css">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/style.css">
<link href="<?php echo $this->webroot;?>css/jquery.iphone.toggle.css" rel="stylesheet">
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

</head>

<body>
<div id="bg">
	<img src="<?php echo $this->webroot;?>img/1.jpg" alt="background-image">
</div>

<!-- Top menu -->
<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
<span class="sr-only">Toggle navigation</span>Menu <i class="fa fa-bars"></i>
</button>
<a href="<?php echo $this->webroot;?>" class="navbar-brand">Licencing Template</a>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="top-navbar-1">
<ul class="nav navbar-nav navbar-right">
<li>
<a class="links" href="<?php echo $this->webroot;?>About">About</a>
</li>
<li>
<a class="links" href="<?php echo $this->webroot;?>Contacts">Contact</a>
</li>
<li>
<a class="links" href="<?php echo $this->webroot;?>Guidelines">Guidelines</a>
</li>
<li>
<a class="links" data-target="#signInModal" data-toggle="modal">Sign in</a>
</li>
</ul>
</div>
</div>
</nav>

<!-- Top content -->
<div class="top-content">
<div class="container">


<!--The Sign in modal-->
<div class="modal fade" id="signInModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
 					&times;</button>	
			</div>
			<div class="modal-title">
				<h3>Welcome! Please sign in</h3>
			</div>
			<div class="modal-body">
<div class="container">
<div class="row">
<div class="col-md-7">
<form method="post" action="<?php echo $this->webroot;?>registers/signIn" class="form-horizontal" role="form">
<?php $error = $this->Flash->render('loginError'); ?>
<?php if(isset($error)){
  echo "<div class='alert alert-danger alert-dismissable'>";
    echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
    echo "<p>$error</p>";
    echo "</div>";
    }?>
<div class="form-group">
<label for="email_address" class="col-sm-1 control-label"></label>
<div class="col-sm-12">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-user"></i></span>
  <input type="text" id="" name="email_address" class="form-control" data-toggle="tooltip" data-placement="top" title="Email here" placeholder="Username..." required>
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
</div><!--Close col-md-->
</div><!--Close row-->
</div><!--Close container-->
			</div><!--End modal-body-->
			</div><!--End modal-content-->
			</div><!--End modal-dialog-->
			</div><!--End modal fade-->
<!--End Sign in modal-->
</div>
</div>
</div>
</div>

<!-- Javascript -->
<script src="<?php echo $this->webroot;?>js/jquery-2.1.1.min.js"></script>
<script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery.backstretch.min.js"></script>
<script src="<?php echo $this->webroot;?>js/scripts.js"></script>
<script src="<?php echo $this->webroot;?>js/charisma.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery-ui-1.9.2.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery.iphone.toggle.js"></script>
<!--[if lt IE 10]>
<script src="<?php echo $this->webroot;?>js/placeholder.js"></script>
<![endif]-->
</body>
</html>