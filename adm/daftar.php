<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Bergabung dengan PRESTISI..</title>

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
			<div class="left">
				<h3 style="margin-left:10%; border-bottom:2px solid #478FCA;">Bergabung dengan PRESTISI</h4>
				<br />
				<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="aksidaftar.php">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nama Lengkap</label>

						<div class="col-sm-9">
							<input type="text" name="nama" id="form-field-1" class="col-xs-10 col-sm-5"/>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Alamat</label>

						<div class="col-sm-9">
							<input type="text" name="alamat" id="form-field-1" class="col-xs-10 col-sm-5"/>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Pekerjaan</label>

						<div class="col-sm-9">
							<input type="text" name="pekerjaan" id="form-field-1" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Institusi</label>

						<div class="col-sm-9">
							<input type="text" name="institusi" id="form-field-1" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Bidang Keahlian</label>

						<div class="col-sm-9">
							<input type="text" name="keahlian" id="form-field-1" class="col-xs-10 col-sm-5" />
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Surat Elektronik</label>

						<div class="col-sm-9">
							<input type="text" name="kontak" id="form-field-1" class="col-xs-10 col-sm-5" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Kata Sandi</label>

						<div class="col-sm-9">
							<input type="password" name="sandi" id="form-field-1" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ulangi Kata Sandi Anda</label>

						<div class="col-sm-9">
							<input type="password" name="sandi" id="form-field-1" class="col-xs-10 col-sm-5" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Unggah Foto</label>

						<div class="col-sm-9">
							<input type="file" name="foto" id="id-input-file-2" />
						<p />
						<i><font color="orange">Mohon ukuran file tidak melebihi 1 MB.</font></i>
					</div>

					<div class="form-group">
					<input type="checkbox" name="check"> Saya telah membaca dan menyetujui <a href="#">Kebijakan Layanan</a> yang beraku pada PRESTISI
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>

						<div class="col-sm-9">
							</div>
					
					</div>
					
						<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<button class="btn btn-info" type="submit">
								<i class="ace-icon fa fa-check bigger-110"></i>
								Simpan
							</button>

							&nbsp; &nbsp; &nbsp;
							<button class="btn" type="reset">
								<i class="ace-icon fa fa-undo bigger-110"></i>
								Reset
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
