<div class="row">
	<div class="col-xs-12">
		<div>
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Alamat Asal</th>
						<th class="hidden-480">Alamat di MSI</th>
						<th class="hidden-480">Kontak</th>
						<th class="hidden-480">Tindakan lanjut</th>
					</tr>
				</thead>

				<tbody>
					<?php
						include"koneksi.php";
						$sql="select * from warga where keterangan='Kontrak'";
						$query=mysqli_query($koneksi,$sql);
						while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
						echo"
							<tr>
								<td>
									<a href=''>$row[1]</a>
								</td>
								<td>$row[2]</td>
								<td>$row[3]</td>
								<td>$row[4]</td>
								<td>
									<div class='hidden-sm hidden-xs action-buttons'>
										<a class='green' href='#'>
											<i class='ace-icon fa fa-pencil bigger-130'></i>
										</a>

										<a class='red' href='#'>
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
				<button class="btn btn-white btn-info btn-bold">
					<i class="ace-icon fa fa-plus bigger-75 blue"></i>
					Tambah
				</button>
			</div>
		</div>
	</div>
</div>
