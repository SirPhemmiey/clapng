<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>User - COSON Licensing Application Platform</title>
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
<link rel="stylesheet" href="<?php echo $this->webroot;?>css/styleOri.css">
  <script src="<?php echo $this->webroot;?>js/moment.js"></script>
    <script src="<?php echo $this->webroot;?>js/moment-with-locales.js"></script>

<!-- The HTML5 shim, for IE6-8 support of HTML5 elements-->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- The fav icon -->
<link rel="shortcut icon" href="<?php echo $this->webroot;?>img/favicon-16x16.png">
</head>

<body>
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">

<div class="navbar-inner">
<button type="button" class="navbar-toggle pull-left animated flip">
<span class="sr-only">Toggle navigation</span>Menu <i class="fa fa-bars"></i>
</button>
<a class="navbar-brand" href="<?php echo $this->webroot;?>"> <img alt="The logo" src="" class="hidden-xs"/>
<span>COSON Licensing Application Platform - Users</span></a>

<!-- user dropdown starts -->
<div class="btn-group pull-right">
<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" id="dropdownMenu">
<i class="fa fa-user"></i><span class="hidden-sm hidden-xs"> <?php
$username = $this->Session->read('User.email_address');
if(isset($username)){echo $username;}?></span>
<span class="caret"></span>
</button>
<ul class="dropdown-menu" role="menu"  aria-labelledby="dropdownMenu">
<li role="presentation"><a class="link" role="menuitem" href="<?php $this->webroot;?>users/profile">Profile</a></li>
<li role="presentation"><a class="link" role="menuitem" href="<?php $this->webroot;?>users/changePassword">Change Password</a></li>
<li class="divider"></li>
<li role="presentation"><a class="link" role="menuitem" href="<?php echo $this->webroot;?>users/logout">Logout</a></li>
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
      <li><a class="link" href="<?php echo $this->webroot;?>users/home"><span> Main</span></a>
      </li>
      <li><a class="link" href="<?php echo $this->webroot;?>users/viewTransactions"><span> Purchases History</span></a>
      </li>
        <li><a class="link" href="<?php echo $this->webroot;?>users/profile"><span> Profile</span></a>
        </li>
        <li><a class="link" href="<?php echo $this->webroot;?>users/changePassword"><span> Change Password</span></a>
</li>
         <li><a class="link" data-toggle="modal" data-target="#sign" style="cursor:pointer;"><span> Get your licence </span></a>
</li>
        <li><a class="link" href="<?php echo $this->webroot;?>users/logout"><span> Log out</span></a>
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
<div class="col-lg-12 col-md-12">
  <h4><p>Hey welcome here, this is where you as a user can do alot of things.
  Kindly browse through to perform a host of functions.</p></h4>
</div>
</div>
</div>
</div>
</div>



</div> <!-- content ends -->
<footer class="row">
<p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a class="link" href="http://playspread.com" target="_blank" style="text-align:center;">Designed by Playspread</a> 2016</p>
</footer>

</div><!--/.fluid-container-->




<div class="modal fade" id="sign" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
&times;</button>
<h5 class="panel-title"> Get your licence from Coson Licencing Application Portal</h5>
</div>
<div class="modal-body">

<h3 style='text-align:center;'>Welcome Back!</h3>

<form role="form" action="<?php echo $this->webroot;?>users/returnUser" method="post" id="licence" class="f1">

