<?php 
include_once "header.php"; 
include "model/proses.php";
$data =read('SELECT * FROM jabatan');
?>
<div class="container">
    <div class="container-fluid home-bg">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header card-header-cos">
                        Form Tambah Pegawai
                    </div>
                    <div class="card-body">
                        <form action="proses_pegawai.php" method="post">
                            <div class="form-group">
                                <label for="nip">NIP Pegawai</label>
                                <input type="text" name="nip" id="nip" class="form-control" placeholder="Nip">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="nama">No Telepon</label>
                                <input type="text" name="tlp" id="tlp" class="form-control"
                                    placeholder="085xxx">
                            </div>
                            <div class="form-group">
                                <label for="tgl">Tanggal Lahir</label>
                                <input type="date" name="tgl" id="tgl" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" id="jk1" value="perempuan"
                                        checked>
                                    <label class="form-check-label" for="jk1">
                                        Perempuan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" id="jk2" value="laki-laki">
                                    <label class="form-check-label" for="jk2">
                                        Laki-Laki
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="agama">agama</label>
                                <select class="form-control" id="agama" name="agama">
                                    <option value="islam">Islam</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="kristen">kristen</option>
                                    <option value="katolik">katolik</option>
                                    <option value="budha">budha</option>
                                    <option value="konghucu">konghucu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">alamat</label>
                                <textarea name="alamat" id="alamat" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_masuk">tanggal masuk</label>
                                <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="status_pernikahan">Status Pernikahan</label>
                                <div class="form-check">
                                    <input type="radio" name="kawin" value="kawin" id="kawin" class="form-check-input">
                                    <label for="kawin" class="form-check-label">Kawin</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" value="belum kawin" name="kawin" id="belum_kawin"
                                        class="form-check-input">
                                    <label for="belum_kawin" class="form-check-lebel">Belum kawin</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status_pekerjaan">status_pekerjan</label>
                                <input class="form-control" type="text" name="status_pekerjaan" id="status_pekerjaan"
                                    placeholder="Tetap / Tidak Tetap">
                            </div>
                            <div class="form-group">
                                <label for="jabatan">jabatan</label>
                                <select name="jabatan" id="jabatan" class="form-control">
                                    <?php foreach ($data as $d) { ?>
                                    <option value="<?=$d[0]?>"><?=$d[1]?></option>
                                    <?php } ?>
                                </select>
                            </div>
                
                    <button class=" btn btn-primary">Tambah Pegawai</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include_once "footer.php" ?>