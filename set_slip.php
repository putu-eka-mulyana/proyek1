<?php
include "header.php";
include "model/proses.php";
?>
<div class="container">
	<div class="container-fluid home-bg">
		<div class="card">
			<div class="card-header">
				buat slip
			</div>
			<form action="add_slip" method="POST">
				<div class="form-group">
					<label for="potongan">Potangan</label>
					<input type="text" name="potongan" class="form-control">
				</div>
				<button class="btn btn-primary">Buat Slip</button>
			</form>
		</div>	
	</div>
</div>
<?php 
include "footer.php";
?>
