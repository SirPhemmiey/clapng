<!DOCTYPE html>
<html lang="en">

<head> 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>COSON Licensing Application Portal</title>

<!-- CSS -->
<link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/font-awesome.min.css">
<link href="<?php echo $this->webroot;?>css/jquery.iphone.toggle.css" rel="stylesheet">
<link href="<?php echo $this->webroot;?>css/animate.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/form-elements.css">
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/style.css">
<script src="<?php echo $this->webroot;?>js/jquery-2.1.1.min.js"></script>
<script src="<?php echo $this->webroot;?>js/moment.js"></script>
<script src="<?php echo $this->webroot;?>js/moment-with-locales.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
<div id="bg">
<img src="<?php echo $this->webroot;?>img/backbeat-go-white_b.png" alt="background-image">
</div>

<!-- Top menu -->
<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
<span class="sr-only">Toggle navigation</span>Menu <i class="fa fa-bars"></i>
</button>
<a href="<?php echo $this->webroot;?>" class="navbar-brand">COSON Licensing Application Portal</a>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="top-navbar-1">
<ul class="nav navbar-nav navbar-right">
<li>
<a class="links" href="<?php echo $this->webroot;?>">Home</a>
</li>
<?php if($this->Session->check('User.email_address')){?>
<li>
<a class="links" href="<?php echo $this->webroot;?>users/home">Dashboard</a>
</li>
<?php }?>
<li>
<a class="links" href="<?php echo $this->webroot;?>Contacts">Contact</a>
</li>
<li>
<a class="links" href="<?php echo $this->webroot;?>Guidelines">Guidelines</a>
</li>
<?php if(!$this->Session->check('User.email_address')){?>
<li>
<a class="links" data-target="#signInModal" data-toggle="modal">Sign in</a>
</li>
<?php }?>
</ul>
</div>
</div>
</nav>

<!-- Top content -->
<div class="top-content">
<div class="container">

<div class="row">
<div class="col-sm-8 col-sm-offset-2 text">
<br>

<img style=' width:6%;'src='img/home.svg'><br>
<h1 class="section-heading"><strong>COSON Licensing Application Portal (CLAP)</strong></h1>

<div class="description" style='padding:20px; padding-top:0;'>
<i class="fa fa-quote-left fa-pull-left quote" aria-hidden="true"></i>
Music is intellectual property and the playing of music in a business or public setting without a music copyright licence is unlawful and this can lead to huge damages for copyright infringement.
<br><br>In order to make it easy and stress free for users of music to get the licence required to legally play music in their business environment and facilities and pay for the use of the music without leaving the comfort of their businesses, COSON welcomes you to CLAP! the easy to use licensing portal.
<br><br>A few clicks on this portal and in less than five minutes, you are on your way to complying with the law and obtaining a music copyright licence. The COSON music copyright licence gives you the freedom to play both local and foreign music in your business as you like,for your enjoyment and that of your customers.
<br><br>The royalty collected from the licensing is distribute to those who make the music.
By obtaining a music copyright licence, you make it possible for those who make good music to make more good music for you to enjoy.</p><br><br>
<p style='text-align:center;'>Please click <a href="<?php echo $this->webroot;?>guidelines" class="links">here</a> for a guide on how to use the portal
<i class="fa fa-quote-right fa-pull-right quote" aria-hidden="true"></i>
<p>&nbsp;</p>

</div>
<button class="btn btn-lg animated rubberBand" data-toggle="modal" data-target="#signUpModal">Get Licence</button>
<br> <br>
<p>Powered by <a href="http://playspread.com" id="forlink">Playspread</a></p>
<p>&nbsp;</p>
</div>
</div>


<div class="row">
<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3  form-box">
<!-- <p style="color:white;"><?php 
$new_date = strtotime("+1day today");
echo date('d-m-Y', $new_date);?></p> -->
<div class="row" id="emptyCategory" style="display:none;"></div>

<!--The Sign up Modal-->
<div class="modal fade" id="signUpModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
&times;</button>  
</div>
<div class="modal-body">

<h4 style='text-align:left;'>Easy steps to get a COSON music copyright licence and to save your business from legal palaver</h4>
<?php if(!$this->Session->check('User.email_address')){?>
<p>Already a user?  <a data-toggle="modal" class="link" data-target="#signInModal" data-dismiss="modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="color:#347c17;">Sign In</a></p>
<?php } else{
echo "<h3>Welcome Back!</h3>";
}?>

<!-- <div class="f1-steps">
<div class="f1-progress">
<div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
</div>
<div class="f1-step active">
<div class="f1-step-icon"><i class="fa fa-info"></i></div>
<p>Details</p>
</div>
<div class="f1-step">
<div class="f1-step-icon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></div>
<p>Choose Category</p>
</div>
<div class="f1-step">
<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
<p>Report</p>
</div>
</div> -->

<form role="form" action="<?php echo $this->webroot;?>users/signUp" method="post" id="myForm" class="f1">