<fieldset>
<h4>Your Company and Personal Information </h4>
  
    <div class="form-group">
        <label class="sr-only" for="f1-company-name">Company Name</label>
        <input type="text" disabled="disabled" class="f1-company-name form-control" id="company_name"  value="<?php if($this->Session->check('User.company_name')){ $name = $this->Session->read('User.company_name'); echo $name;}?>">
    </div>
    <div class="form-group">
        <label class="sr-only" for="f1-contact-person">Contact Person</label>
        <input type="text" disabled="disabled" class="f1-contact-person form-control" id="contact_person" value="<?php if($this->Session->check('User.contact_person')){ $contact_person = $this->Session->read('User.contact_person'); echo $contact_person;}?>">
    </div>

    <div class="form-group">
        <label class="sr-only" for="f1-email-address">Email address</label>
        <input type="email" disabled="disabled" class="f1-last-name form-control" id="email_address" value="<?php if($this->Session->check('User.email_address')){ $email = $this->Session->read('User.email_address'); echo $email;}?>">
    </div>
    <div class="form-group">
        <label class="sr-only" for="f1-phone-number">Phone Number</label>
        <input type="number" disabled="disabled" class="f1-last-name form-control" id="phone_number" value="<?php if($this->Session->check('User.phone_number')){ $phone_number = $this->Session->read('User.phone_number'); echo $phone_number;}?>">
    </div>
<div class="f1-buttons" style="text-align:center;">
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
<div class="numberCircle">
<div class="height_fix"></div>
<div class="content" id="amountSpaceClubs"></div>
</div>
</div>
</div>
<div class="form-group" id="clubsHowMany" style="display:none;">
<div class="col-md-7">
<label class="control-label">How many <span class="userCat">Category</span> do you have?</label>
<input type="number" value="1" min="1" required name="" id="clubsNumber" class="form-control" />
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
<div class="form-group" id="roadshowsHowMany" style="display:none;">
<div class="col-md-7">
<label class="control-label">How many <span class="userCat">Category</span> (s) do you have?</label>
<input type="number" value="1" min="1" required name="" id="roadshowsNumber" class="form-control" />
</div>
</div>
</div><!--End row-->
<div class="row">
<div class="col-md-8">
<p>Notice : Please note that <strong><b>Daily</b></strong> is the default plan for Roadshows</p>
</div>
</div>
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
<div class="col-md-5">
<div class="numberCircle">
<div class="height_fix"></div>
  <div class="content" id="amountSpaceSalon"></div>
</div>
</div>
</div>
<div class="form-group" id="salonHowMany" style="display:none;">
<div class="col-md-7">
<label class="control-label">How many <span class="userCat">Category</span> (s) do you have?</label>
<input type="number" value="1" min="1" required name="" id="salonNumber" class="form-control" />
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
<div class="form-group">
<h4>What type of hotel do you have?</h4>
<select name="" id="hotelType" class="form-control">
<option>Please select your hotel type...</option>
<option value="97.90" id="hotelInternational">International</option>
<option value="48.00" id="hotelNational">National</option>
<option value="26.70" id="hotelUrban">Urban</option>
</select>
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
<div class="col-md-5">
<div class="numberCircle">
<div class="height_fix"></div>
<div class="content" id="amountSpaceHotels"></div>
</div>
</div>
</div>
<div class="form-group" id="hotelsHowMany" style="display:none;">
<div class="col-md-7">
<label class="control-label">How many <span class="userCat">Category</span> (s) do you have?</label>
<input type="number" value="1" min="1" required name="" id="hotelsNumber" class="form-control" />
</div>
</div>
</div>
<!-- </div>End row -->

<div class="row">
<div class="form-group">
<label class="control-label col-md-4">Room Rates :</label>
<div class="col-md-4" id="roomRates"></div>
</div>
</div>


<div class="row">
<div class="form-group">
<label class="control-label col-md-4">Bar and Restaurants Rate :</label>
<div class="col-md-4" id="barAndResRates"></div>
</div>
</div>

