      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h3>Data Sarana </h3>
               <a href="<?php echo base_url('admin/sarana/tambah_sarana') ?>" class="btn btn-primary">Tambahkan Sarana</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <h4>Daftar Sarana</h4>
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          Nama Sarana
                        </th>
                        <th>
                          Keterangan
                        </th>
                        <th>
                          Ruangan
                        </th>
                        <th>
                          NO Inventaris
                        </th>
                        <th>
                          Jumlah
                        </th>
                        <th>
                          Kelayakan
                        </th>
                        <th style="width: 10%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      foreach($sarana as $s): ?>
                      <tr>
                        <td><?php echo $s['nama_sarana'] ?></td>
                        <td><?php echo $s['keterangan'] ?></td>
                        <td><?php echo $s['ruangan'] ?></td>
                        <td><?php echo $s['no_inventaris'] ?></td>
                        <td><?php echo $s['jumlah'] ?> </td>
                        <td><?php echo $s['kelayakan'] ?></td>
                        <td>
                          <a href="" class="btn btn-primary btn-link" data-toggle="modal" data-target=#modal_edit data-id="<?= $s['id_sarana'] ?>" data-nama_sarana="<?= $s['nama_sarana']?>"  data-keterangan="<?= $s['keterangan'] ?>" data-ruangan="<?= $s['ruangan']?>"data-no_inventaris="<?= $s['no_inventaris'] ?>"  data-jumlah="<?= $s['jumlah'] ?>" data-kelayakan="<?= $s['kelayakan']?>" onclick="tampilkanDataEdit(this)"><i class="fas fa-edit"></i></a>
                          <a href="<?php echo base_url('admin/sarana/hapus/'). $s['id_sarana'] ?>" class="btn btn-danger btn-link" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         <div class="modal" id="modal_edit" tabindex="-1" role="dialog" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Sarana</h5>
            </div>
            <div class="modal-body">

              <form name="edit" action="<?php echo base_url(). 'admin/sarana/edit_sarana' ?>" method="post">
              <input type="text" name="id_sarana" hidden="">

              <div class="form-group">
                <label>Nama Sarana</label>
                <input type="text" name="nama_sarana" class="form-control" required="">
              </div>

              <div class="form-group">
                <label>Kelompok Sarana</label>
                <select class="form-control" name="kelompok_srn">
                  <option value="">Pilih</option>
                  <option value="komputer">Komputer</option>
                  <option value="atk">ATK</option>
                  <option value="mejakursi">Meja dan Kursi</option>
                </select>
              </div>

              <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" required>   
              </div>

               <div class="form-group">
                <label>Ruangan</label>
                <select class="form-control" name="ruangan">
                  <option value="">Pilih</option>
                  <option value="">Kelas XI</option>
                  <option value="">Kelas XII</option>
                </select>
              </div>

               <div class="form-group">
                <label>No Inventaris/Sarana</label>
                <input type="text" name="no_inventaris" class="form-control" required>   
              </div>

              <div class="form-group">
                <label>Jumlah</label>
                <input type="text" name="jumlah" class="form-control" required>   
              </div>

              <div class="form-group">
                <label>Kelayakan</label>
                <select class="form-control" name="kelayakan">
                  <option value="">Pilih</option>
                  <option value="layak">Layak</option>
                  <option value="tidak_layak">Tidak Layak</option>
                </select>
              </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>

      <script type="text/javascript">
              function tampilkanDataEdit(val) {
              var id = val.getAttribute("data-id");
              var nama_sarana = val.getAttribute("data-nama_sarana");
              var kelompok_srn = val.getAttribute("data-kelompok_srn");
              var keterangan = val.getAttribute("data-keterangan");
              var no_inventaris = val.getAttribute("data-no_inventaris");
              var jumlah = val.getAttribute("data-jumlah");
              var kelayakan = val.getAttribute("data-kelayakan");

              // document.form's name.input's name.value
              document.edit.id_sarana.value = id;
              document.edit.nama_sarana.value = nama_sarana;
              document.edit.kelompok_srn.value = kelompok_srn;
              document.edit.keterangan.value = keterangan;
              document.edit.no_inventaris.value = no_inventaris;
              document.edit.jumlah.value = jumlah;
              document.edit.kelayakan.value = kelayakan;
          }
      </script>