<fieldset>
<h4>Your Company and Personal Information </h4>
<div class="form-group">
<label class="sr-only" for="f1-company-name">Company Name</label>
<input type="text" placeholder="Company or Individual name..." class="f1-company-name form-control" id="company_name" name="data[User][company_name]" value="<?php if($this->Session->check('User.company_name')){ $name = $this->Session->read('User.company_name'); echo $name;}?>">
</div>
<div class="form-group">
<label class="sr-only" for="f1-contact-person">Contact Person</label>
<input type="text" placeholder="Contact Person..." class="f1-contact-person form-control" id="contact_person" name="data[User][contact_person]" value="<?php if($this->Session->check('User.contact_person')){ $contact_person = $this->Session->read('User.contact_person'); echo $contact_person;}?>">
</div>

<div class="form-group">
<label class="sr-only" for="f1-email-address">Email address</label>
<input type="email" placeholder="Email address..." class="f1-last-name form-control" id="email_address" name="data[User][email_address]" value="<?php if($this->Session->check('User.email_address')){ $email = $this->Session->read('User.email_address'); echo $email;}?>">
</div>
<div class="form-group">
<label class="sr-only" for="f1-phone-number">Phone Number</label>
<input type="number" placeholder="Phone number..." class="f1-last-name form-control" id="phone_number" name="data[User][phone_number]" value="<?php if($this->Session->check('User.phone_number')){ $phone_number = $this->Session->read('User.phone_number'); echo $phone_number;}?>">
</div>
<div class="form-group">
<label class="sr-only" for="f1-last-name">Password</label>
<input type="password" name="data[User][password]" placeholder="Password..." class="f1-password form-control" id="password-1">
</div>
<div class="form-group">
<label class="sr-only" for="f1-last-name">Confirm Password</label>
<input type="password" placeholder="Confirm Password..." class="f1-password form-control" id="password-2">
</div>
<div class="f1-buttons">
<button type="button" class="btn btn-next">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</fieldset>

<fieldset>
<div class="row" id="selectCategory">
<h4>Please select your category</h4>
<div class="form-group">
<label class="sr-only control-label" for="f1-category">Choose your category </label>
<select class="form-control" id="planCategory" title="Please Choose your category...">
<option>Please Choose your category...</option>
<option>Clubs</option>
<option>Roadshows</option>
<option>Hotels</option>
<option>Salons and Barbers shops</option>
<option>Exhibitions and Trade fairs</option>
<option>Fitness Centres and Gyms</option>
<option>Restaurants, Malls, Shops, Retail Outlets, Offices and Similar Establishments</option>
<option>Event Centres and Similar Establishments</option>
<option>Transporters</option>
</select>
</div>
</div>
<div class="f1-buttons">
<button type="button" class="btn btn-previous" id="specialPrev">Previous <i class="fa fa-arrow-left"></i> </button>
</button>
</div>

<div class="row" id="fieldsetClubs" style="display:none;">
<h4></h4>

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="text" id="clubDefaultAmount" class="form-control" readonly value="50.25"/></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per person</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Subscription Plan :</label>
<div class="col-md-7">
<input type="text" id="clubDefaultYear" class="form-control" readonly value="Yearly"/>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default subscription plan</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<!--This will be shown only when the monthly option is selected-->
<div class="form-group">
<div class="row">
<div id="days">
<label class="control-label col-md-5">How many days do you operate in a week?</label>
<div class="col-md-7">
<input type="number" required name="" min="3" id="clubDefaultDays" class="form-control" value="3" /></div>
</div>
</div><!--End row-->
</div><!--End form-group-->
<br />
<!--/End This will be shown only when the monthly option is selected-->

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many persons can your club accommodate?</label>
<div class="col-md-7">
<input type="number" value="25" min="25" required name="" id="clubCapacity" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->

<div class="row" id="divClubsHowManyYears">
<div class="form-group">
<label class="control-label col-md-5">How many years would you like to pay for?</label>
<div class="col-md-7">
<input type="number" name="" min="1" value="1" id="clubsHowManyYears" class="form-control"></div>
</div>
</div>

<div class="row divAmountSpaceClubs" style="display:none;">
<div class="form-group">
<div class="col-md-5">
<div class="numberCircle"">
<div class="height_fix"></div>
<div class="content" id="amountSpaceClubs"></div>
</div>
</div>
</div>
</div><!--End row -->
<br />
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next" id="divAmountSpaceClubsNext" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</div>


<div class="row" id="fieldsetRoadshows" style="display:none;">
<div class="row">
<div class="form-group">
<div class="col-lg-12">
<select name="" disabled id="roadshowLocation" class="form-control">
<option>Daily</option>
</select>
</div>
</div>
</div>
<br />
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per location :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="number" name="" id="defaultAmountRoadShows" class="form-control" readonly value="88998.22" /></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per location</div>
</div>
</div>
</div>
<br />

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many days of operation?</label>
<div class="col-md-7">
<input type="number" value="1" required name="" id="roadshowsNumberOfDays" class="form-control" />
</div>
</div>
</div>
<br />
<div class="row divAmountSpaceRoadshows" style="display:none;">
<div class="form-group">
<div class="col-md-5">
<div class="numberCircle"> 
<div class="height_fix"></div>
<div class="content" id="amountSpaceRoadshows"></div>
</div>
</div>
</div>

