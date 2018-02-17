<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>Admin - COSON Licencing Application Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!-- The styles -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link id="bs-css" href="<?php echo $this->webroot;?>/css/bootstrap-cerulean.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/bootstrap.min.css">
<link href="<?php echo $this->webroot;?>css/jquery.iphone.toggle.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/font-awesome.min.css">
<link href="<?php echo $this->webroot;?>css/animate.min.css" rel="stylesheet">
<link href="<?php echo $this->webroot;?>css/charisma-app.css" rel="stylesheet">
<link href="<?php echo $this->webroot;?>css/responsive-tables.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/styleOri.css">

<!-- The HTML5 shim, for IE6-8 support of HTML5 elements
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Favicon and touch icons -->
<link rel="shortcut icon" href="<?php echo $this->webroot;?>img/favicon-16x16.png">

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $this->webroot;?>img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $this->webroot;?>img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->webroot;?>img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $this->webroot;?>img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->webroot;?>img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $this->webroot;?>img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $this->webroot;?>img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $this->webroot;?>img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $this->webroot;?>img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $this->webroot;?>img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $this->webroot;?>img/favicon-32x32.png">
<link rel="manifest" href="<?php echo $this->webroot;?>img/manifest.json">
<meta name="" content="#347c17">
<meta name="" content="<?php echo $this->webroot;?>img/ms-icon-144x144.png">
<meta name="theme-color" content="#347c17">
</head>

<body>
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">

<div class="navbar-inner">
<button type="button" class="navbar-toggle pull-left animated flip">
<span class="sr-only">Toggle navigation</span>Menu <i class="fa fa-bars"></i>
</button>
<a class="navbar-brand" href="<?php echo $this->webroot;?>"> <img alt="The logo" src="img/logo0.png" class="hidden-xs"/>
<span>COSON Licencing Application Portal - Admin</span></a>

<!-- user dropdown starts -->
<div class="btn-group pull-right">
<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" id="dropdownMenu">
<i class="fa fa-user"></i><span class="hidden-sm hidden-xs"> <?php 
$adminName = $this->Session->read('Admin.email');
if(isset($adminName)){echo $adminName;}?></span>
<span class="caret"></span>
</button>
<ul class="dropdown-menu" role="menu"  aria-labelledby="dropdownMenu">
<li role="presentation"><a class="link" role="menuitem" href="<?php echo $this->webroot;?>admin/profile">Profile</a></li>
<li class="divider"></li>
<li role="presentation"><a class="link" role="menuitem" href="<?php echo $this->webroot;?>admin/logout">Logout</a></li>
</ul>
</div>
</div>
</div>
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
      <li><a class="link" href="<?php $this->webroot;?>admin/"><span> Main</span></a>
      </li>
      <li><a class="link" href="<?php echo $this->webroot;?>admin/viewPurchases"><span> Purchases</span></a>
      </li>
        <li><a class="link" href="<?php echo $this->webroot;?>admin/profile"><span> Profile</span></a>
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
<h2 class=""><i class="fa fa-info-circle"></i> Introduction</h2>
</div>
<div class="box-content row">
<div class="col-lg-10 col-md-12">
  <h4><p>Hey welcome here, this is the backend of the Licencing Web Application where you can do stuffs.</p></h4>
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

<script src="<?php echo $this->webroot;?>js/jquery-2.1.1.min.js"></script>
<script src="<?php echo $this->webroot;?>js/charisma.js"></script>
<script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery.iphone.toggle.js"></script>
</body>
</html>
