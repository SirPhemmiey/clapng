<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COSON Licensing Application Portal</title>

  <!-- CSS -->
  <!--   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500"> -->
  <link rel="stylesheet" href="<?php echo $this->webroot;?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $this->webroot;?>css/font-awesome.min.css">
  <link href="<?php echo $this->webroot;?>css/jquery.iphone.toggle.css" rel="stylesheet">
  <link href="<?php echo $this->webroot;?>css/animate.min.css" rel="stylesheet">
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
    <img src="<?php echo $this->webroot;?>img/1.jpg" alt="background-image">
  </div>

  <!-- Top menu -->
  <nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
          <span class="sr-only">Toggle navigation</span>Menu <i class="fa fa-bars"></i>
        </button>
        <a href="<?php echo $this->webroot;?>" class="navbar-brand">COSON Licencing Application Portal</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="top-navbar-1">
        <ul class="nav navbar-nav navbar-right">
          <?php if($this->Session->check('Transporter.email')){?>
          <li>
            <a class="links" href="<?php echo $this->webroot;?>transporters/home">Home</a>
          </li>
          <?php }?>
          <li>
            <a class="links" href="<?php echo $this->webroot;?>Contacts">Contact</a>
          </li>
          <li>
            <a class="links" href="<?php echo $this->webroot;?>Guidelines">Guidelines</a>
          </li>
          <?php if(!$this->Session->check('Transporter.email')){?>
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
          <h1 class="section-heading"><strong>COSON </strong><strong>L</strong>icensing <strong>A</strong>pplication <strong>P</strong>ortal</h1>
          <hr class="primary">
          <div class="description">
            <p>
              <i class="fa fa-quote-left fa-pull-left quote" aria-hidden="true"></i>
              Music is intellectual property and the playing of music in a business or public setting without a music copyright licence is unlawful and this can lead to huge damages for copyright infringement. 
              In order to make it easy and stress free for users of music to get the licence required to legally play music in their business environment and facilities and pay for the use of the music without leaving the comfort of their businesses, <strong>COSON</strong> welcomes you to <strong>CLAP!</strong> the easy to use licensing portal.
              A few clicks on this portal and in less than five minutes, you are on your way to complying with the law and obtaining a music copyright licence. The COSON music copyright licence gives you the freedom to play both local and foreign music in your business as you like,for your enjoyment and that of your customers. 
              The royalty collected from the licensing is distribute to those who make the music. By obtaining a music copyright licence, you make it possible for those who make good music to make more good music for you to enjoy.
              Please click <a href="<?php echo $this->webroot;?>guidelines" class="links">here</a> for a guide on how to use the portal
              <i class="fa fa-quote-right fa-pull-right quote" aria-hidden="true"></i>
            </p>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3  form-box">
<!-- <p style="color:white;"><?php 
$new_date = strtotime("+1day today");
echo date('d-m-Y', $new_date);?></p> -->
<div class="row" id="emptyCategory" style="display:none;"></div>
<button class="btn btn-lg animated rubberBand" data-toggle="modal" data-target="#signUpModal">Get Licence</button>
<!--The Sign up Modal-->
<div class="modal fade" id="signUpModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;</button>  
        </div>
        <div class="modal-body">

          <h4>Easy steps to get a COSON music copyright licence and to save your business from legal palaver</h4>
          <?php if(!$this->Session->check('Transporter.email')){?>
          <p>Already a user? <a data-toggle="modal" class="link" data-target="#signInModal" data-dismiss="modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="color:#347c17;">Sign In</a></p>
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

<form role="form" action="<?php echo $this->webroot;?>transporters/signUp" method="post" class="f1">

  <fieldset>
    <h4>Your Personal Information </h4>
    <div class="form-group">
      <label class="sr-only" for="f1-full-name">Customer Name</label>
      <input type="text" placeholder="Your name here..." class="f1-full-name form-control" id="full_name_transporters" name="data[Transporter][full_name]" value="<?php if($this->Session->check('Transporter.full_name')){ $name = $this->Session->read('Transporter.full_name'); echo $name;}?>">
    </div>

    <div class="form-group">
      <label class="sr-only" for="f1-email-address">Email address</label>
      <input type="email" placeholder="Email address..." class="f1-email-transport form-control" id="email_transporters" name="data[Transporter][email]" value="<?php if($this->Session->check('Transporter.email')){ $email = $this->Session->read('Transporter.email'); echo $email;}?>">
    </div>
    <div class="form-group">
      <label class="sr-only" for="f1-phone-number">Phone Number</label>
      <input type="number" placeholder="Phone number..." class="f1-phone-transport form-control" id="phone_number_transporters" name="data[Transporter][phone_number]" value="<?php if($this->Session->check('Transporter.phone_number')){ $phone_number = $this->Session->read('Transporter.phone_number'); echo $phone_number;}?>">
    </div>
    <div class="form-group">
      <label class="sr-only" for="f1-last-name">Password</label>
      <input type="password" name="data[Transporter][password]" placeholder="Password..." class="f1-password form-control" id="password-1">
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
    <h4>Please select your vehicle type</h4>
    <div class="form-group">
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
      <button type="button" class="btn btn-previous" id="specialPrev">Previous <i class="fa fa-arrow-left"></i> </button>
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
      <span id="cat"></span><span id="renew"></span><span id="rand"><?php if(isset($getNumber)){echo $getNumber;} else{"";}?></span>
    </div>
    <input type="hidden" name="data[Transporter][licence_id]" value="" id="inputTransId" />
    <input type="hidden" name="data[Transporter][resetkey]">
  </div>
  <div class="row">
    <label class="control-label col-md-4">Customer Name :</label> <div class="col-md-8 summaryName">

  </div>
</div>
<div class="row">
  <label class="col-md-4 control-label">Email Address :</label> <div class="col-md-8 summaryEmail">

</div>
</div>
<div class="row">
  <label class="col-md-4 control-label">Phone Number :</label> <div class="col-md-8 summaryPhone">

</div>
</div>
<div class="row">
  <label class="col-md-4 control-label">Licence Category :</label> <div class="col-md-8 summaryCategory">

</div>
<input type="hidden" name="data[Transporter][licence_category]" value="" id="inputCategory" />
</div>
<div class="row">
  <label class="col-md-4 control-label">Subcription Plan :</label> <div class="col-md-8 summaryPlan">

</div>
<input type="hidden" name="data[Transporter][subscription_plan]" value="" id="inputPlan" />
</div>
<div class="row">
  <label class="col-md-4 control-label">Duration of Plan :</label> <div class="col-md-8 summaryDuration">

</div>
<input type="hidden" name="data[Transporter][duration]" value="" id="inputDuration" />
</div>
<div class="row">
  <label class="col-md-4 control-label">Renewal Date : </label> <div class="col-md-8 summaryRenewal"></div>
  <input type="hidden" name="data[Transporter][renewal_date]" value="" id="inputRenewal" />
</div>
<div class="row">
  <label class="col-md-4 control-label">Total Amount : </label> <div class="col-md-8 summaryTotal">

</div>
<input type="hidden" name="data[Transporter][amount_paid]" value="" id="inputAmount" />
</div>
</div>
<div class="f1-buttons">
  <button type="button" class="btn btn-previous">Previous <i class="fa fa-arrow-left"></i></button>
  <button type="submit" class="btn btn-submit" id="makePayment">Make Payment</button>
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
                <form method="post" action="<?php echo $this->webroot;?>transporters/login" class="form-horizontal" role="form">
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
                        <input type="email" id="" name="email" class="form-control" data-toggle="tooltip" data-placement="top" title="Email here" placeholder="Username..." required>
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
                        <a href="<?php echo $this->webroot;?>transporters/forgotPassword" class="link">Forgot password?</a>
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
</div>
</div>

<!-- Javascript -->
<script src="<?php echo $this->webroot;?>js/jquery-2.1.1.min.js"></script>
<script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery.backstretch.min.js"></script>
<script src="<?php echo $this->webroot;?>js/scripts_transporters.js"></script>
<script src="<?php echo $this->webroot;?>js/jquery-ui-1.9.2.js"></script>
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