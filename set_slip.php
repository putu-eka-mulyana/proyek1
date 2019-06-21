<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
include "header.php";
include "model/proses.php";
$id = $_GET['id'];
$data = read("select nama_lengkap,tunjangan,gajih_pokok from pegawai WHERE id='$id'")[0];
$total = $data[1] + $data[2];
?>
<div class="container">
	<div class="container-fluid home-bg">
		<div class="row justify-content-center">
			<div class="col-md-10">
		<div class="card">
			<div class="card-header-cos card-header">
				buat slip
			</div>
			<div class="card-body">
			<form action="add_slip.php" method="POST">
				<input type="hidden" name="id" id="id" value="<?=$id?>">
				<div class="form-group">
					<label for="potongan">Nama Pegawa</label>
					<input type="text" name="nama" class="form-control" disabled="true" value="<?=$data[0]?>">
				</div>
				<div class="form-group">
					<label for="potongan">Total Gajih</label>
					<input type="text" name="gajih" class="form-control" readonly value="<?=$total?>">
				</div>
				<div class="form-group">
					<label for="potongan">Potangan</label>
					<input type="text" name="potongan" class="form-control">
				</div>
				<button class="btn btn-primary">Buat Slip</button>
			</form>
			</div>
			</div>
		</div>	
		</div>
	</div>
</div>
<?php 
include "footer.php";
?>