<div class="col-md-8">
<p>Notice : Please note that <strong><b>Daily</b></strong> is the default plan for Roadshows</p>
</div>
</div><!--End row-->
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next divAmountSpaceRoadshows" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</div>


<div class="row"  id="fieldsetSalonsAndBarbersShops" style="display:none;">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person/day :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="number" name="" id="salonDefaultAmount" class="form-control" readonly value="10.73"/></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per person</div>
</div>
</div>
</div>
<br />

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per year :</label>
<div class="col-md-7">
<!-- <div class="input-group">
<span class="input-group-addon">₦</span>
<input type="number" name="" id="salonAmountPerYear" class="form-control" readonly value="5000"/></div> -->
<!-- <div class="help-text"><i class="fa fa-info-circle"></i> This is the default flat rate amount per year</div> -->
<label class="radio-inline">
<input type="radio" value="15000" name="salonCategory" id="salonAmountPerYearA" /> 15,000
</label>
<label class="radio-inline">
<input type="radio" value="5000" name="salonCategory" id="salonAmountPerYearB" /> 5,000
</label>
</div>
</div>
</div>
<div class="row">
<div class="form-group">
<div class="col-md-12">
<div class="help-text"><i class="fa fa-info-circle"></i> Notice: Please note that the ₦15,000 is for <em>Premium</em> subscription while ₦5,000 is for <em>Basic</em> subscription</div>
</div>
</div>
</div>
<br />
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many years do you want to subscribe to?</label>
<div class="col-md-7">
<input type="number" required name="" id="salonNumberOfYears" class="form-control" value="1" min="1" />
</div>
</div>
</div>

<div class="row divAmountSpaceSalon" style="display:none;">
<div class="form-group">
<div class="col-md-4">
<div class="numberCircle"> 
<div class="height_fix"></div>
<div class="content" id="amountSpaceSalon"></div>
</div>
</div>
</div>
</div><!--End row-->
<br>
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next divAmountSpaceSalon" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</div>

<div class="row" id="fieldsetHotels" style="display:none;">
<h4></h4>
<div class="row">
<div class="form-group">
<div class="col-lg-6">
<h4>What type of hotel do you have?</h4>
<select name="" id="hotelType" class="form-control">
<option>Please select your hotel type...</option>
<option value="97.90" id="hotelInternat`ional">International</option>
<option value="48.00" id="hotelNational">National</option>
<option value="26.70" id="hotelUrban">Urban</option>
</select>
</div>
</div>
</div>
<br />
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many rooms does your hotel have in total?</label>
<div class="col-md-7">
<input type="number" value="1" min="1" name="" id="hotelRooms" class="form-control"/></div>
</div><!--End form-group-->
</div><!--End row-->
<br>


<div class="row divAmountSpaceHotels" style="display:none;">
<div class="row">
<div class="form-group">
<div class="col-md-4">
<div class="numberCircle"> 
<div class="height_fix"></div>
<div class="content" id="amountSpaceHotels"></div>
</div>
</div>
</div>
</div>
<!-- </div>End row -->

<div class="row">
<div class="form-group">
<!-- <div class="row"> -->
<label class="control-label col-md-5">Room Rates :</label>
<div class="col-md-4" id="roomRates"></div>
</div>
<div class="form-group">
<label class="control-label col-md-5">Bar and Restaurants Rate :</label>
<div class="col-md-4" id="barAndResRates"></div>
</div>
<div class="form-group">
<label class="control-label col-md-5">Event Hall Rate :</label>
<div class="col-md-4" id="eventHallRates"></div>
</div>
</div>


<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next divAmountSpaceHotels" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</div>
</div>

<div class="row"  id="fieldsetExhibitionsAndTradeFairs" style="display:none;">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per day :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="number" name="" id="exhibitionAmount" class="form-control" readonly value="57441.54"/></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per day</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="form-group">
<div class="row">
<div id="">
<label class="control-label col-md-5">How many days of Exhibition :</label>
<div class="col-md-7">
<input type="number" value="1" required name="" id="exhibitionDays" class="form-control" /></div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<div class="row divAmountSpaceExhibition" style="display:none;">
<div class="form-group">
<div class="col-md-10">
<div class="numberCircle"> 
<div class="height_fix"></div>
<div class="content" id="amountSpaceExhibition"></div>
</div>
</div>
</div>
</div><!--End row-->
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next divAmountSpaceExhibition" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</div>

<div class="row" id="fieldsetFitnessCentresAndGyms" style="display:none;">

<!--This will only show when the months option is selected-->
<div class="row" id="divAmountFitnessMonthly">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per month :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="number" name="" id="fitnessDefaultAmountMonthly" class="form-control" readonly value="8000" /></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per month</div>
</div>
</div>
</div>
</div>
<br />
<div class="row" id="divAmountFitnessYearly">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per year :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="number" name="" id="fitnessDefaultAmountYearly" class="form-control" readonly value="96000" /></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per year</div>
</div>
</div>
</div>
</div>
<!--End this will show only when months is selected-->

