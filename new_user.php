<!DOCTYPE html>
<html lang="en">
<head>
<title>The Legacy bank</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="E-Banking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" rel="stylesheet">   <!-- font-awesome icons --> 
<link href="css/sample.css" rel="stylesheet">
<!-- //Custom Theme files -->  
<!-- js --> 
	<script src="js/jquery-2.2.3.min.js"></script>
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- //web-fonts --> 
</head>
<body> 
	<!-- header -->
<div class="headerw3-agile"> 
		<div class="header-w3mdl"><!-- header-two --> 
			<div class="container"> 
				<div class="logo">
					<h1><a href="Home.html"><img src="images/logo1.png" alt="logo"/></a></h1> 
				</div> 
				<div class="clearfix"> </div> 
			</div>	
		</div>	
	</div>	
	<!-- //header -->  
	<!-- banner -->
	<div class="banner">
		<div class="header-nav"><!-- header-three --> 	
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						Menu 
					</button> 
				</div>
				<!-- top-nav -->
				<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
					<div class="topnav-right">
					<ul class="nav navbar-nav">
						<li><a href="Home.html" class="active">Home</a></li>
						<li><a href="#" class="scroll">About</a></li>    
						<li><a href="#" class="scroll">services</a></li>    
						<li><a href="contact.html" class="scroll">Contact Us</a></li>
						<form class="search-box">
							<input type="text" placeholder="search">
							<button class="button1">search</button>
						</form>  
					</ul>
					</div>
					<div class="clearfix"> </div>	
				</div>
			</nav>
		</div>
		<br><marquee><h1>New user-Registration form</h1></marquee><br>
		<div class="registration">
			<form id="registration1" method="post" action="sign-in.php">
			<h2>Form-31</h2>
			<table>
			<tr>
			<td>
			<label for="atype" class="block">Account type:</label><select name="atype" id="tex">
			<option>select</option>
			<option>SAVINGS</option>
			<option>CURRENT</option>
			</select><br>
			</td>
			<td>
			<label for="fname" class="block">First name:</label><input type="text" name="fname" id="tex" placeholder="enter u r first name"><br>
			</td></tr>
			<tr>
			<td>
			<label for="mname" class="block">Middle name:</label><input type="text" name="mname" id="tex" placeholder="enter u r first name"><br>
			</td>
			<td>
			<label for="lname" class="block">Last name:</label><input type="text" name="lname" id="tex" placeholder="enter u r last name"><br>
			</td></tr>
			<tr>
			<td>
			<label for="gender" class="block">Gender:</label><select name="gender" id="tex">
			<option>select</option>
			<option>Male</option>
			<option>Female</option>
			<option>Others</option>
			</select><br>
			</td>
			<td>
			<label for="dob" class="block">Date of Birth:</label><input type="date" name="dob" id="tex" placeholder="enter u r email"><br>
			</td></tr>
			<tr>
			<td>
			<label for="gname" class="block">Father/Guradian name:</label><input type="text" name="f/gname" id="tex" placeholder="enter u r father/guardian name"><br>
			</td>
			<td>
			<label for="address" class="block">Address:</label><textarea id="tex1" rows="3" cols="20" name="address" placeholder="enter address here"></textarea><br>
			</td></tr>
			<tr>
			<td>
			<label for="mobile" class="block">Mobile number:</label><select id="num">
			<option>+91</option>
			<option>+92</option>
			<option>+93</option>
			<option>+94</option>
			</select><input type="number" id="tex" name="mobile" placeholder="enter mobile number"><br>
			</td>
			<td>
			<label for="email" class="block">Email id:</label><input type="email" id="tex" name="email" placeholder="enter email id"><br>
			</td></tr>
			<tr>
			<td>
			<label for="work" class="block">Work:</label><select id="tex" name="work">
			<option>select</option>
			<option>Farmer</option>
			<option>Engineer</option>
			<option>Doctor</option>
			<option>Student</option>
			<option>Others</option>
			</select><br>
			</td>
			<td>
			<label for="password" class="block">Password</label><input type="password" id="tex" name="pass" placeholder="enter password"><br><br>
			</td></tr>
			<tr><td>
			<label for="pan" class="block">PAN number:</label><input type="text" id="tex" name="pan" placeholder="enter pan number"><br><br>
			</td>
			<td>
			<label for="aadhar" class="block">Aadhar Number:</label><input type="text" id="tex" name="aadhar" placeholder="enter 16 digit aadhar numbeer"><br>
			</td></tr></table>
			<input type="checkbox" id="check"><span id="check" required="">  I agree all the terms and conditions</span>
			<input class="btn3" type="reset" value="Reset">
			<input class="btn3" type="submit" value="Create Account"><br>
			Already have an account?<a class="btn btn-second" href="sign_in.html">sign-in</a>
			</form>
		</div>
	</div>
	<!--services-->
	<div class="w3ls-section services">
		<div class="container">
			<div class="services-left">
				<h4 class="title">online banking</h4>
				<h5>any time,anywhere.</h5>
				<p class="data">Always Update your PC with latest anti-virus and spy ware software regularly. Always ensure that the page displayed is a https://</p>
				<div class="more">
					<a href="#" data-toggle="modal" data-target="#myModal"> Read More</a>
				</div>
			</div>
			<div class="services-right">
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-lock" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
						<h5>safe & secure</h5>
						<p>Expertise you need. Service you deserve.</p>
					</div>	
					<div class="clearfix"></div>
				</div>
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-clock-o" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
						<h5>save time</h5>
						<p>Connection all your banking needs.</p>
					</div>	
					<div class="clearfix"></div>
				</div>
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-gg" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">	
						<h5>transfer money</h5>
						<p>Simpler. Faster. Friendlier.</p>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-credit-card-alt" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">	
						<h5>pay bills</h5>
						<p>Pay every bills at your fingertip.</p>
					</div>	
					<div class="clearfix"> </div>
				</div>
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-shopping-cart" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
						<h5>Shop Online</h5>
						<p>Bank less. Shop more.</p>
					</div>	
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//services-->
<!--footer-->
<div class="agile-footer w3ls-section">
	<div class="container">
		<div class="col-md-7 list-footer">
		  <ul class="footer-nav">
				<li><a  href="Home.html">Home</a></li>
				<li><a  href="#">About</a></li>
				<li><a  href="#">Services</a></li>
				<li><a href="contact.html">Contact Us</a></li>
		  </ul>
		  <p>The modern banking system manufactures money out of nothing. Investment banking fees are geared towards success.</p>
		</div>
		<div class="col-md-5 agileinfo-sub">
			<h6>Click the link below to start the subscription service</h6>
			<a href="#" data-toggle="modal" data-target="#myModal1">subscribe</a>
		</div>
		<div class="clearfix"></div>
     </div>
