<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>Transporters - COSON Licencing Application Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!-- The styles -->
<link id="bs-css" href="<?php echo $this->webroot;?>/css/bootstrap-cerulean.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/font-awesome.min.css">
<link href="<?php echo $this->webroot;?>css/jquery.iphone.toggle.css" rel="stylesheet">
<link href="<?php echo $this->webroot;?>css/animate.min.css" rel="stylesheet">
<link href="<?php echo $this->webroot;?>css/charisma-app.css" rel="stylesheet">
<link href="<?php echo $this->webroot;?>css/responsive-tables.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/style.css">

<!-- The HTML5 shim, for IE6-8 support of HTML5 elements-->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- The fav icon -->
<link rel="shortcut icon" href="<?php echo $this->webroot;?>ico/fav.png">
</head>

<body>
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">

<div class="navbar-inner">
<button type="button" class="navbar-toggle pull-left animated flip">
<span class="sr-only">Toggle navigation</span>Menu <i class="fa fa-bars"></i>
</button>
<a class="navbar-brand" href="<?php echo $this->webroot;?>"> <img alt="The logo" src="img/logo0.png" class="hidden-xs"/>
<span>COSON Licencing Application Portal</span></a>

<!-- user dropdown starts -->
<div class="btn-group pull-right">
<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" id="dropdownMenu">
<i class="fa fa-user"></i><span class="hidden-sm hidden-xs"> <?php 
$username = $this->Session->read('Transporter.email');
if(isset($username)){echo $username;}?></span>
<span class="caret"></span>
</button>
<ul class="dropdown-menu" role="menu"  aria-labelledby="dropdownMenu">
<li role="presentation"><a class="link" role="menuitem" href="<?php $this->webroot;?>transporters/profile">Profile</a></li>
<li class="divider"></li>
<li role="presentation"><a class="link" role="menuitem" href="<?php echo $this->webroot;?>transporters/logout">Logout</a></li>
</ul>
</div>
</div>
</div>
<!-- user dropdown ends -->

<!-- topbar ends -->
<div class="ch-container">
<div class="row">

<!-- left menu starts -->
<div class="col-sm-2 col-lg-2">
<div class="sidebar-nav">
<div class="nav-canvas">
  <div class="nav-sm nav nav-stacked">

  </div>
<ul class="nav nav-pills nav-stacked main-menu">
     <!--  <li class="nav-header">Main</li> -->
      <li><a class="link" href="<?php echo $this->webroot;?>transporters/home"><span> Main</span></a>
      </li>
      <li><a class="link" href="<?php echo $this->webroot;?>transporters/viewTransactions"><span> Purchases History</span></a>
      </li>
        <li><a class="link" href="<?php echo $this->webroot;?>transporters/profile"><span> Profile</span></a>
        </li>
         <li><a class="link" href="<?php echo $this->webroot;?>transporters/"><span> Get your licence </span></a>
        </li>
        <li><a class="link" href="<?php echo $this->webroot;?>transporters/logout"><span> Log out</span></a>
        </li>
  </ul>
</div>
</div>
</div>
<!--/span-->
<!-- left menu ends -->

<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->

<div class="row">
<div class="box col-md-12">
<div class="box-inner">
<div class="box-header well">
<h2><i class="fa fa-info-circle"></i> Introduction</h2>
</div>
<div class="box-content row">
<div class="col-lg-10 col-md-12">
  <h4><p>Hey welcome here, this is where you as a transporter can do stuffs.</p></h4>
</div>
</div>
</div>
</div>
</div>



</div> <!-- content ends -->
<footer class="row">
<p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a class="link" href="http://playspread.com" target="_blank">Designed by Playspread</a> 2016</p>
</footer>

</div><!--/.fluid-container-->

<!-- select or dropdown enhancer -->
<!-- <script src="bower_components/chosen/chosen.jquery.min.js"></script> -->

<!-- library for making tables responsive -->
<script src="<?php echo $this->webroot;?>js/jquery-2.1.1.min.js"></script>
<script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery.iphone.toggle.js"></script>
</body>
</html>
