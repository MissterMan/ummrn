<?php
	include"koneksi.php";
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$pekerjaan=$_POST['pekerjaan'];
	$institusi=$_POST['institusi'];
	$keahlian=$_POST['keahlian'];
	$kontak=$_POST['kontak'];
	$pengguna=$_POST['pengguna'];
	$sandi=$_POST['sandi'];
	$sandimd5=md5($sandi);
	$lokasi=$_FILES['foto']['tmp_name'];
	$tipe=end((explode(".",$_FILES['foto']['name'])));
	$ukuran=$_FILES['foto']['size'];
	$file=rand(100,10000)."-pengguna.$tipe";
	$folder="foto/";
	$sql="insert into user(nama,alamat,pekerjaan,institusi,keahlian,kontak,pengguna,sandi,foto) values('$nama','$alamat','$pekerjaan','$institusi','$keahlian','$kontak','$pengguna','$sandimd5','$file')";
	$query=mysqli_query($koneksi,$sql);
	if(!empty($nama)){
		if($query){
			if($ukuran>1000000){
				echo"File tidak boleh melebihi 1 MB";
			}
			else{
				move_uploaded_file($lokasi,$folder.$file);
			}
		?>
		<script>
			window.alert("Pendaftaran berhasil disimpan.");
			window.location.href="http://localhost/pkm/login.php";
		</script>
	<?		
		}else{}
	}else{
	?>
		<script>
			window.alert("Pendaftaran gagal. Mohon periksa kembali kelengkapan data saudara.");
			window.location.href="http://localhost/pkm/daftar.php";
		</script>

<?	}
?>