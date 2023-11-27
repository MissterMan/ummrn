<?php
	ob_start();
	error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	session_start();
	if($_SESSION["pengguna"]){
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>PRESTISI > Manajemen portofolio bagi akademisi</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<link rel="icon"href="#" />
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
		
		<script type="text/javascript">
			function PrintElem(elem){
			Popup($(elem).html());
			}
			function Popup(data){
				var mywindow=window.open('','new div','height=950, width=595');
				mywindow.document.write('<html><head><title></title>');
				mywindow.document.write('</head><body>');
				mywindow.document.write(data);
				mywindow.document.write('</body></html>');
				mywindow.print();
				mywindow.close();
				return true;
			}
		</script>
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

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
					
					<li class="light-blue dropdown-modal" style="height:65px;">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle" style="padding-top:5px;">
								<img class="nav-user-photo" src="assets/images/avatars/avatar5.png"/>
								<span class="user-info">
								<small>Selamat datang,</small>
									<?php
										$pengguna=$_SESSION['nama'];
										echo"<b>$pengguna</b>";
									?>
								</span>
								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="index.php?page=akun">
										<i class="ace-icon fa fa-cog"></i>
										Pengaturan
									</a>
								</li>
								<li class="divider"></li>

								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Keluar
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php">Home</a>
							</li>
							<li class="active">
								<?php
								$judul=$_GET['section'];
								$title;
								$description;
								if(!empty($judul)){
									if($judul=="proyek" || $judul=="Proyek"){
										echo"Proyek";
										$title="Proyek";
										$description="Daftar pengalaman proyek anda";
									}else if($judul=="prototipe" || $judul=="Prototipe"){
										echo"Prototipe";
										$title="Prototipe";
										$description="Daftar prototipe yang anda kembangkan";
									}else if($judul=="paten" || $judul=="HKI/Paten"){
										echo"HKI/Paten";
										$title="HKI/Paten";
										$description="Daftar HKI/paten anda";
									}else if($judul=="penelitian" || $judul=="Penelitian"){
										echo"Penelitian";
										$title="Penelitian";
										$description="Daftar pengalaman penelitian anda";
									}else if($judul=="publikasi" || $judul=="Publikasi"){
										echo"Publikasi";
										$title="Publikasi";
										$description="Daftar publikasi anda";
									}else if($judul=="konferensi" || $judul=="Konferensi"){
										echo"Konferensi";
										$title="Konferensi";
										$description="Daftar pengalaman konferensi anda";
									}else if($judul=="pengabdian" || $judul=="Pengabdian"){
										echo"Pengabdian";
										$title="Pengabdian";
										$description="Daftar pengalaman pengabdian anda";
									}else if($judul=="pekerjaan" || $judul=="Pekerjaan"){
										echo"Pekerjaan";
										$title="Pekerjaan";
										$description="Daftar pengalaman pekerjaan anda";
									}else if($judul=="kompetisi" || $judul=="Kompetisi"){
										echo"Kompetisi";
										$title="Kompetisi";
										$description="Daftar pengalaman kompetisi anda";
									}else if($judul=="sertifikasi" || $judul=="Sertifikasi"){
										echo"Sertifikasi";
										$title="Sertifikasi";
										$description="Daftar sertifikat anda";
									}else{
										echo"Kesalahan 404";
										$title="Kesalahan 404";
										$description="Halaman tidak ditemukan";
									}
								}else{
									echo"Halaman depan";
									$title="Halaman depan";
									$description="Tentang anda";
								}
								?>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-header">
						<h1>
							<?php
								echo"$title";
							?>
							<small>
							<i class="ace-icon fa fa-angle-double-right"></i>
							<?php
								echo"$description";
							?>
							</small>
						</h1>
					</div><!-- /.page-header -->

					<div class="page-content">
						<div id="user-profile-1" class="user-profile row">
							<div class="col-xs-12 col-sm-3 center">
								<div>
									<span class="profile-picture">
										<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="assets/images/avatars/profile-pic.jpg" />
									</span>

									<div class="space-4"></div>

									<div class="hr hr12 dotted"></div>

									<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
										<div class="inline position-relative">
											<a href="print.php" target="_blank" class="white user-title-label">
												<b>Cetak portofolio &nbsp;</b>
												<i class=" white ace-icon fa fa-print  align-top bigger-125 icon-on-right"></i>
											</a>
										</div>
									</div>
								</div>
							<div class="space-6"></div>
						</div>

						<div class="col-xs-12 col-sm-9" style="padding-left:0px" >
							<div style="margin-left:10px;" class="left">
								<a href="index.php?page=portfolio&section=proyek" style="text-decoration:none">
								<span class="btn btn-app btn-sm btn-light no-hover">
									<span class="line-height-1 bigger-170 blue"> 
										<?php
											include"koneksi.php";
											$sql="select count(judul) from portfolio where jenis=1";
											$query=mysqli_query($koneksi,$sql);
											while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
											echo"$row[0]";
											}
										?>
									
										 </span>

									<br />
									<span class="line-height-1 smaller-90"> Proyek </span>
								</span>
								</a>

								<a href="index.php?page=portfolio&section=prototipe" style="text-decoration:none">
								<span class="btn btn-app btn-sm btn-light no-hover">
									<span class="line-height-1 bigger-170 blue"> 
										<?php
											include"koneksi.php";
											$sql="select count(judul) from portfolio where jenis=2";
											$query=mysqli_query($koneksi,$sql);
											while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
											echo"$row[0]";
											}
										?>
										
										 </span>

									<br />
									<span class="line-height-1 smaller-90"> Prototipe </span>
								</span>
								</a>

								<a href="index.php?page=portfolio&section=paten" style="text-decoration:none">
								<span class="btn btn-app btn-sm btn-light no-hover">
									<span class="line-height-1 bigger-170 blue"> 
										<?php
											include"koneksi.php";
											$sql="select count(judul) from portfolio where jenis=3";
											$query=mysqli_query($koneksi,$sql);
											while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
											echo"$row[0]";
											}
										?>				
										 </span>

									<br />
									<span class="line-height-1 smaller-90"> HKI/Paten </span>
								</span>
								</a>

								<a href="index.php?page=portfolio&section=penelitian" style="text-decoration:none">
								<span class="btn btn-app btn-sm btn-light no-hover">
									<span class="line-height-1 bigger-170 blue"> 
										<?php
											include"koneksi.php";
											$sql="select count(judul) from portfolio where jenis=4";
											$query=mysqli_query($koneksi,$sql);
											while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
											echo"$row[0]";
											}
										?>					
										
										 </span>

									<br />
									<span class="line-height-1 smaller-90"> Penelitian </span>
								</span>
								</a>

								<a href="index.php?page=portfolio&section=publikasi" style="text-decoration:none">
								<span class="btn btn-app btn-sm btn-light no-hover">
									<span class="line-height-1 bigger-170 blue"> 
											<?php
											include"koneksi.php";
											$sql="select count(judul) from portfolio where jenis=5";
											$query=mysqli_query($koneksi,$sql);
											while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
											echo"$row[0]";
											}
										?>						
										
										
										 </span>

									<br />
									<span class="line-height-1 smaller-90"> Publikasi </span>
								</span>
								</a>

								<a href="index.php?page=portfolio&section=konferensi" style="text-decoration:none">
								<span class="btn btn-app btn-sm btn-light no-hover">
									<span class="line-height-1 bigger-170 blue"> 
												<?php
											include"koneksi.php";
											$sql="select count(judul) from portfolio where jenis=5";
											$query=mysqli_query($koneksi,$sql);
											while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
											echo"$row[0]";
											}
										?>						
										
										
										 </span>

									<br />
									<span class="line-height-1 smaller-90"> Konferensi </span>
								</span>
								</a>

								<a href="index.php?page=portfolio&section=kompetisi" style="text-decoration:none">
								<span class="btn btn-app btn-sm btn-light no-hover">
									<span class="line-height-1 bigger-170 blue"> 
											<?php
											include"koneksi.php";
											$sql="select count(judul) from portfolio where jenis=6";
											$query=mysqli_query($koneksi,$sql);
											while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
											echo"$row[0]";
											}
										?>							
										
										
										 </span>

									<br />
									<span class="line-height-1 smaller-90"> Kompetisi</span>
								</span>
								</a>

								<a href="index.php?page=portfolio&section=pengabdian" style="text-decoration:none">
								<span class="btn btn-app btn-sm btn-light no-hover">
									<span class="line-height-1 bigger-170 blue"> 
													<?php
											include"koneksi.php";
											$sql="select count(judul) from portfolio where jenis=8";
											$query=mysqli_query($koneksi,$sql);
											while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
											echo"$row[0]";
											}
										?>							
										 </span>

									<br />
									<span class="line-height-1 smaller-90"> Pengabdian </span>
								</span>
								</a>

								<a href="index.php?page=portfolio&section=sertifikasi" style="text-decoration:none">
								<span class="btn btn-app btn-sm btn-light no-hover">
									<span class="line-height-1 bigger-170 blue"> 
												<?php
											include"koneksi.php";
											$sql="select count(judul) from portfolio where jenis=6";
											$query=mysqli_query($koneksi,$sql);
											while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
											echo"$row[0]";
											}
										?>							
										
										
										 </span>

									<br />
									<span class="line-height-1 smaller-90"> Sertifikasi </span>
								</span>
								
								</a>

								<a href="index.php?page=portfolio&section=pekerjaan" style="text-decoration:none">
								<span class="btn btn-app btn-sm btn-light no-hover">
									<span class="line-height-1 bigger-170 blue"> 
												<?php
											include"koneksi.php";
											$sql="select count(judul) from portfolio where jenis=7";
											$query=mysqli_query($koneksi,$sql);
											while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
											echo"$row[0]";
											}
										?>							
										 </span>

									<br />
									<span class="line-height-1 smaller-90"> Pekerjaan </span>
								</span>
								</a>

								<hr />	
								<div class="space-12"></div>

								<?php
									$page=$_GET['page'];
									if(!empty($page)){
										if(file_exists("page/$page.php")){
											include"page/$page.php";	
										}else{
											include"page/error404.php";
										}									
									}else{
										include"page/home.php";
									}
								?>

							</div>
						</div>
						
						<div class="space-12"></div>
					
								<!-- PAGE CONTENT BEGINS -->
							
							<div class="space-6"></div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span>
							&copy; 2020 PRESTISI. Diberdayakan dengan Ace Template.
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			})
		</script>
	</body>
</html>
<?php
}else{
	header("location:login.php?stat=0");
}
?>
