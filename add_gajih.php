<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
include "header.php";
include "model/proses.php";
$id = $_GET['id'];

// if(cek_id($id)){
// 	$result = insert("INSERT INTO gajih (pegawai_id,tanggal_pengambilan,gajih_pokok,tunjangan) VALUES('$idpegawai','$tanggal','$gajih_pokok','$gajih_tunjangan')");
// 	if($result){
// 	    header('Location: tampil_gajih.php');
// 	}
// }

?>
<div class="container">
	<div class="container-fluid home-bg">
		<div class="row justify-content-center">
			<div class="col-md-11">
				<div class="card">
					<div class="card-body">
					<form method="post" action="">
						<div class="form-group">
							<label for="idpegawai">nama pegawai</label>
							<input type="text" name="nama">
						</div>
						<div class="form-group">
							<label for="tanggal">tanggal pengambilan</label>
							<input type="date" name="tanggal" class="form-control">
						</div>
						<div class="form-group">
							<label for="gajih_pokok">Gajih Pokok</label>
							<input type="input" name="gajih_pokok" class="form-control">
						</div>
						<div class="form-group">
							<label for="gajih_tunjangan">Gajih Pokok</label>
							<input type="input" name="gajih_tunjangan" class="form-control">
						</div>
						<button class="btn btn-primary">Set Gajih</button>
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