<div class="row">
<div class="form-group">
<label class="control-label col-md-4">Event Hall Rate :</label>
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
<div class="col-md-5">
<div class="numberCircle">
<div class="height_fix"></div>
<div class="content" id="amountSpaceExhibition"></div>
</div>
</div>
</div>
<div class="form-group" id="exhibitionHowMany" style="display:none;">
<div class="col-md-7">
<label class="control-label">How many <span class="userCat">Category</span> (s) do you have?</label>
<input type="number" value="1" min="1" required name="" id="exhibitionNumber" class="form-control" />
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
<div class="col-md-5">
<div class="numberCircle">
<div class="height_fix"></div>
<div class="content" id="amountSpaceFitness"></div>
</div>
</div>
</div>
<div class="form-group" id="fitnessHowMany" style="display:none;">
<label class="control-label col-md-5">How many <span class="userCat">Category</span> (s) do you have?</label>
<div class="col-md-7">
<input type="number" value="1" min="1" required name="" id="fitnessNumber" class="form-control" />
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
<div class="row" id="eventHowMany" style="display:none;">
<label class="control-label col-md-5">How many <span class="userCat">Category</span> (s) do you have?</label>
<div class="col-md-7">
<input type="number" value="1" min="1" required name="" id="eventNumber" class="form-control" />
</div>
</div>


<div class="row" id="divEventHowManyMonths" style="display:none;">
<div class="form-group">
<label class="control-label col-md-5">How many months would you like to pay for?</label>
<div class="col-md-7">
<input class="form-control" type="number" name="" min="1" value="1" id="eventHowManyMonths"></div>
</div>
</div>
<br />
<div class="row" id="divEventHowManyYears" style="display:none;">
<div class="form-group">
<label class="control-control col-md-5">How many years would you like to pay for?</label>
<div class="col-md-7">
<input class="form-control" type="number" name="" min="1" value="1" id="eventHowManyYears"></div>
</div>
</div>
<br />

<div class="row">
<div style="display:none;" id="dispYearMonthEvent">
<div class="form-group">
<div class="col-md-5">
<h4>Yearly : <span id="displayYearlyEvent"></span></h4>
<h4>Monthly : <span id="displayMonthlyEvent"></span></h4>
</div>
</div>
</div>
</div>

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

<div class="row"  style="display:none;" id="resHowMany">
<div class="form-group">
<label class="control-label col-md-5">How many <span class="userCat">Category</span> (s) do you have?</label>
<div class="col-md-7">
<input type="number" value="1" min="1" required name="" id="resNumber" class="form-control" />
</div>
</div>
</div>
<br />
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
<div class="row"  style="display:none;" id="mallsHowMany">
<div class="form-group">
<label class="control-label col-md-5">How many <span class="userCat">Category</span> (s) do you have?</label>
<div class="col-md-7">
<input type="number" value="1" min="1" required name="" id="mallsNumber" class="form-control" />
</div>
</div>
</div>
<br />
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
<div class="row"  style="display:none;" id="retailHowMany">
<div class="form-group">
<label class="control-label col-md-5">How many <span class="userCat">Category</span> (s) do you have?</label>
 <div class="col-md-7">
<input type="number" value="1" min="1" required name="" id="retailNumber" class="form-control" />
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
<div class="row"  style="display:none;" id="bankingHowMany">
<div class="form-group">
<label class="control-label col-md-5">How many <span class="userCat">Category</span> (s) do you have?</label>
  <div class="col-md-7">
<input type="number" value="1" min="1" required name="" id="bankingNumber" class="form-control" />
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
<div class="row"  style="display:none;" id="officeHowMany">
<div class="form-group">
<label class="control-label col-md-5">How many <span class="userCat">Category</span> (s) do you have?</label>
 <div class="col-md-7">
<input type="number" value="1" min="1" required name="" id="officeNumber" class="form-control" />
</div>
</div>
</div>
<br />
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

