<?php
	include"koneksi.php";
	$id=$_GET['id'];
	$sql="delete from portfolio where id_portfolio=$id";
	$query=mysqli_query($koneksi,$sql);
	if($query){
		?>
		<script>
			window.alert("Data berhasil dihapus.");
			window.history.go(-1);
		</script>
		<?php
	}else{
		echo"Hapus data gagal.";
	}
?>
