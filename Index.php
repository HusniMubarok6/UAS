<?
/* Zetix Arch-Soft Inc. www.Zearch-Soft.Blogspot.com
 * @Copyright Copyright (C) 2017 CMS Zesoft Open Source, Inc. All Rights Reserved.
 * @License		GNU General Public License Version 2 Or Later; See LICENSE.TxT
 * Jeffri Gunawan Jeffrislackware@gmail.com
 */
 ?>
<html>
	<head>
		<Title>Dashboard CPanel</Title>
	</head>
	<?php
	if(!isset($_SESSION)){session_start();}
	error_reporting(0);
	require_once'../Library/Php/CSS.php';
	require_once'../Configuration/Configuration.php';
	require_once'../Library/Php/Session.php';
	require_once'../Library/Php/Variabel.php';
	if (!isset($_SESSION['Username'])){
	header('Location:Login.php');
	exit;
	}else{
	?>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				<!-- Logo -->
				<a href="" class="logo">
					<!-- Mini Logo For Sidebar Mini 50 X 50 Pixels -->
					<span class="logo-mini"><b>Z</b>S</span>
					<!-- Logo For Regular State And Mobile Devices -->
					<span class="logo-lg"><b>Ze-Soft</b>System</span>
				</a>
				<!-- Header Navbar Style Can Be Found In Header Less -->
				<nav class="navbar navbar-static-top">
					<!-- Sidebar Toggle Button -->
					<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
					</a>
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
						<?php include'Notification.php'; ?>
					</div>
				</nav>
			</header>
			<!-- Left Side Column. Contains The Logo And Sidebar -->
			<aside class="main-sidebar">
			<!-- Sidebar: Style Can Be Found In Sidebar Less -->
				<section class="sidebar">
					<!-- Sidebar User Panel -->
					<div class="user-panel">
						<div class="pull-left image"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode($SPhoto).'" class="img-circle" alt="User Image">'; ?></div>
						<div class="pull-left info"><p><?php echo $SAccess; ?></p>
							<a href="#"><i class="fa fa-circle text-success"></i><?php echo $SStatus; ?></a>
						</div>
					</div>
					<!-- Search Form -->
					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
								<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
					<!-- Search Form -->
					<?php include'Sidebar.php'; ?>
				</section>
			<!-- Sidebar -->
			</aside>
			<!-- Content Wrapper. Contains Page Content -->
			<div class="content-wrapper">
			<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1><?php /* echo $Title; */ ?><small>Version 1.6.0</small></h1>
					<?php include'Breadcrumb.php'; ?>
				</section>
				<!-- Main content -->
				<section class="content">
					<?php include'Content.php'; ?>
				</section>
				<!-- Content -->
			</div>
			<!-- Content Wrapper. Contains Page Content -->
			<footer class="main-footer">
				<?php include'Footer.php'; ?>
			</footer>
			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Create The Tabs Panes -->
				<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
					<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
					<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
				</ul>
				<!-- The Tab Panes -->
			</aside>
			<!-- Control Sidebar -->
			<!-- Add The Sidebar's Background. This Div Must Be Placed Immediately After The Control Sidebar -->
			<div class="control-sidebar-bg"></div>
		</div>
		<!-- Wrapper -->
	</body>
<?php }	require_once'../Library/Php/JS.php'; ?>
</html>