<div class="row divAmountSpaceTaxi" style="display:none;">
<div class="form-group">
<div class="col-md-5">
<div class="numberCircle">
<div class="height_fix"></div>
<div class="content" id="amountSpaceTaxi"></div>
</div>
</div>
</div>
<div class="form-group" id="taxiHowMany" style="display:none;">
<div class="col-md-7">
<label class="control-label">How many <span class="vehicle">vehicle</span> (s) do you have?</label>
<input type="number" value="1" min="1" required name="" id="taxiNumber" class="form-control" />
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
<div class="form-group" id="bigBusHowMany" style="display:none;">
<div class="col-md-7">
<label class="control-label">How many <span class="vehicle">vehicle</span> (s) do you have?</label>
<input type="number" value="1" min="1" required name="" id="bigBusNumber" class="form-control" />
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
<div class="form-group" id="busHowMany" style="display:none;">
<div class="col-md-7">
<label class="control-label">How many <span class="vehicle">vehicle</span> (s) do you have?</label>
<input type="number" value="1" min="1" required name="" id="busNumber" class="form-control" />
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
<div class="form-group" id="miniCoachesHowMany" style="display:none;">
<div class="col-md-7">
<label class="control-label">How many <span class="vehicle">vehicle</span> (s) do you have?</label>
<input type="number" value="1" min="1" required name="" id="miniCoachesNumber" class="form-control" />
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
<div class="form-group" id="luxiriousBusesHowMany" style="display:none;">
<div class="col-md-7">
<label class="control-label">How many <span class="vehicle">vehicle</span> (s) do you have?</label>
<input type="number" value="1" min="1" required name="" id="luxiriousBusesNumber" class="form-control" />
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
<div class="form-group" id="coorporateVehiclesHowMany" style="display:none;">
<div class="col-md-7">
<label class="control-label">How many <span class="vehicle">vehicle</span> (s) do you have?</label>
<input type="number" value="1" min="1" required name="" id="coorporateVehiclesNumber" class="form-control" />
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
<div class="form-group" id="generalHowMany" style="display:none;">
<div class="col-md-7">
<label class="control-label">How many <span class="vehicle">vehicle</span> (s) do you have?</label>
<input type="number" value="1" min="1" required name="" id="generalNumber" class="form-control" />
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
                    <label class="control-label col-md-5">Licence Id :</label> <div id="transId" class="col-md-6">
                    <span id="cat"></span><span id="renew"></span><span id="rand"><?php if(isset($getNumber)){echo $getNumber;}?></span>
                    </div>
                    <input type="hidden" name="data[Payment][licence_id]" value="" id="inputTransId" />
                </div>
                <div class="row">
                    <label class="control-label col-md-5">Company Name :</label> <div class="col-md-6" id="summaryName">

                    </div>
                </div>
                <div class="row">
                    <label class="control-label col-md-5">Contact Person :</label> <div class="col-md-6" id="summaryContact">

                    </div>
                </div>
                <div class="row">
                    <label class="col-md-5 control-label">Email Address :</label> <div class="col-md-6" id="summaryEmail">

                    </div>
                </div>
                <div class="row">
                    <label class="col-md-5 control-label">Phone Number :</label> <div class="col-md-6" id="summaryPhone">

                    </div>
                </div>
                <div class="row">
                    <label class="col-md-5 control-label">Licence Category :</label> <div class="col-md-6 summaryCategory" id="summaryCategory">

                    </div>
                    <input type="hidden" name="data[Payment][licence_category]" value="" id="inputCategory" />
                </div>
                <div class="row" id="numberOfVehicle" style="display:none;">
                    <label class="col-md-5 control-label">Number of <span class="vehicle"> vehicle</span>(s) :</label> <div class="col-md-6 summaryVehiclesNumber" id="summaryVehiclesNumber">

                    </div>
                    <input type="hidden" name="data[Payment][number_of_vehicles]" value="" id="inputVehiclesNumber" />
                </div>
                <div class="row" id="numberOfCategory" style="display:none;">
                    <label class="col-md-5 control-label">Number of <span class="userCat"> Category</span>(s) :</label> <div class="col-md-6 summaryUserCategoryNumber" id="summaryUserCategoryNumber">

                    </div>
                    <input type="hidden" name="data[Payment][number_of_centres]" value="" id="inputUserCategoryNumber" />
                </div>
                <div class="row">
                    <label class="col-md-5 control-label">Subcription Plan :</label> <div class="col-md-6 summaryPlan" id="summaryPlan">

                    </div>
                    <input type="hidden" name="data[Payment][subscription_plan]" value="" id="inputPlan" />
                </div>
                <div class="row">
                    <label class="col-md-5 control-label">Duration of Plan :</label> <div class="col-md-6 summaryDuration" id="summaryDuration">

                    </div>
                    <input type="hidden" name="data[Payment][duration]" value="" id="inputDuration" />
                </div>
                <div class="row">
                    <label class="col-md-5 control-label">Renewal Date : </label> <div class="col-md-6 summaryRenewal"></div>
                    <input type="hidden" name="data[Payment][renewal_date]" value="" id="inputRenewal" />
                </div>
            </div>
            <div class="row">
                <label class="col-md-5 control-label">Total Amount : </label> <div class="col-md-6 summaryTotal" id="summaryTotal">
                </div>
                <input type="hidden" name="data[Payment][amount_paid]" value="" id="inputAmount" />
            </div>
            <div class="f1-buttons">
                <button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i></button>
                <button type="submit" class="btn btn-submit" onclick="submit_form();">Make Payment</button>
                <img src="<?php echo $this->webroot ?>images/isw.png">
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

