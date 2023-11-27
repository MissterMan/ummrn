<h3 style="border-bottom:2px solid #478FCA;">Ubah Portofolio</h4>
<br />
<?php
include"koneksi.php";
$id=$_GET['id'];
$sql="select * from portfolio where id_portfolio='$id'";
$query=mysqli_query($koneksi,$sql);
while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
	echo"
	<div class='left'>
	<form class='form-horizontal' role='form' method='POST' enctype='multipart/form-data' action='page/aksieditportfolio.php'>
		<div class='form-group'>
			<label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Jenis Portofolio</label>

			<div class='col-sm-9'>
				<select name='jenis'>";
					$sqls='select * from type';
					$querys=mysqli_query($koneksi,$sqls);
					while($rows=mysqli_fetch_array($querys,MYSQLI_NUM)){
						echo"<option value='$rows[0]'>$rows[1]</option>";
					}
					echo"
				</select>
			</div>
		</div>
		<div class='form-group'>
			<label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Judul Portofolio</label>

			<div class='col-sm-9'>
				<input type='text' name='judul' id='form-field-1' class='col-xs-10 col-sm-5' style='width:100%' value='$row[2]' />
			</div>
		</div>
		<div class='form-group'>
			<label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Tahun Pelaksanaan</label>

			<div class='col-sm-9'>
				<input type='text' name='tahun' id='form-field-1' class='col-xs-10 col-sm-5' value='$row[4]' />
			</div>
		</div>
		
		<div class='form-group'>
			<label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Deskripsi</label>

			<div class='col-sm-9'>
				<textarea name='deskripsi' style='width:100%'> $row[5] </textarea>
			</div>
		</div>
		
		<div class='form-group'>
			<label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Unggah Portofolio</label>

			<div class='col-sm-9'>
				<input type='file' name='file' id='id-input-file-2' />
			<p />
			<i><font color='orange'>Mohon ukuran file tidak melebihi 1 MB.</font></i>
			</div>
		</div>
		
			<div class='clearfix form-actions'>
			<div class='col-md-offset-3 col-md-9'>
				<button class='btn btn-info' type='submit'>
					<i class='ace-icon fa fa-check bigger-110'></i>
					Simpan
				</button>

				&nbsp; &nbsp; &nbsp;
				<button class='btn' type='reset'>
					<i class='ace-icon fa fa-undo bigger-110'></i>
					Reset
				</button>
			</div>
		</div>
	</form>
</div>
";
					}?>