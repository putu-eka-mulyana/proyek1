<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
include "header.php";
include "model/proses.php";
$data =read("SELECT id,nama_lengkap,nip FROM pegawai");
?>
<div class="container">
	<div class="container-fluid home-bg">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">SELAMAT DATANG</h1>
				<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
			</div>
		</div>
		<div class="card">
			<div class="card-header">Form Absensi</div>
			<div class="card-body">
				<form method="post" action="proses_absen.php">
					<div class="row">
						<div class="form-group col-md-6">
							<label>Nama Pegawai</label>
							<select class="form-control" name="id">
								<?php foreach($data as $d) {?>
									<option value="<?=$d[0]?>"><?=$d[1]?> || <?=$d[2]?></option>
								<?php } ?>	
							</select>
						</div>
						<div class="form-group col-md-6">
							<label>Keterangan</label>
							<select class="form-control" name="keterangan">
								<option value="hadir">hadir</option>
								<option value="alpa">alpa</option>
								<option value="sakit">sakit</option>
								<option value="izin">izin</option>
							</select>
						</div>
					</div>
					<button class="btn btn-primary">absen</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php 
include "footer.php";
?>