<!--This will show only when years is selected-->
<div class="row" id="forFitnessYears" style="display:none;">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many years do you want to subscribe to?</label>
<div class="col-md-7">
<input type="number" required name="" min="1" id="fitnessNumberOfYears" class="form-control" value="1" />
</div>
</div>
</div>
</div>
<!--End this willl only show when year is selected-->

<!--This will only show when months is selected-->
<div class="row" id="forFitnessMonths" style="display:none;">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many months do you want to subscribe to?</label>
<div class="col-md-7">
<input type="number" required="" name="" min="1" id="fitnessNumberOfMonths" class="form-control" value="1" />
</div>
</div>
</div>
</div>
<!--End this will show when months is selected-->

<div class="row">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How would you want to pay?</label>
<div class="col-md-7">
<select name="" id="fitnessPlanCategory" class="form-control">
<option>How do you plan to pay?...</option>
<option id="fitnessMonthly">Monthly</option>
<option id="fitnessYearly">Yearly</option>
</select>
</div>
</div>
</div>
</div>
<br />
<div class="row divAmountSpaceFitness" style="display:none;">
<div class="form-group">
<div class="col-md-10">
<div class="numberCircle">
<div class="height_fix"></div>
<div class="content" id="amountSpaceFitness"></div>
</div>
</div>
</div>

</div><!--End row-->

<div class="row" style="display:none;" id="dispYearMonthFitness">
<div class="form-group">
<div class="col-md-5">
<h4>Yearly : <span id="displayFitnessYearly"></span></h4>
<h4>Monthly : <span id="displayFitnessMonthly"></span></h4>
</div>
</div>
</div>



<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next" id="divAmountSpaceFitnessNext" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</div>



<div class="row" id="fieldsetEvent" style="display:none;">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="number" name="" id="eventDefaultAmount" class="form-control" readonly value="100"/></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per person</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many persons can your centre accommodate?</label>
<div class="col-md-7">
<input type="number" required name="" id="eventCapacity" class="form-control" min="16" value="16" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>

<div class="form-group">
<div class="row">
<div id="days">
<label class="control-label col-md-5">How many days do you operate in a week?</label>
<div class="col-md-7">
<input type="number" required name="" min="3" id="eventDays" class="form-control" value="3" /></div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<div class="row divAmountSpaceEvent" style="display:none;">
<div class="form-group">
<div class="col-md-5">
<div class="numberCircle">
<div class="height_fix"></div>
<div class="content" id="amountSpaceEvent"></div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-md-7">
<label>How would you want to pay?</label>
<select name="" id="eventPaymentDuration" class="form-control">
<option>Please choose your plan...</option>
<option>Monthly</option>
<option>Yearly</option>
</select>
</div>
</div>
</div><!--End row-->

<div class="row">
<div style="display:none;" id="dispYearMonthEvent">
<div class="form-group">
<div class="col-md-5">
<h4>Yearly : <span id="displayYearlyEvent"></span></h4>
<h4>Monthly : <span id="displayMonthlyEvent"></span></h4>
</div>
</div>
</div>
<div class="row" id="divEventHowManyMonths" style="display:none;">
<div class="form-group">
<div class="col-md-6">
<label>How many months would you like to pay for?</label>
<input type="number" name="" min="1" value="1" id="eventHowManyMonths"></div>
</div>
</div>
<br />
<div class="row" id="divEventHowManyYears" style="display:none;">
<div class="form-group">
<div class="col-md-6">
<label>How many years would you like to pay for?</label>
<input type="number" name="" min="1" value="1" id="eventHowManyYears"></div>
</div>
</div>
</div>
<br />

<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next" id="divAmountSpaceEventNext" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</div>

<div class="row"  id="fieldsetRMSROSE" style="display:none;">
<div class="row">
<div class="form-group">
<!--  <div class="col-lg-5"> -->
<select name="" id="RMSROSE" class="form-control">
<option>Please select your specific category</option>
<option>Restaurants</option>
<option>Malls</option>
<option>Retail Outlets</option>
<option>Banking Halls</option>
<option>Offices and Similar Establishments</option>
</select>
<!--  </div> -->
</div>
</div>
<br>

<!--This will only show when the restaurants option is selected-->
<div class="row" id="forRestaurants" style="display:none">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Default plan subscription</label>
<div class="col-md-7">
<select name="" disabled class="form-control">
<option class="defaultPlanSubscriptionRMSROSE" value="365">Yearly</option>
</select>
</div>
</div>
</div>
<br />
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person/day :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="number" name="" id="restaurantDefaultAmount" class="form-control" readonly value="10.23" /></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per person/day</div>
</div>
</div>
</div>
<br />

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many persons can your restaurant accommodate per day?</label>
<div class="col-md-7">
<input type="number" value="50" min="50" required name="" id="restaurantNumberOfPersons" class="form-control"/>
</div>
</div>
</div>
<br />

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many years do you want to subscribe to?</label>
<div class="col-md-7">
<input type="number" required name="" id="restaurantNumberOfYears" class="form-control" min="1" value="1" />
</div>
</div>
</div>
</div>
<!--End this will show only when restaurants option is selected-->

