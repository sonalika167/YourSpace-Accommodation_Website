<html>
<head>
<title>YOUR SPACE</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
	<div class="banner-top">
			<div class="social-bnr-agileits">
				<ul class="social-icons3">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li> 
							</ul>
			</div>
			<div class="contact-bnr-w3-agile">
				<ul>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">INFO@yourspace.COM</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+91-9877332658</li>	
					<li class="s-bar">
						<div class="search">
						<i class="fas fa-search"></i>
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="search" name="Search" placeholder=" " required=" " />
									<input type="submit" value="Search">
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="main.php">YOUR <span>SPACE</span><p class="logo_w3l_agile_caption">   Your Perfect Space </p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="main.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="about.php" class="menu__link">About</a></li>						
							<li class="menu__item"><a href="gallery.php" class="menu__link">Gallery</a></li>
							<li class="menu__item"><a href="rooms.php"class="menu__link">Rooms</a></li>
							<li class="menu__item"><a href="signup.php" class="menu__link scroll">Signup</a></li>
							<li class="menu__item"><a href="login.php" class="menu__link scroll">Reservations</a></li>								
							<li class="menu__item"><a href="contact.php" class="menu__link scroll">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>




<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Bookings Here</h4>
				<p class="contact-agile2">Fill up the booking details</p>
				<form  method="post" action="reservationsuccess.php">

					<?php
						if(isset($_GET['error']))
							{
								echo "<span style='color:green;font-weight: bold;font-size:30px;'>".$_GET['error']."</span><br>";
							}
					?>


					<div class="control-group form-group">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name"  required >
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone"required >
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email"  required >
							<p class="help-block"></p>
						
                    </div>

<div class="control-group form-group">
            <div class="row">
            <div class="col-xs-4">
            	<label style="font-size:16px;color: white;">Rooms required</label><br>
              <select class="form-control" name="room" style="font-size:18px;">		
			  
                <option style="font-size:20px;">No. of Rooms</option><br><br>
				<option style="font-size:20px;">1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>
			
            <div class="col-xs-6">
            				<label style="font-size:16px;color:white">Members going to stay</label><br>
            <select class="form-control" name="member"style="font-size:18px;">
              <option style="font-size:20px;">No. of members</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div></div>
        </div>






		<div class="control-group form-group">
			<label style="font-size:16px; color: white">The Date of CHECK-IN</label><br>
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control" name="day" style="font-size:16px;">
                <option>Date</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				
			  </select>
			</div>
			<div class="col-xs-4">
              <select class="form-control" name="month" style="font-size:16px;">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June(06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control" name="year" style="font-size:16px;">
			  <option>Year</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
              </select>
            </div>
          </div>
        </div>

		<div class="control-group form-group">
            <div class="row">
            <label style="font-size:18px;color: white;"> Service with Price-check <a href="rooms.php">rooms</a> for details</label>
            <div class="col-xs-5">
				<select class="form-control" name="type"  style="font-size:18px;">
				<option>Price per Day</option>
                <option value="1500 IN">Type A with 1500 IN</option>
                <option value="1800 IN">Type B with 1800 IN</option>
                <option value="2200 IN">Type C with 2200 IN</option>
                <option value="3200 IN">Type D with 3200 IN</option>                
				</select>
				</div>
				</div>
				</div>



                    
                    <input type="submit" name="sub" value="Submit" class="btn btn-primary">	
				</form>

			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+91-9877332658</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@YOURSPACE.COM</a></p>
			<p class="contact-agile1"><strong>Address :</strong> Lovely Professional University, Phagwara, Punjab, India</p>
																
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								
							</ul>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.7905052320443!2d-77.84987248482734!3d39.586871613613056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c9f6a80ccf0661%3A0x7210426c67abc40!2sVirginia+Welcome+Center%2FSafety+Rest+Area!5e0!3m2!1sen!2sin!4v1485760915662" ></iframe>
		</div>
		<div class="clearfix"></div>
	</div>
</section>



	 <p>&nbsp</p>
			<div class="copy">
		        <p>© 2020 YOUR SPACE . All Rights Reserved | Design by <a href="index.php">YOUR SPACE</a> </p>
		    </div>

</body>
</html>