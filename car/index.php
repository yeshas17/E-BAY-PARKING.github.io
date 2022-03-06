<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>E-BAY PARKING</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">

	</head>

	<style type="text/css">
		.navbar { margin-bottom:0px !important; }
		.carousel-caption { margin-top:0px !important }
	</style>



	<body>

		<!-- begin whole content -->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<img src="img/12.jpeg" height="50" width="50"> &nbsp;
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="#" style="font-family: Times New Roman; font-size: 30px;">E-BAY PARKIG</a></li>
						</ul>

						<ul class="nav navbar-nav" style="font-family: Times New Roman;">
							<li class="active">
								<a href="index.php">Home</a>
							</li>
						</ul>
						
						<ul class="nav navbar-nav navbar-right" style="font-family: Times New Roman;">
							<li>
								<a href="login.php">
									Login
									<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
								</a>
							</li>

							<li>
								<?php include_once('goto-registration.php'); ?>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		<!-- end -->
		<div class="row">
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-id" data-slide-to="0" class=""></li>
					<li data-target="#carousel-id" data-slide-to="1" class=""></li>
					<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item">
						<center>
						<img src="img/5.jpg" style="height: 500px; width: 100%;">
						</center>
						<div class="container">
							<div class="carousel-caption">
								<h1>WE ARE AT NEW LOCATION</h1>
								<p>Available Now at Low Price. Booked Now :)</p>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Register today</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="img/8.jpeg" style="height: 500px; width: 100%;">
						<div class="container">
							<div class="carousel-caption">
								<h1>ADVANCE BOOKING</h1>
								<p>IT IS EASY TO BOOK YOUR VEHICAL PARKING BEFORE YOUR REACH YOUR DESTINATION</p>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
							</div>
						</div>
					</div>
					<div class="item active">
						<img src="img/13.jpeg" style="height: 500px; width: 100%;">
						<div class="container">
							<div class="carousel-caption">
								<h1>JAYANAGAR.</h1>
								<h2><p>We Make It Easy to Park & Go</p></h2>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>

		<br />
		<div class="row container-fluid">
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"><center>About Us</center></h3>
					</div>
					<div class="panel-body">
					E-Bay Parking provide innovative secure parking 
technology, our extensive experience and insight
of parking dyanamics helps us to improve the 
customer experience. It saves user time in search 
of parking space available in such a huge parking
area.The system provides a view of the parking 
spaces. It exculdes the need of human efforts for
managing parking spaces and also secure parking 
focuses in providing holistic end-to-end solution
for traffic and parking management.
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title"><center>Contact Us</center></h3>
					</div>
					<div class="panel-body">
						BANGLORE
						Municipal JAYANAGAR
						email : car@gmail.com
						mobile : +91 12345 78901
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title"><center>SERVICES</center></h3>
					</div>
					<div class="panel-body">
					WE DO PROVIDE A CHARGING POINT FOR E-VEHICEL(BRING YOU OUR PORTABLE CHARGER)

					</div>
				</div>
			</div>
		</div>
 		
 		<p>
 			<center>
 			
 			</center>
 		</p>
		
		<footer style="background-color: white;">
			<center>
				&copy; CERATER BY RAVI VISHAL Yeshas
			</center>
		</footer>

 		<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
 		<script src="bootstrap/js/dataTables.js"></script>
 		<script src="bootstrap/js/dataTables2.js"></script>
 		<script src="bootstrap/js/bootstrap.js"></script>

	</body>
</html>