<!--This will show only when malls is selected-->
<div class="row" id="forMalls" style="display:none">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Default plan subscription</label>
<div class="col-md-7">
<select name="" disabled class="form-control">
<option class="defaultPlanSubscriptionRMSROSE" value="365">Yearly</option>
</select>
</div>
</div>
</div>
<br />
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person/day :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="number" name="" id="mallsDefaultAmount" class="form-control" readonly value="8.34" /></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per person/day</div>
</div>
</div>
</div>
<br />

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many persons can your Mall accommodate?</label>
<div class="col-md-7">
<input type="number" value="1000" min="1000" required name="" id="mallsNumberOfPersons" class="form-control" />
</div>
</div>
</div>
<br />

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many years do you want to subscribe to?</label>
<div class="col-md-7">
<input type="number" required name="" id="mallsNumberOfYears" class="form-control" min="1" value="1" />
</div>
</div>
</div>
</div>
<!--End this will only show when malls is selected-->

<!--This will show only when retail outlet is selected-->
<div class="row" id="forRetail" style="display:none">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Default plan subscription</label>
<div class="col-md-7">
<select name="" disabled class="form-control">
<option class="defaultPlanSubscriptionRMSROSE" value="365">Yearly</option>
</select>
</div>
</div>
</div>
<br />
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person/day :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="number" name="" id="retailDefaultAmount" class="form-control" readonly value="8.34" /></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per person/day</div>
</div>
</div>
</div>
<br />

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many persons can your Retail Outlet accommodate?</label>
<div class="col-md-7">
<input type="number" value="50" min="50" required name="" id="retailNumberOfPersons" class="form-control" />
</div>
</div>
</div>
<br />

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many years do you want to subscribe to?</label>
<div class="col-md-7">
<input type="number" required name="" id="retailNumberOfYears" class="form-control" min="1" value="1" />
</div>
</div>
</div>
</div>
<!--End this will only show when retail outlet is selected-->

<!--This will show only when banking is selected-->
<div class="row" id="forBanking" style="display:none">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Default plan subscription</label>
<div class="col-md-7">
<select name="" disabled class="form-control">
<option class="defaultPlanSubscriptionRMSROSE" value="365">Yearly</option>
</select>
</div>
</div>
</div>
<br />
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person/day :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="number" name="" id="bankingDefaultAmount" class="form-control" readonly value="6.45" /></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per person/day</div>
</div>
</div>
</div>
<br />

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many persons can your Banking Hall accommodate?</label>
<div class="col-md-7">
<input type="number" value="100" min="100" required name="" id="bankingNumberOfPersons" class="form-control" />
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default capacity for your branch</div>
</div>
</div>
</div>
<br />

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many years do you want to subscribe to?</label>
<div class="col-md-7">
<input type="number" required name="" id="bankingNumberOfYears" class="form-control" min="1" value="1" />
</div>
</div>
</div>
</div>
<!--End this will only show when banking is selected-->

<!--This will show only when offices is selected-->
<div class="row" id="forOffices" style="display:none">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Default plan subscription</label>
<div class="col-md-7">
<select name="" disabled class="form-control">
<option class="defaultPlanSubscriptionRMSROSE" value="365">Yearly</option>
</select>
</div>
</div>
</div>
<br />
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person/day :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="number" name="" id="officesDefaultAmount" class="form-control" readonly value="6.45" /></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per person/day</div>
</div>
</div>
</div>
<br />

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many persons can your Office accommodate?</label>
<div class="col-md-7">
<input type="number" value="10" min="10" required name="" id="officesNumberOfPersons" class="form-control" />
</div>
</div>
</div>
<br />

<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many years do you want to subscribe to?</label>
<div class="col-md-7">
<input type="number" required name="" id="officesNumberOfYears" class="form-control" min="1" value="1" />
</div>
</div>
</div>
</div>
<!--End this will only show when offices is selected-->

