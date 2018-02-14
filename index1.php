<!doctype html>
<html lang="en">
<head>
	<title>Practice</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/styles.css">
	
</head>
<body>
<!-- top_navbar -->
<nav class="navbar navbar-inverse" style="margin-bottom:0px;position:relative;">
	<div class="container-fluid">
		<!-- header -->
		<div class="navbar-header">
			<button style="float:left;margin:5px;" class="btn" id="menu">
				Menu
			</button>
			<img src="icons/vlc.png" alt="logo" style="float:left;">
			<a href="#" class="navbar-brand">WAPBANE</a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		
		<!-- menu -->
		<div class="collapse navbar-collapse" id="myNavBar">
			<ul class="nav navbar-nav nav-tabs">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
				
				<!-- dropdown -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						My Profile <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Friends</a></li>
						<li><a href="#">Photos</a></li>
						<li><a href="#">Settings</a></li>
					</ul>
				</li>
			</ul>
			
			<!-- right_align -->
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#" data-toggle="modal" data-target="#logIn">
						Log In
					</a>
				</li>
			</ul>
			
		</div>
		
	</div>
</nav>
	
	<!-- log-in_modal -->
	<div class="modal fade" id="logIn">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- header -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title text-center">Log In</h4>
				</div>
				
				<!-- body -->
				<div class="modal-body">
					<form role="form">
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password">
						</div>
					</form>
				</div>
				
				<!-- footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-primary btn-block">Log In</button>
				</div>
				
			</div>
		</div>
	</div>
	
<div id="wrapper" style="margin-bottom:0px;">	
	
	<!-- sidebar -->
	<div id="sidebarWrapper">
		<ul class="sidebar">
			<li><a href="#">Account</a></li>
			<li><a href="#">Settings</a></li>
			<li><a href="#">Log Out</a></li>
		</ul>
	</div>
	
	<!-- main_content -->
	<div id="mainContentWrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<?php include 'img.slider.php' ?>
					<h3>Sidebar Toggle Design</h3>
					<p>I love bacon sandwich and designing all kinds of crap.
					I love bacon sandwich and designing all kinds of crap.
					I love bacon sandwich and designing all kinds of crap.
					I love bacon sandwich and designing all kinds of crap.
					I love bacon sandwich and designing all kinds of crap.
					I love bacon sandwich and designing all kinds of crap.
					I love bacon sandwich and designing all kinds of crap.</p>
				</div>
			</div>
		</div>
	</div>	

</div>

	
	<script src="jquery-3.3.1/jquery-3.3.1.min.js"></script>
	<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
	<script src="js/scripts.js"></script>

</body>
</html>
