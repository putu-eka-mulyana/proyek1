<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
include_once "header.php"; 
include "model/proses.php";
$id = $_GET['id'];
$data =read('SELECT * FROM jabatan');
$d =read("SELECT * FROM pegawai WHERE id='$id'")[0];
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
                        <form action="proses_edit_pegawai.php" method="post">
                            <input type="hidden" name="id" id="id" class="form-control"value="<?=$id?>">
                            <div class="form-group">
                                <label for="nip">NIP Pegawai</label>
                                <input type="text" name="nip" id="nip" class="form-control" placeholder="Nip" value="<?=$d[1]?>">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                placeholder="Nama Lengkap" value="<?=$d[2]?>">
                            </div>
                            <div class="form-group">
                                <label for="tlp">No Telepon</label>
                                <input type="text" name="tlp" id="tlp" class="form-control"
                                placeholder="085xxx" value="<?=$d[7]?>">
                            </div>
                            <div class="form-group">
                                <label for="tgl">Tanggal Lahir</label>
                                <input type="date" name="tgl" id="tgl" class="form-control" value="<?=$d[3]?>">
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
                                <textarea name="alamat" id="alamat" rows="3" class="form-control" ><?=$d[6]?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_masuk">tanggal masuk</label>
                            <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" value="<?=$d[8]?>">
                        </div>
                        <div class="form-group">
                            <label for="status_pernikahan">Status Pernikahan</label>
                            <div class="form-check">
                                <input type="radio" name="kawin" value="kawin" id="kawin" class="form-check-input" checked>
                                <label for="kawin" class="form-check-label">Kawin</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" value="belum kawin" name="kawin" id="belum_kawin"
                                class="form-check-input">
                                <label for="belum_kawin" class="form-check-lebel">Belum kawin</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status_pekerjaan">status pekerjan</label>
                            <input class="form-control" type="text" name="status_pekerjaan" id="status_pekerjaan"
                            placeholder="Tetap / Tidak Tetap" value="<?=$d[10]?>">
                        </div>
                        <div class="form-group">
                            <label for="jabatan">jabatan</label>
                            <select name="jabatan" id="jabatan" class="form-control">
                                <?php foreach ($data as $da) { ?>
                                    <option value="<?=$da[0]?>"><?=$da[1]?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="gajihpokok">gajih pokok</label>
                                <input class="form-control" type="text" name="gajihpokok" id="gajihpokok" value="<?=$d[11]?>">
                            </div>
                             <div class="form-group">
                                <label for="tunjangan">Tunjangan</label>
                                <input class="form-control" type="text" name="tunjangan" id="tunjangan" value="<?=$d[12]?>">
                            </div>
                             <div class="form-group">
                                <label for="tanggalgajian">tanggal gajian</label>
                                <input class="form-control" type="date" name="tanggalgajian" id="tanggalgajian" value="<?=$d[13]?>">
                            </div>
                        <button class=" btn btn-primary" type="submit" name="submit">Tambah Pegawai</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include_once "footer.php" ?>