</div>	 
<div class="w3_agile-copyright text-center">
		<p>© 2017 The Legacy Bank. All rights reserved | Design by SHAN</p>
	</div>

<!--//footer-->	

	<!-- modal-sign -->
	<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<img src="images/logo.png" alt="logo"/>
				</div>
				<div class="modal-body">
					<img src="images/modal.jpg" class="img-responsive" alt="image">
					<p>Fusce et congue nibh, ut ullamcorper magna. Donec ac massa tincidunt, fringilla sapien vel, tempus massa. Vestibulum felis leo, tincidunt sit amet tristique accumsan. In vitae dapibus metus. Donec nec massa non nulla mattis aliquam egestas et mi.</p>
				</div>
			</div>
		</div>

		</div>
	</div>
	<!-- modal-sign -->
	<div class="modal bnr-modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<img src="images/logo1.png" alt="logo"/>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body modal-spa">
					<p>The Legacy Bank's email newsletter provides subscribers with helpful articles on important issues in the banking industry, as well as news about events and more! To sign up for the newsletter, fill the below form.</p>
					<form class=" wthree-subsribe" action="#" method="post"> 
						<input type="text" name="name" placeholder="Your Name" required="">
						<input type="email" name="email" placeholder="your Email" required="">
						<input type="submit" value="SignUp"> 
						<div class="clearfix"></div>
					</form>
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal-sign -->    
	<!-- //banner -->
		<!-- //banner-text -->  
	<!-- //banner -->
	<!-- banner Slider starts Here -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 3
		  $("#slider3").responsiveSlides({
			auto:true,
			pager:false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
	
		});
	</script>
	<script src="js/SmoothScroll.min.js"></script>
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>

</body>
</html>
