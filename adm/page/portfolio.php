<?php
?>
<div class="left">
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th><?php echo"$title";?></th>
			<th>Tahun Kegiatan</th>
			<th>Tindakan Lanjut</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$menu=$_GET['section'];
		include"koneksi.php";
		$sql="select portfolio.judul,portfolio.tahun, portfolio.id_portfolio from portfolio,type where portfolio.jenis=type.id_type and type.type='$menu'";
		$query=mysqli_query($koneksi,$sql);
		$no=0;
		while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
			$no++;
			echo"
			<tr>
				<td>$no</td>
				<td><a href='index.php?page=detilportfolio&id=$row[2]'><b>$row[0]</b></a></td>
				<td>$row[1]</td>
				<td>
					<div class='action-buttons'>
						<a class='green' href='index.php?page=editportofolio&id=$row[2]'>
							<i class='ace-icon fa fa-pencil bigger-130'></i>
						</a>

						<a class='red' href='index.php?page=hapusportofolio&id=$row[2]' onClick='return confirm(\"Panjenengan yakin menghapus data ini?\")'>
							<i class='ace-icon fa fa-trash-o bigger-130'></i>
						</a>
					</div>

				</td>
			</tr>
			";
		}
	?>
	</tbody>
</table>
	<div align="right">
		<a href="index.php?page=tambahportfolio">
			<button class="btn btn-white btn-info btn-bold">
				<i class="ace-icon fa fa-plus bigger-75 blue"></i>
				<?php 
					echo"Unggah $menu baru";
				?>
			</button>
		</a>
	</div>
</div>
