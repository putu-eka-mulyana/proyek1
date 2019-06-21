<?php
    include "model/proses.php";
    $data = read("SELECT * FROM `pegawai` INNER JOIN jabatan on pegawai.jabatan_id = jabatan.id");
    include "header.php";
?>
<div class="container">
    <div class="container-fluid home-bg">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <h2>Daftar Pegawai</h2>
                <div class="card">
                    <table class="table table-responsive display" id="pegawai">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nip</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No Telp</th>
                                <th scope="col">Tanggal Masuk</th>
                                <th scope="col">Status Pernikahan</th>
                                <th scope="col">Status Kerja</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                    $no=1;
                                    foreach ($data as $d) { ?>
                            <tr>
                                <th scope="row"><?=$no ?></th>
                                <td><?=$d[1]?></td>
                                <td><?=$d[2]?></td>
                                <td><?=$d[3]?></td>
                                <td><?=$d[4]?></td>
                                <td><?=$d[5]?></td>
                                <td><?=$d[6]?></td>
                                <td><?=$d[7]?></td>
                                <td><?=$d[8]?></td>
                                <td><?=$d[9]?></td>
                                <td><?=$d[10]?></td>
                                <td><?=$d[13]?></td>
                                <td>
                                    <a href="hapus_pegawai.php?id=<?=$d[0]?>" class="btn btn-danger" onClick="return confirm('yakin mau menghapus')">Hapus</a>
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

<?php include "footer.php" ?>