<!-- select or dropdown enhancer -->
<!-- <script src="bower_components/chosen/chosen.jquery.min.js"></script> -->

<!-- library for making tables responsive -->
<script src="<?php echo $this->webroot;?>js/jquery-2.1.1.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCcolYiTocCcfTdQhmmmlPXW9uzWvGj9tk"></script>
    <script src="<?php echo $this->webroot;?>js/owl.carousel.min.js"></script>
    <script src="<?php echo $this->webroot;?>js/mousescroll.js"></script>
    <script src="<?php echo $this->webroot;?>js/smoothscroll.js"></script>
    <script src="<?php echo $this->webroot;?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo $this->webroot;?>js/jquery.isotope.min.js"></script>
    <script src="<?php echo $this->webroot;?>js/jquery.inview.min.js"></script>
    <script src="<?php echo $this->webroot;?>js/wow.min.js"></script>
<script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery.iphone.toggle.js"></script>
<script src="<?php echo $this->webroot;?>js/main.js"></script>
<script src="<?php echo $this->webroot;?>js/scripts.js"></script>
<script src="<?php echo $this->webroot;?>js/scripts_transporters.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>js/webpay.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>js/cryptojssha512.js"></script>


<script>

 function makeid()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 7; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}

var check = makeid();


function pay(ref,amount,email){


amount=amount.replace(",",'');
final_amount = amount.replace(".",'');
amount = final_amount;
var customerid = 123;

var redirect = "https://www.clapng.com/makePayment/"+email;
var hashString = ref+"5722"+"101"+amount+redirect+"84BDB19F9F8BF395F2D4569F1089DA0830C2E8496402CBA1BDA4A5235B9A1FFD9E3538EBA4C12CF8BE7C31F6DB039688C274D4BB43593491DE9C5D0660319683";
var hash = CryptoJS.SHA512(hashString);
console.log(hashString);


  var iswPay = new IswPay({
        postUrl:"https://webpay.interswitchng.com/paydirect/pay",
        amount: amount,
        productId: "5722",
        transRef: ref,
        siteName: "Copyright Society of Nigeria",
        itemId: "101",
        customerId: customerid,
        siteRedirectUrl: redirect,
        currency: "NGN",
        hash: hash,
        onComplete : function (paymentResponse){
            console.log(paymentResponse);
            


        }

    });
 
    
    
    }


    function submit_form(){
//    $("#send_comment"+no).submit();
    
    var transRef =makeid();
    
    var amount = $("#inputAmount").val();
    var email = $("#email_address").val();
    
    $("#licence").on('submit',(function(e) {
       e.preventDefault(e);
       e.stopImmediatePropagation();
      var form = new FormData(this);
      form.append('trn_ref',transRef);



        $.ajax({
            url: "<?php echo $this->webroot;?>users/returnUser", // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: form, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,        // To send DOMDocument or non processed data file it is set to false
            success: function(html)   // A function to be called if request succeeds
            {
              

              pay(transRef,amount,email);
               
                      
            }

            });

        return false;




}));
}
      </script>
</body>
</body>
</html>
