      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h3>Data Prasarana</h3>
               <button class="btn btn-primary" data-toggle="modal" data-target=#modal>Prasarana</button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          Kelas
                        </th>
                        <th>
                          Keterangan
                        </th>
                        <th>
                          Daftar Barang
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($prasarana as $p) : ?>
                        <tr>
                          <td><?php echo $p['ruangan']; ?></td>
                          <td><?php echo $p['keterangan']; ?></td>
                          <td>
                            <a href="<?php echo base_url('admin/prasarana/detail/'). $p['ruangan'] ?>" class="btn btn-primary">daftar</a>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal" id="modal" tabindex="-1" role="dialog" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambahkan Prasarana</h5>
            </div>
            <form method="post" action="<?php echo base_url(). 'admin/prasarana/tambah_ruangan' ?>">
            <div class="modal-body">
              <div class="form-group">
                <label>Ruangan</label>
                <input type="text" name="ruangan" class="form-control" required>
              </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" required>   
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