<?php
session_start();
if(!isset($_SESSION["username"])){
	header("Location:login.php");
}
include "header.php";
include "model/proses.php";
$id =$_GET['id'];
$data =read("SELECT slip_gajih.id,slip_gajih.tanggal,slip_gajih.total_gajih,slip_gajih.potongan, pegawai.tunjangan,pegawai.gajih_pokok,pegawai.tanggal_gajian,pegawai.nama_lengkap FROM `slip_gajih` INNER JOIN `pegawai` on slip_gajih.pegawai_id =pegawai.id WHERE slip_gajih.id='$id'")[0];
?>
<div class="container" style="min-height: 100vh">
	<div class="container-fluid home-bg" style="min-height: 100vh">
		<div class="card" >
			<table class="table" id="tabel_slip">
				<thead>
					<tr>
						<th scope="col">Tanggal Gajihan </th>
						<th scope="col"><?=$data[1]?></th>
					</tr>
					<tr>
						<th scope="col">Nama Lengkap </th>
						<th scope="col"><?=$data[7]?></th>
					</tr>
					<tr>
						<th scope="col">Gajih Pokok</th>
						<th scope="col"><?=$data[5]?></th>
					</tr>
					<tr>
						<th scope="col">Tunjangan</th>
						<th scope="col"><?=$data[4]?></th>
					</tr>
					<tr>
						<th scope="col">Gajih</th>
						<th scope="col"><?=$data[2]?></th>
					</tr>
					<tr>
						<th scope="col">Potongan</th>
						<th scope="col"><?=$data[3]?></th>
					</tr>
					<tr>
						<th scope="col">Total Gajih Yang Diterima</th>
						<th scope="col"><?=$data[2]-$data[3]?></th>
					</tr>
				</thead>
			</table>
			<button class="btn btn-primary print" id="print" type="button" onclick="prints()">Print</button>
		</div>
	</div>
</div>
<?php 
include "footer.php";
?>