<div class="row divAmountSpaceRMSROSE" style="display:none;">
<div class="form-group">
<div class="col-md-4">
<div class="numberCircle"> 
<div class="height_fix"></div>
<div class="content" id="amountSpaceRMSROSE"></div>
</div>
</div>
</div>
<div class="col-md-8">
<p>Notice : Please note that the default plan is <strong><b>Yearly</b></strong> for Restaurants, Malls, Retail Outlets and other Similar Establishments</p>
</div>
</div><!--End row-->
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next divAmountSpaceRMSROSE" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>      
</div>
<!--THIS SECTION IS FOR TRANSPORTERS-->
<div class="form-group" style="display:none;" id="selectVehicle">
<h4>Please select your vehicle type</h4>
<label class="sr-only control-label" for="f1-category">Choose your vehicle type </label>
<select class="form-control" id="vehicleCategory">
<option>Please Choose your vehicle type...</option>
<option>Bus</option>
<option>Taxi</option>
<option>Mini Coach</option>
<option>Luxirious Bus</option>
<option>Corporate Vehicle</option>
<option>General Conveyance</option>
</select>
</div>
<div class="f1-buttons">
<button type="button" class="btn btn-previous" id="specialPrevTrans" style="display:none;">Previous <i class="fa fa-arrow-left"></i> </button>
</button>
</div>
<div class="row" id="fieldsetTaxi" style="display:none;">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="text" id="taxiDefaultAmount" class="form-control" readonly value="35.60"/></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per passenger</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many passengers can your <span class="vehicle">vehicle</span> accommodate?</label>
<div class="col-md-7">
<input type="number" value="4" min="4" required name="" id="taxiCapacity" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">What is the total number of your trips?</label>
<div class="col-md-7">
<input type="number" value="5" min="5" required name="" id="taxiTrips" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Subscription Plan :</label>
<div class="col-md-7">
<input type="text" id="taxiPlan" class="form-control" readonly value="Monthly"/>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default subscription plan</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="form-group">
<div class="row">
<div id="">
<label class="control-label col-md-5">How many months do you want to subscribe to?</label>
<div class="col-md-7">
<input type="number" required name="" min="3" id="taxiDefaultMonths" class="form-control" value="3" /></div>
</div>
</div><!--End row-->
</div><!--End form-group-->
<br />
<div class="row divAmountSpaceTaxi" style="display:none;">
<div class="form-group">
<div class="col-md-5">
<div class="numberCircle">
<div class="height_fix"></div>
<div class="content" id="amountSpaceTaxi"></div>
</div>
</div>
</div>
</div><!--End row -->
<br />
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next divAmountSpaceTaxi" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</div>



<div class="row" id="fieldsetBus" style="display:none;">
<div class="form-group">
<label class="sr-only control-label" for="f1-category">Choose your bus type </label>
<select class="form-control" id="busCategory">
<option>Please Choose your bus type...</option>
<option>Bus</option>
<option>Big Bus</option>
</select>
</div>
<div class="row" id="bigBus" style="display:none">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="text" id="bigBusDefaultAmount" class="form-control" readonly value="35.60"/></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per passenger</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many passengers can your <span class="vehicle">vehicle</span> accommodate?</label>
<div class="col-md-7">
<input type="number" value="18" min="18" required name="" id="bigBusCapacity" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">What is the total number of your trips?</label>
<div class="col-md-7">
<input type="number" value="7" min="7" required name="" id="bigBusTrips" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Subscription Plan :</label>
<div class="col-md-7">
<input type="text" id="bigBusPlan" class="form-control" readonly value="Monthly"/>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default subscription plan</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="form-group">
<div class="row">
<div id="">
<label class="control-label col-md-5">How many months do you want to subscribe to?</label>
<div class="col-md-7">
<input type="number" required name="" min="3" id="bigBusDefaultMonths" class="form-control" value="3" /></div>
</div>
</div><!--End row-->
</div><!--End form-group-->
<br />
<div class="row divAmountSpaceBigBus" style="display:none;">
<div class="form-group">
<div class="col-md-5">
<div class="numberCircle">
<div class="height_fix"></div>
<div class="content" id="amountSpaceBigBus"></div>
</div>
</div>
</div>
</div><!--End row -->
<br />
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next divAmountSpaceBigBus" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</div>
<div class="row" id="bus" style="display:none">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="text" id="busDefaultAmount" class="form-control" readonly value="35.60"/></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per passenger</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many passengers can your <span class="vehicle">vehicle</span> accommodate?</label>
<div class="col-md-7">
<input type="number" value="10" min="10" required name="" id="busCapacity" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">What is the total number of your trips?</label>
<div class="col-md-7">
<input type="number" value="7" min="7" required name="" id="busTrips" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Subscription Plan :</label>
<div class="col-md-7">
<input type="text" id="busPlan" class="form-control" readonly value="Monthly"/>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default subscription plan</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="form-group">
<div class="row">
<div id="">
<label class="control-label col-md-5">How many months do you want to subscribe to?</label>
<div class="col-md-7">
<input type="number" required name="" min="3" id="busDefaultMonths" class="form-control" value="3" /></div>
</div>
</div><!--End row-->
</div><!--End form-group-->
<br />
<div class="row divAmountSpaceBus" style="display:none;">
<div class="form-group">
<div class="col-md-5">
<div class="numberCircle">
<div class="height_fix"></div>
<div class="content" id="amountSpaceBus"></div>
</div>
</div>
</div>
</div><!--End row -->
<br />
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next divAmountSpaceBus" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</div>
</div>

