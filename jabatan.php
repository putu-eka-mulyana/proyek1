<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
include "model/proses.php";
$data = read("SELECT jabatan.id,jabatan.nama_jabatan,COUNT(pegawai.id) FROM `jabatan` LEFT JOIN pegawai ON jabatan.id = pegawai.jabatan_id GROUP BY jabatan.nama_jabatan");
include "header.php";
?>
<div class="container">
    <div class="container-fluid home-bg">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-body">
                        <form action="tambah_jabatan.php" method="post">
                            <div class="form-group row">
                                <label for="jabatan" class="col-sm-3 col-form-label">Tambah Jabatan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tambah_jabatan" id="tambah_jabatan" class="form-control"
                                        required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Jabatan</button>
                        </form>
                    </div>
                </div>
                <div class="card mt-5">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Jabatan</th>
                                <th scope="col">Jumlah Pegawai</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                    $no=1;
                                    foreach ($data as $d) {
                                    ?>
                            <tr>
                                <th scope="row"><?=$no?></th>
                                <td><?=$d[1]?></td>
                                <td><?=$d[2]?></td>
                                <td>
                                    <a href="hapus_jabatan.php?id=<?=$d[0]?>" class="btn btn-danger" onClick="return confirm('yakin mau menghapus')">Hapus</a>
                                    <a href="edit_jabatan.php?id=<?=$d[0]?>" class="btn btn-danger" >Edit</a>
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
<?php include "footer.php"?>