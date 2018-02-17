<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!-- The styles -->
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/font-awesome.min.css">
<link href="<?php echo $this->webroot;?>css/charisma-app.css" rel="stylesheet">
<link href="<?php echo $this->webroot;?>css/responsive-tables.css" rel="stylesheet">
<link href="<?php echo $this->webroot;?>css/animate.min.css" rel="stylesheet">
<link href="<?php echo $this->webroot;?>css/jquery.iphone.toggle.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/style.css">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/style.css">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/dataTables.bootstrap.css">
<!-- <link rel="stylesheet" href="<?php echo $this->webroot;?>css/dataTables.jqueryui.min.css"> -->

<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- The fav icon -->
<link rel="shortcut icon" href="<?php echo $this->webroot;?>ico/fav.png">

</head>

<body style="font-size:14.5px;">
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">

<div class="navbar-inner">
<button type="button" class="navbar-toggle pull-left animated flip" data-target="#main">
<span class="sr-only">Toggle navigation</span>Menu <i class="fa fa-bars"></i>
</button>
<a class="navbar-brand" href="<?php $this->webroot;?>"> <img alt="Coson-img" class="hidden-xs"/>
<span>COSON Licencing Application Portal </span></a>

<!-- user dropdown starts -->
<div class="btn-group pull-right">
<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" id="dropdownMenu">
<i class="fa fa-user"></i><span class="hidden-sm hidden-xs"> <?php 
$username = $this->Session->read('Transporter.email');
if(isset($username)){echo $username;}?></span>
<span class="caret"></span>
</button>
<ul class="dropdown-menu" role="menu"  aria-labelledby="dropdownMenu">
<li role="presentation"><a class="link" role="menuitem" href="<?php echo $this->webroot;?>transporters/profile">Profile</a></li>
<li class="divider"></li>
<li role="presentation"><a class="link" role="menuitem" href="<?php echo $this->webroot;?>transporters/logout">Logout</a></li>
</ul>
</div>
</div>
</div>
<!-- user dropdown ends -->


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
  <div class="" id="main">
  <ul class="nav nav-pills nav-stacked main-menu">
     <!--  <li class="nav-header">Main</li> -->
      <li><a class="link" href="<?php echo $this->webroot;?>transporters/home"><span> Main</span></a>
      </li>
      <li><a class="link" href="<?php echo $this->webroot;?>transporters/viewTransactions"><span> Purchases History</span></a>
      </li>
        <li><a class="link" href="<?php echo $this->webroot;?>transporters/profile"><span> Profile</span></a>
        </li>
         <li><a class="link" href="<?php echo $this->webroot;?>transporters"><span> Get your licence </span></a>
        </li>
        <li><a class="link" href="<?php echo $this->webroot;?>transporters/logout"><span> Log out</span></a>
        </li>
  </ul>
  </div>
</div>
</div>
</div>
<!--/span-->
<!-- left menu ends -->

<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
<div>
</div>
<table class="table table-hover table-striped table-bordered bootstrap-datatable datatable responsive table-condensed">

<thead>
<tr>
<th></th>
<th>Name</th>
<th>Email Address</th>
<th>Phone number</th>
<th>Licence Category</th>
<th>Licence Id</th>
<th>Subscription Plan</th>
<th>Duration</th>
<th>Amount Paid</th>
<th>Renewal Date</th>
</tr>
</thead>
<tbody>
<?php
            if (!empty($transporters)){
              $counter = 1;
                foreach ($transporters as $transporter):
            ?>
            <tr>
                <td><?php echo $counter++;?></td>
                <td><?php echo $transporter['Transporter']['full_name'];?></td>
                <td><?php echo $transporter['Transporter']['email'];?></td>
                <td><?php echo $transporter['Transporter']['phone_number'];?></td>
                <td><?php echo $transporter['Transporter']['licence_category'];?></td>
                <td><?php echo $transporter['Transporter']['licence_id'];?></td>
                <td><?php echo $transporter['Transporter']['subscription_plan'];?></td>
                <td><?php echo $transporter['Transporter']['duration'];?></td>
                <td><?php echo $transporter['Transporter']['amount_paid'];?></td>
                <td><?php echo $transporter['Transporter']['renewal_date'];?></td>
            </tr>
            <?php
                endforeach;
            }else{
            ?>
            <tr>
                <td>No Data Found</td>
            </tr>
            <?php }?>
</tbody>
</table>
<!-- content ends -->
</div><!--/#content.col-md-0-->
</div><!--/fluid-row-->


<footer class="row">
<p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; Designed by <a class="link" href="http://playspread.com" target="_blank" class="link">Playspread</a> 2016</p>
</footer>

</div><!--/.fluid-container-->

<!-- external javascript -->
<script src="<?php echo $this->webroot;?>js/jquery-2.1.1.min.js"></script>
<script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script>
<script src="<?php echo $this->webroot;?>js/responsive-tables.js"></script>
<script src='<?php echo $this->webroot;?>js/jquery.dataTables.min.js'></script>
<script src="<?php echo $this->webroot;?>js/charisma.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery.iphone.toggle.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery.noty.js"></script>
</body>
</html>
