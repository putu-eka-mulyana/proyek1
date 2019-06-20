<?php include_once "header.php" ?>
<div class="container">
    <div class="container-fluid home-bg">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-cos">
                Form Tambah Pegawai
            </div>
            <div class="card-body">
            <form action="insert.php" method="post">
                <div class="form-group">
                    <label for="nip">NIP Pegawai</label>
                    <input type="text" name="nip" id="nip" class="form-control" placeholder="Nip">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="tgl">Tanggal Lahir</label>
                    <input type="date" name="tgl" id="tgl" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="jk1" value="perempuan" checked>
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
                    <select class="form-control" id="agama">
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
                    <input type="date" name="tanggal_masuk" id="tanggal_masuk"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="status_pernikahan">Status Pernikahan</label>
                    <div class="form-check">
                        <input type="radio" name="kawin" value="kawin" id="kawin" class="form-check-input">
                        <label for="kawin" class="form-check-label">Kawin</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" value="belum kawin" name="kawin" id="belum_kawin" class="form-check-input">
                        <label for="belum_kawin" class="form-check-lebel">Belum kawin</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status_pekerjaan">status_pekerjan</label>
                    <input class="form-control" type="text" name="status_pekerjaan" id="status_pekerjaan" placeholder="Tetap / Tidak Tetap">
                </div>
                <div class="form-group">
                    <label for="jabatan">jabatan</label>
                    <div class="row">
                            <select name="jabatan" id="jabatan" class="form-control col-md-6">
                                    <option value="test">test</option>
                            </select>
                            <div class="col-md-6">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#jabatanModel"">Tambah Jabatan</button>
                            </div>     
                    </div>     
                </div>
                <button class="btn btn-primary">Tambah Pegawai</button>
            </form>

            <div class="modal fade" id="jabatanModel" tabindex="-1" role="dialog" aria-labelledby="jabatanModelLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="jabatanModelLabel">From Tambah Jabatan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="" method="post">
                              <div class="form-group">
                                <label for="tambah_jabatan">Tambah Jabatan</label>
                                <input type="text" name="tambah_jabatan" id="tambah_jabatan" class="form-contol">
                              </div>
                              <button type="submit" class="btn btn-danger tambah-jabatan">Tambah Jabatan</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

        </div>
        </div>
    </div>
    </div>
</div>
</div>
<?php include_once "footer.php" ?>