<div class="row" id="fieldsetMiniCoaches" style="display:none;">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="text" id="miniCoachesDefaultAmount" class="form-control" readonly value="35.60"/></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per passenger</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many passengers can your <span class="vehicle">vehicle</span> accommodate?</label>
<div class="col-md-7">
<input type="number" value="25" min="25" required name="" id="miniCoachesCapacity" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">What is the total number of your trips?</label>
<div class="col-md-7">
<input type="number" value="5" min="5" required name="" id="miniCoachesTrips" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Subscription Plan :</label>
<div class="col-md-7">
<input type="text" id="miniCoachesPlan" class="form-control" readonly value="Monthly"/>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default subscription plan</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="form-group">
<div class="row">
<div id="">
<label class="control-label col-md-5">How many months do you want to subscribe to?</label>
<div class="col-md-7">
<input type="number" required name="" min="3" id="miniCoachesDefaultMonths" class="form-control" value="3" /></div>
</div>
</div><!--End row-->
</div><!--End form-group-->
<br />
<div class="row divAmountSpaceMiniCoaches" style="display:none;">
<div class="form-group">
<div class="col-md-5">
<div class="numberCircle">
<div class="height_fix"></div>
<div class="content" id="amountSpaceMiniCoaches"></div>
</div>
</div>
</div>
</div><!--End row -->
<br />
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next divAmountSpaceMiniCoaches" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</div>
<div class="row" id="fieldsetLuxiriousBuses" style="display:none;">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="text" id="luxiriousBusesDefaultAmount" class="form-control" readonly value="35.60"/></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per passenger</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many passengers can your <span class="vehicle">vehicle</span> accommodate?</label>
<div class="col-md-7">
<input type="number" value="52" min="52" required name="" id="luxiriousBusesCapacity" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">What is the total number of your trips?</label>
<div class="col-md-7">
<input type="number" value="5" min="5" required name="" id="luxiriousBusesTrips" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Subscription Plan :</label>
<div class="col-md-7">
<input type="text" id="luxiriousBusesPlan" class="form-control" readonly value="Monthly"/>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default subscription plan</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="form-group">
<div class="row">
<div id="">
<label class="control-label col-md-5">How many months do you want to subscribe to?</label>
<div class="col-md-7">
<input type="number" required name="" min="3" id="luxiriousBusesDefaultMonths" class="form-control" value="3" /></div>
</div>
</div><!--End row-->
</div><!--End form-group-->
<br />
<div class="row divAmountSpaceLuxiriousBuses" style="display:none;">
<div class="form-group">
<div class="col-md-5">
<div class="numberCircle">
<div class="height_fix"></div>
<div class="content" id="amountSpaceLuxiriousBuses"></div>
</div>
</div>
</div>
</div><!--End row -->
<br />
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next divAmountSpaceLuxiriousBuses" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</div>

<div class="row" id="fieldsetCoorporateVehicles" style="display:none;">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="text" id="coorporateVehiclesDefaultAmount" class="form-control" readonly value="35.60"/></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per passenger</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many passengers can your <span class="vehicle">vehicle</span> accommodate?</label>
<div class="col-md-7">
<input type="number" value="18" min="18" required name="" id="coorporateVehiclesCapacity" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">What is the total number of your trips?</label>
<div class="col-md-7">
<input type="number" value="3" min="3" required name="" id="coorporateVehiclesTrips" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Subscription Plan :</label>
<div class="col-md-7">
<input type="text" id="cooporateVehiclesPlan" class="form-control" readonly value="Monthly"/>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default subscription plan</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="form-group">
<div class="row">
<div id="">
<label class="control-label col-md-5">How many months do you want to subscribe to?</label>
<div class="col-md-7">
<input type="number" required name="" min="3" id="coorporateVehiclesDefaultMonths" class="form-control" value="3" /></div>
</div>
</div><!--End row-->
</div><!--End form-group-->
<br />
<div class="row divAmountSpaceCoorporateVehicles" style="display:none;">
<div class="form-group">
<div class="col-md-5">
<div class="numberCircle">
<div class="height_fix"></div>
<div class="content" id="amountSpaceCoorporateVehicles"></div>
</div>
</div>
</div>
</div><!--End row -->
<br />
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next divAmountSpaceCoorporateVehicles" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</div>


<div class="row" id="fieldsetGeneral" style="display:none;">
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Amount per person :</label>
<div class="col-md-7">
<div class="input-group">
<span class="input-group-addon">₦</span>
<input type="text" id="generalDefaultAmount" class="form-control" readonly value="35.60"/></div>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default amount per passenger</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">How many passengers can your <span class="vehicle">vehicle</span> accommodate?</label>
<div class="col-md-7">
<input type="number" value="20" min="20" required name="" id="generalCapacity" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">What is the total number of your trips?</label>
<div class="col-md-7">
<input type="number" value="5" min="5" required name="" id="generalTrips" class="form-control" />
</div>
</div><!--End form-group-->
</div><!--End row-->
<div class="row">
<div class="form-group">
<label class="control-label col-md-5">Subscription Plan :</label>
<div class="col-md-7">
<input type="text" id="generalPlan" class="form-control" readonly value="Monthly"/>
<div class="help-text"><i class="fa fa-info-circle"></i> This is the default subscription plan</div>
</div>
</div><!--End form-group-->
</div><!--End row-->
<br>
<div class="form-group">
<div class="row">
<div id="">
<label class="control-label col-md-5">How many months do you want to subscribe to?</label>
<div class="col-md-7">
  <input type="number" required name="" min="3" id="generalDefaultMonths" class="form-control" value="3" /></div>
