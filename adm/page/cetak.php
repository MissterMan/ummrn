<script type="text/javascript">
    function printDiv(divprint){
        var cetakIsi = document.getElementById(drivprint).innerHTML;
        var konten = document.body.innerHTML;

        document.body.innerHTML = cetakIsi;
        window.print(); 
        document.body.innerHTML = konten;
    }
</script>
<div id="divprint">
	<h2 style="text-align:center;">CURICULLUM VITAE</h2>
    <hr />
    <?php
	    include"koneksi.php";
	    $pengguna=$_SESSION['pengguna'];
	    $ff=$_SESSION['user'];
	    $sql="select * from user where pengguna='$pengguna'";
	    $query=mysqli_query($koneksi,$sql);
	    $no=0;
	    while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
		    echo"
    <div class=\"page-content\">
	    <div id=\"user-profile-1\" class=\"user-profile row\">
		    <div class=\"col-xs-12 col-sm-3 center\">
			    <div>
				    <span class=\"profile-picture\">
					    <img id=\"avatar\" class=\"editable img-responsive\" alt=\"Alex's Avatar\" src=\"./foto/$row[9]\" />
				    </span>

				    <div class=\"space-4\"></div>
			    </div>
		    <div class=\"space-6\"></div>
	    </div>

	    <div class=\"col-xs-12 col-sm-9\" style=\"padding-left:0px;padding-right:0px;\" >
		    <div style=\"margin-left:10px;\" class=\"left\">
				    <h4 style='margin-top:0px;'>Biodata</h4>
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
	    <br />
	    <div class=\"left\">
	    <h4>Pengalaman akademik</h4>
    <div class="row">
	    <div class="col-xs-12">
		    <div>
			    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
				    <tbody>
					    <?php
						    include"koneksi.php";
						    $sq="select * from type";
						    $query=mysqli_query($koneksi,$sq);
						    while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
						    echo"
							    <tr>
								    <td colspan=8 style='background:#e0e0eb;'><b>$row[1]</b></td>
							    </tr>	
								    ";
							    $sql="select * from portfolio where jenis=$row[0]";
							    $quer=mysqli_query($koneksi,$sql);
							    while($rows=mysqli_fetch_array($quer,MYSQLI_NUM)){
						    echo"<tr>
								    <td>$rows[2]</td>
								    <td>$rows[4]</td>
							    </tr>
							    ";
							    }
						    }
					    ?>
				    </tbody>
			    </table>
		    </div>
	    </div>
    </div>
</div>
<div class="noprint" align="right">
		<button onClick="printDiv('divprint')" class="btn btn-white btn-info btn-bold">
			<i class="ace-icon fa fa-print bigger-75 blue"></i>
			Cetak
		</button>
</div>
