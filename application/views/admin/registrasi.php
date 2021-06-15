<div class="content">
        <div class="row">
          <div class="col-md">
            <div class="card ">
               <div class="card-header">
                 <h3>Tambahkan Akun</h3>
                </div>
                <div class="card-body">
                  <form method="post" class="" action="<?php echo base_url('admin/registrasi/daftar') ?>">

                  <div class="form-group col-md-6">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama">
                  </div>

                   <div class="form-group col-md-6">
                  <label>NIS/NIP</label>
                  <input type="text" class="form-control" name="nomor">
                  </div>

                   <div class="form-group col-md-6" name="pengguna">
                  <label>Pengguna</label>
                  <select class="form-control">
                  <option value="">Pilih</option>
                  <option value="2">SISWA</option>
                  <option value="3">PEGAWAI</option>
                  </select>
                  </div>

                   <div class="form-group col-md-6">
                  <label>Jurusan</label>
                  <input type="text" class="form-control" name="jurusan">
                  </div>

                  <button type="submit" class="btn btn-primary">Daftar</button>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>