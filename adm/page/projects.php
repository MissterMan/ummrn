<div class="left">
	<?php
		$menu=$_GET['page'];
		include"koneksi.php";
		$sql="select portfolio.name,type.type from portfolio,type where portfolio.type=type.id_type and type.type='$menu'";
		$query=mysqli_query($koneksi,$sql);
		$no=0;
		while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
			$no++;
			echo"
			<span style='font-size:17px;'> <a href=''>$no. $row[0]</a> <br /></span>";
		}
	?>
	<div align="right">
		<button class="btn btn-white btn-info btn-bold">
			<i class="ace-icon fa fa-plus bigger-75 blue"></i>
			<?php 
				echo"Add $menu";
			?>
		</button>
	</div>
</div>
