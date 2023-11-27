<?php
	include"koneksi.php";
	$pengguna=$_SESSION['pengguna'];
	$ff=$_SESSION['user'];
	$sql="select * from user where pengguna='$pengguna'";
	$query=mysqli_query($koneksi,$sql);
	$no=0;
	while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
		echo"
			<div class='profile-user-info profile-user-info-striped' style='margin-left:3px;'>
				<div class='profile-info-row'>
					<div class='profile-info-name'> Nama Lengkap </div>

					<div class='profile-info-value'>
						<span><b>$row[1]</b></span>
					</div>
				</div>

				<div class='profile-info-row'>
					<div class='profile-info-name'> Alamat </div>

					<div class='profile-info-value'>
						<span>$row[2]</span>
					</div>
				</div>

				<div class='profile-info-row'>
					<div class='profile-info-name'> Pekerjaan </div>

					<div class='profile-info-value'>
						<span>$row[3]</span>
					</div>
				</div>

				<div class='profile-info-row'>
					<div class='profile-info-name'> Institusi </div>

					<div class='profile-info-value'>
						<span>$row[4]</span>
					</div>
				</div>

				<div class='profile-info-row'>
					<div class='profile-info-name'> Bidang keilmuan </div>

					<div class='profile-info-value'>
						<span>$row[5]</span>
					</div>
				</div>

				<div class='profile-info-row'>
					<div class='profile-info-name'> Kontak </div>

					<div class='profile-info-value'>
						<span>$row[6]</span>
					</div>
				</div>
			</div>
			";
		}
	?>
<div class="space-20"></div>

<div class="widget-box transparent">
<div class="widget-header widget-header-small">
	<h4 class="widget-title blue smaller">
		<i class="ace-icon fa fa-rss orange"></i>
		Aktivitas terbaru
	</h4>

	<div class="widget-toolbar action-buttons">
		<a href="#" data-action="reload">
			<i class="ace-icon fa fa-refresh blue"></i>
		</a>
&nbsp;
		<a href="#" class="pink">
			<i class="ace-icon fa fa-trash-o"></i>
		</a>
	</div>
</div>

<div class="widget-body">
	<div class="widget-main padding-8">
		<div id="profile-feed-1" class="profile-feed">
			<div class="profile-activity clearfix">
<?php
	include"koneksi.php";
	$usr=$_SESSION['user'];
	$sql="select type.type, activities.time,user.id_user from type,activities,user where type.id_type=activities.portfolio and user.id_user='$usr' order by activities.time desc limit 5";
	$query=mysqli_query($koneksi,$sql);
	while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
		echo"
				<div>
					<i class='pull-left thumbicon fa fa-check btn-success no-hover'></i>
					Anda baru saja mengunggah <a href='index.php?page=portfolio&section=$row[0]'> $row[0] baru</a>.
					<div class='time' style='padding-bottom:15px;'>
						<i class='ace-icon fa fa-clock-o bigger-110'></i>
						pada $row[1]
						</div>
						</div> 
		";
	}
?>
				</div>
			</div>
		</div>
	</div>
</div>
