<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
include "header.php";
include "model/proses.php";
$data =read("SELECT pegawai.nip,pegawai.nama_lengkap,absensi.tanggal,absensi.keterangan FROM `absensi` LEFT JOIN pegawai on absensi.pegawai_id=pegawai.id");
?>
<div class="container">
	<div class="container-fluid home-bg">
		<div class="card">
			<div class="card-header card-header-cos">Laporan Absensi</div>
			<div class="card-body">
				<table class="table display" id="absensi">
					<thead class="thead-dark">
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nip</th>
							<th scope="col">Nama Pegawai</th>
							<th scope="col">Tanggal absensi</th>
							<th scope="col">Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$no=1;
						foreach ($data as $v) { ?>
						<tr>
							<th scope="row"><?=$no?></th>
							<td><?=$v[0]?></td>
							<td><?=$v[1]?></td>
							<td><?=$v[2]?></td>
							<td><?=$v[3]?></td>
						</tr>
					<?php 
					$no++;	
					} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php 
include "footer.php";
?>
