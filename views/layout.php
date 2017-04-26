<!DOCTYPE html>

<html>
<head runat="server">
	<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link href="dist/css/AdminLTE.min.css" rel="stylesheet" />
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" />

	<!-- jQuery 2.2.3 -->
	<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
	<script src="plugins/jQueryUI/jquery-ui.js"></script>
</head>

<body class="hold-transition skin-red sidebar-mini">
	<div class="wrapper">
		
		<header class="main-header red-bg">
			<!-- Logo -->
			<a href="index2.html" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top red-bg">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
			    </a>
			    <div class="navbar-custom-menu">
        			<ul class="nav navbar-nav">
        				<li><a id="btnSignOut" type="button" class="btn btn-link"><i class="fa fa-sign-out"></i></a></li>
        			</ul>
      			</div>
			</nav>
		</header>

		<aside class="main-sidebar red">
			<section class="sidebar red">
				<ul class="sidebar-menu">
					<li>
						<a href="?controller=users&action=index"><i class="fa fa-users"></i><span>Users</span></a>						
					</li>
				</ul>
			</section>
		</aside>

		<div class="content-wrapper">
			<?php require_once("routes.php"); ?>
		</div>

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 1.0.0   
			</div>
			<strong>Copyright &copy; 2017 <a href="#">Dev Team</a>.</strong> All rights reserved.
		</footer>

		<div class="control-sidebar-bg"></div>
	</div>


	<!-- Bootstrap 3.3.6 -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- SlimScroll -->
	<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="plugins/fastclick/fastclick.min.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/app.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
</body>
</html>