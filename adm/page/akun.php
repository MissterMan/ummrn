<h3 style="border-bottom:2px solid #478FCA;">Atur Profil</h4>
<br />
<?php
include"koneksi.php";
$user=$_SESSION['user'];
$sql="select * from user where id_user='$user'";
$query=mysqli_query($koneksi,$sql);
while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
	echo"
	<form class='form-horizontal' role='form' method='POST' enctype='multipart/form-data' action='page/aksieditakun.php'>
		<div class='form-group'>
			<label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Nama Lengkap</label>

			<div class='col-sm-9'>
				<input type='text' name='nama' id='form-field-1' class='col-xs-10 col-sm-5' value='$row[1]'/>
			</div>
		</div>

		<div class='form-group'>
			<label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Alamat</label>

			<div class='col-sm-9'>
				<input type='text' name='alamat' id='form-field-1' class='col-xs-10 col-sm-5' value='$row[2]'/>
			</div>
		</div>

		<div class='form-group'>
			<label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Pekerjaan</label>

			<div class='col-sm-9'>
				<input type='text' name='pekerjaan' id='form-field-1' class='col-xs-10 col-sm-5' value='$row[3]' />
			</div>
		</div>

		<div class='form-group'>
			<label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Institusi</label>

			<div class='col-sm-9'>
				<input type='text' name='institusi' id='form-field-1' class='col-xs-10 col-sm-5' value='$row[4]' />
			</div>
		</div>

		<div class='form-group'>
			<label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Bidang Keahlian</label>

			<div class='col-sm-9'>
				<input type='text' name='keahlian' id='form-field-1' class='col-xs-10 col-sm-5' value='$row[5]' />
			</div>
		</div>


		<div class='form-group'>
			<label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Surat Elektronik</label>

			<div class='col-sm-9'>
				<input type='text' name='kontak' id='form-field-1' class='col-xs-10 col-sm-5' value='$row[6]' />
			</div>
		</div>

		<div class='form-group'>
			<label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Nama Pengguna</label>

			<div class='col-sm-9'>
				<input type='text' name='pengguna' id='form-field-1' class='col-xs-10 col-sm-5' value='$row[7]' />
			</div>
		</div>

		<div class='form-group'>
			<label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Sandi</label>

			<div class='col-sm-9'>
				<input type='password' name='sandi' id='form-field-1' class='col-xs-10 col-sm-5' value='$row[8]' />
			</div>
		</div>
		
		<div class='form-group'>
			<label class='col-sm-3 control-label no-padding-right' for='form-field-1'>Unggah Foto</label>

			<div class='col-sm-9'>
				<input type='file' name='foto' id='id-input-file-2' />
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
	";
}
?>