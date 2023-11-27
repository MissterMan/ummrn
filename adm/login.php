<?php
	ob_start();
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login first..</title>

		<meta name="description" content="Common form elements and layouts" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
				<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.php" class="navbar-brand">
					<small>
							<i class="fa fa-leaf"></i>
							PRESTISI <br />
							<i style="font-size:10pt;">Manajemen portofolio bagi akademisi</i>
						</small>
					</a>
				</div>
			</div><!-- /.navbar-container -->
		</div>
		<div style="padding-top:90px;">
		</div>
		<?php
		$stat=$_GET['stat'];
			if($stat==0){
				echo"
					<div align='center' style='margin-top:20px; color:red; font-size:20px;'>
					<b>Silakan masuk terlebih dahulu..</b>
					</div>
				";
			}else if($stat==1){
				echo"
					<div align='center' style='margin-top:20px; color:#438EB9; font-size:20px;'>
					<b>Anda berhasil keluar.</b>
					</div>
				";
			}else{}
	?>
		<div class="row" style="margin-top:0;">
			<div class="col-sm-5"  style="margin:auto;left:0; right:0; position:absolute;">
				<div class="widget-box">
					<div class="widget-header" style="height:50px;">
						<h2 class="widget-title">Portal <b>PRESTISI</b></h2>
					</div>

					<div class="widget-body">
						<div class="widget-main no-padding">
							<form method="POST" action="masuk.php">
								<!-- <legend>Form</legend> -->
								<fieldset>
									<p style="margin-top:15px;" />
									<span style="font-size:16px;">Pengguna:</span>
									<br />
									<input name="username" size=40% type="text" />
									<p />
									<p />
									<span style="font-size:16px;">Sandi:</span>
									<br />
									<input name="password" size=40% type="password" />
								</fieldset>

								<div class="form-actions" style="text-align:right; padding-right:35px;">
									<a href="daftar.php">Daftar baru</a> atau
									<button type="submit" class="btn btn-sm btn-success">
										Masuk
										<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
