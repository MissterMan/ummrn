<?php
	include"koneksi.php";
	$id=$_GET['id'];
	$sql="select type.type, portfolio.judul, portfolio.deskripsi,portfolio.tahun, portfolio.dokumen from type,portfolio where type.id_type=portfolio.jenis AND portfolio.id_portfolio='$id'";
	$query=mysqli_query($koneksi,$sql);
	$no=0;
	while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
		echo"
<div class=\"page-content\">
	<div id=\"user-profile-1\" class=\"user-profile row\">
		<div class=\"col-xs-12 col-sm-3 center\">
			<div>
				<span class=\"profile-picture\">
					<img id=\"avatar\" class=\"editable img-responsive\" alt=\"Alex's Avatar\" src=\"./images/$row[4]\" />
				</span>

				<div class=\"space-4\"></div>
			</div>
		<div class=\"space-6\"></div>
	</div>

	<div class=\"col-xs-12 col-sm-9\" style=\"padding-left:0px\" >
		<div style=\"margin-left:10px;\" class=\"left\">
			<div class='profile-user-info profile-user-info-striped' style='margin-left:3px;'>
				<div class='profile-info-row'>
					<div class='profile-info-name'> Jenis Portfolio </div>

					<div class='profile-info-value'>
						<span>$row[0]</span>
					</div>
				</div>

				<div class='profile-info-row'>
					<div class='profile-info-name'> Nama Portfolio </div>

					<div class='profile-info-value'>
						<span>$row[1]</span>
					</div>
				</div>

				<div class='profile-info-row'>
					<div class='profile-info-name'> Deskripsi </div>

					<div class='profile-info-value'>
						<span>$row[2]</span>
					</div>
				</div>

				<div class='profile-info-row'>
					<div class='profile-info-name'> Tahun Pelaksanaan </div>

					<div class='profile-info-value'>
						<span>$row[3]</span>
					</div>
				</div>

				<div class='profile-info-row'>
					<div class='profile-info-name'> Tautan </div>

					<div class='profile-info-value'>
						<span><a href='#'>https://s.id/jfsdhYV5</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
";
}
?>
