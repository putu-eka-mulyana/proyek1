<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
include "model/proses.php";
$id =$_GET['id'];
$data = read("SELECT * FROM jabatan where id='$id'")[0];
if(isset($_POST["submit"])){
    $nama = $_POST['tambah_jabatan'];
    $result=insert("UPDATE jabatan SET nama_jabatan='$nama' WHERE id='$id'");
    if($result){
        // echo "<script>alert('sukses mengedit jabatan');</script>";
        header('Location: jabatan.php');
    }  
}
include "header.php";
?>
<div class="container" style="height:100vh">
    <div class="container-fluid home-bg" style="height:100vh">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="jabatan" class="col-sm-3 col-form-label">Edit Jabatan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tambah_jabatan" id="tambah_jabatan" class="form-control"
                                        required value="<?=$data[1]?>">
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Tambah Jabatan</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php include "footer.php"?>