</div>
</div><!--End row-->
</div><!--End form-group-->
<br />
<div class="row divAmountSpaceGeneral" style="display:none;">
<div class="form-group">
<div class="col-md-5">
  <div class="numberCircle">
    <div class="height_fix"></div>
    <div class="content" id="amountSpaceGeneral"></div>
  </div>
</div>
</div>
</div><!--End row -->
<br />
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i> </button>
<button type="button" class="btn btn-next divAmountSpaceGeneral" style="display:none;">Next <i class="fa fa-arrow-right"></i> </button>
</div>
</div>
</fieldset>

<fieldset>
<div class="row">
<div class="form-group">
<h4 style="text-align:center;">Summary of your License Purchase</h4>
<div class="row">
<label class="control-label col-md-4">Licence Id :</label> <div id="transId" class="col-md-8">
<span id="cat"></span><span id="renew"></span><span id="rand"><?php if(isset($getNumber)){echo $getNumber;}?></span>
</div>
<input type="hidden" name="data[User][licence_id]" value="" id="inputTransId" />
</div>
<div class="row">
<label class="control-label col-md-4">Company Name :</label> <div class="col-md-8" id="summaryName">

</div>
</div>
<div class="row">
<label class="control-label col-md-4">Contact Person :</label> <div class="col-md-8" id="summaryContact">

</div>
</div>
<div class="row">
<label class="col-md-4 control-label">Email Address :</label> <div class="col-md-8" id="summaryEmail">

</div> 
</div>
<div class="row">
<label class="col-md-4 control-label">Phone Number :</label> <div class="col-md-8" id="summaryPhone">

</div>
</div>
<div class="row">
<label class="col-md-4 control-label">Licence Category :</label> <div class="col-md-8 summaryCategory" id="summaryCategory">

</div>
<input type="hidden" name="data[User][licence_category]" value="" id="inputCategory" />
</div>
<div class="row">
<label class="col-md-4 control-label">Subcription Plan :</label> <div class="col-md-8 summaryPlan" id="summaryPlan">

</div>
<input type="hidden" name="data[User][subscription_plan]" value="" id="inputPlan" />
</div>
<div class="row">
<label class="col-md-4 control-label">Duration of Plan :</label> <div class="col-md-8 summaryDuration" id="summaryDuration">

</div>
<input type="hidden" name="data[User][duration]" value="" id="inputDuration" />
</div>
<div class="row">
<label class="col-md-4 control-label">Renewal Date : </label> <div class="col-md-8 summaryRenewal"></div>
<input type="hidden" name="data[User][renewal_date]" value="" id="inputRenewal" />
</div>
</div>
<div class="row">
<label class="col-md-4 control-label">Total Amount : </label> <div class="col-md-8 summaryTotal" id="summaryTotal">
</div>
<input type="hidden" name="data[User][amount_paid]" value="" id="inputAmount" />
</div>
<div class="f1-buttons">
<button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i></button>
<button type="submit" class="btn btn-submit">Make Payment</button>
</div>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
<!--End Sign up modal-->
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
<form method="post" action="<?php echo $this->webroot;?>users/login" class="form-horizontal" role="form">
<?php $error = $this->Flash->render('loginError'); ?>
<?php if(isset($error)){
echo "<div class='alert alert-danger alert-dismissable'>";
echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
echo "<p>$error</p>";
echo "</div>";
}?>
<div class="form-group">
<label for="email_address" class="col-sm-1 control-label"></label>
<div class="col-sm-9">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-user"></i></span>
<input type="text" id="" name="email_address" class="form-control" data-toggle="tooltip" data-placement="top" title="Email here" placeholder="Username..." required>
</div>
</div>
</div>
<div class="form-group">
<label for="password" class="col-sm-1 control-label"></label>
<div class="col-sm-9">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-lock"></i></span>
<input type="password" id="" name="password" class="form-control" data-toggle="tooltip" data-placement="top" title="Password here" placeholder="Password..." required>
</div>
</div>
</div>
<div class="form-group">
<div class="col-md-5">
<a href="<?php echo $this->webroot;?>users/forgotPassword" class="link">Forgot password?</a>
</div>
</div>

<div class="form-group last">
<div class="col-sm-offset-4 col-sm-9">
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
<div>

</div>
</div>
</div>
<!-- Javascript -->
<script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery.backstretch.min.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery-ui-1.9.2.js"></script>
<script src="<?php echo $this->webroot;?>js/scripts.js"></script>
<script src="<?php echo $this->webroot;?>js/scripts_transporters.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery.iphone.toggle.js"></script>
<!--[if lt IE 10]>
<script src="<?php echo $this->webroot;?>js/placeholder.js"></script>
<![endif]-->
<script>
$(document).ready(function(){

});
</script>
</body>
</html>