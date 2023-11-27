<?php
	session_start();
	include"koneksi.php";
	$usr=$_SESSION['user'];
	$jenis=$_POST['jenis'];
	$judul=$_POST['judul'];
	$deskripsi=$_POST['deskripsi'];
	$tahun=$_POST['tahun'];
	$lokasi=$_FILES['file']['tmp_name'];
	$tipe=end((explode(".",$_FILES['file']['name'])));
	$ukuran=$_FILES['file']['size'];
	$file=rand(100,10000)."-$jenis.$tipe";
	$folder="../images/";
	$sql="insert into portfolio(pengguna,jenis,judul,tahun,deskripsi,dokumen) values('$usr','$jenis','$judul','$tahun','$deskripsi','$file')";
	$query=mysqli_query($koneksi,$sql);
	if($query){
		if($ukuran>1000000){
			echo"File tidak boleh melebihi 1 MB";
			}
			else{
				move_uploaded_file($lokasi,$folder.$file);
			}
		?>
		<script>
			window.alert("Data berhasil disimpan.");
			window.history.go(-2);
		</script>
		<?php
	}else{
		echo"Input data gagal.";
	}
?>
