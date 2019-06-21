<?php
include "header.php";
include "model/proses.php";
$data = read("SELECT id,nama_lengkap,gajih_pokok,tunjangan,tanggal_gajian FROM pegawai");
?>
<div class="container">
	<div class="container-fluid home-bg">
		<div class="row justify-content-center">
			<div class="col-md-11">
				<div class="card mt-4">
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th scope="col">No</th>
									<th scope="col">Nama Pegawai</th>
									<th scope="col">Tanggal Pengambilan</th>
									<th scope="col">Gajih Pokok</th>
									<th scope="col">Gajih Tunjangan</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no=1;
								foreach ($data as $v) {
									?>
									<tr>
										<th scope="row"><?=$no?></th>
										<td><?=$v[1]?></td>
										<td><?=$v[4]?></td>
										<td><?=$v[2]?></td>
										<td><?=$v[3]?></td>
										<td>
											<a href="set_slip.php?id=<?=$v[0] ?>" class="btn 
												btn-danger">Buat Slip</a>
										</td>
									</tr>
									<?php
									$no++;
								}
								?>
							</tbody>
						</table>
				</div>
			</div>	
		</div>
	</div>
</div>
<?php 
include "footer.php";
?>
