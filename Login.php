<?php
if(!isset($_SESSION)){session_start();}
// error_reporting(0); //
if (isset($_SESSION['AdminZS'])){
	require_once'../Configuration/Configuration.php';
	require_once'../Library/Php/Session.php';
	header('location:Index.php?Url=Dashboard');
	exit;
}
?>
<html>
	<head>
		<Title>Admin Panel</Title>
	</head>
	<?php require_once'../Library/Php/CSS.php'; ?>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href=""><b>Ze-Soft</b>Hospital System</a>
			</div>
			<?php
				if (!isset($_SESSION['Log_Valid'])){$_SESSION['Log_Valid']=0;}
				$Jml=$_SESSION['Log_Valid'];
				/*Echo $Jml; */
				if ($Jml<5){
			?>
			<!-- Login Logo -->
			<div class="box box-primary box-solid">
				<div class="box-header with-border">
					<p class="box-title"><i class="fa fa-lock"></i>&nbsp;Login Ze-Soft Hospital System</p>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div>
				<div class="box-body">
					<form action="Valid.php" method="POST" name="LOGIN">
						<div class="form-group has-feedback">
							<input type="text" class="form-control" name="username" placeholder="Username">
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="password" class="form-control" name="password" placeholder="Password">
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<img src="../Library/Php/Captcha.php?date=<?php echo date('YmdHis');?>" />
							</div>
							<div class="col-xs-9">
								<div class="form-group has-feedback">
									<input type="text" class="form-control" name="Captcha" placeholder="Captcha">
									<span class="glyphicon glyphicon-qrcode form-control-feedback"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="checkbox icheck">
									<label><input type="checkbox"> Remember Me </label>
								</div>
							</div>
							<div class="col-xs-6">
								<button type="submit" class="btn btn-primary pull-right">Log In&nbsp;<i class="fa fa-unlock-alt"></i></button>
							</div>
						</div>
						<!-- Col -->
						<div class="box-footer">
							<center>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span> Aplikasi Sistem Rumah Sakit
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</center>
						</div>
						<!-- Col -->
					</form>
				</div>
				<?php }else{ ?>
				<!-- Login Logo -->
			<div class="box box-danger box-solid">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-shield"></i>&nbsp;Reset Account</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div>
				<div class="box-body">
					<form action="Reset.php" method="POST" name="RESET">
						<div class="form-group has-feedback">
							<input type="text" class="form-control" name="RSTusername" placeholder="Username">
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="email" class="form-control" name="RSTemail" placeholder="E-Mail">
							<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<img src="../Library/Php/Captcha.php?date=<?php echo date('YmdHis');?>" />
							</div>
							<div class="col-xs-9">
								<div class="form-group has-feedback">
									<input type="text" class="form-control" name="Captcha" placeholder="Captcha">
									<span class="glyphicon glyphicon-qrcode form-control-feedback"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="checkbox icheck">
									<label><input type="checkbox"> Remember Me </label>
								</div>
							</div>
							<div class="col-xs-6">
								<button type="submit" class="btn btn-danger pull-right">Reset&nbsp;<i class="fa fa-refresh"></i></button>
							</div>
						</div>
						<div class="box-footer">
							<center>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span> Aplikasi Sistem Rumah Sakit
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</center>
						</div>
					</form>
				</div>
			<?php } require_once'../Library/Php/JS.php'; ?>
			</div>
		</div>
	</body>
	<!-- Login Box -->
</html>
