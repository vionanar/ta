   <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h3>INVENTARIS</h3>
               <a href="<?php echo base_url('admin/inventaris/tambah_inventaris') ?>" class="btn btn-info">Tambah Inventaris</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <h4>Daftar Inventaris</h4>
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          No
                        </th>
                        <th>
                          No Inventaris
                        </th>
                        <th>
                          Nama Barang
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Lokasi
                        </th>
                        <th>
                          Aksi
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $j=1 ?>
                      <?php foreach ($inventaris as $i):?>
                        <tr>
                          <td><?php echo $j++ ?></td>
                        <td><?php echo $i['no_inventaris'] ?></td>
                        <td><?php echo $i['nama_barang'] ?></td>
                        <td><?php echo $i['status'] ?></td>
                        <td><?php echo $i['lokasi'] ?></td>
                        </tr>

                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>