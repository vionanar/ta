      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h3>Daftar Barang</h3>
               <button class="btn btn-primary" data-toggle="modal" data-target=#modal>Tambahkan Barang</button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <h4>Daftar Barang</h4>
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          NO
                        </th>
                        <th>
                          Nama Barang
                        </th>
                        <th>
                          Stok
                        </th>
                        <th>
                          Kondisi
                        </th>
                        <th>
                          Jenis
                        </th>
                        <th>
                          Keterangan
                        </th>
                        <th>
                          Tanggal Masuk
                        </th>
                        <th style="width: 10%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                       $i= 1;
                      foreach($daftar_barang as $ds): ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $ds['nama_barang'] ?></td>
                        <td><?php echo $ds['stok'] ?></td>
                        <td><?php echo $ds['kondisi'] ?></td>
                        <td><?php echo $ds['jenis'] ?> </td>
                        <td><?php echo $ds['keterangan'] ?> </td>
                        <td><?php echo $ds['tgl_masuk'] ?> </td>
                        <td>
                          <a href="" class="btn btn-primary btn-link" data-toggle="modal" data-target=#modal_edit data-id="<?= $ds['id_barang'] ?>"  data-nama_barang="<?= $ds['nama_barang'] ?>"  data-stok="<?= $ds['stok'] ?>"  data-kondisi="<?= $ds['kondisi'] ?>"  data-jenis="<?= $ds['jenis'] ?>" data-keterangan="<?= $ds['keterangan']?>" data-tgl_masuk="<?= $ds['tgl_masuk'] ?>" onclick="tampilkanDataEdit(this)"><i class="fas fa-edit"></i></a>
                          <a href="<?php echo base_url('admin/daftar_barang/hapus_barang/'). $ds['id_barang'] ?>" class="btn btn-danger btn-link" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash"></i></a>
                         
                        </td>
                      </tr>
                    <?php endforeach; ?>
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
              <h5 class="modal-title">Daftar Barang</h5>
            </div>
               <form action="<?php echo base_url(). 'admin/daftar_barang/tambah_barang' ?>" method="post">

            <div class="modal-body">
              <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" required>   
              </div>

               <div class="form-group">
                <label>Kondisi</label>
                <input type="text" name="kondisi" class="form-control" required>   
              </div>

              <div class="form-group">
                <label>Jenis</label>
                <input type="text" name="jenis" class="form-control" required>   
              </div>

               <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" required>   
              </div>

              <div class="form-group">
                <label>Tanggal Masuk</label>
                <input type="date" name="tgl_masuk" class="form-control" required>   
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

         <div class="modal" id="modal_edit" tabindex="-1" role="dialog" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Barang</h5>
            </div>
            <div class="modal-body">

              <form name="edit" action="<?php echo base_url(). 'admin/dafar_barang/edit_barang' ?>" method="post">
              <input type="text" name="id_barang" hidden>
              <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" required>  
              </div>

              <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" required>   
              </div>

               <div class="form-group">
                <label>Kondisi</label>
                <input type="text" name="kondisi" class="form-control" required>   
              </div>

              <div class="form-group">
                <label>Jenis</label>
                <input type="text" name="jenis" class="form-control" required>   
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
      </div>
      </div>

      <script type="text/javascript">
              function tampilkanDataEdit(val) {
              var id = val.getAttribute("data-id");
              var nama_barang = val.getAttribute("data-nama_barang");
              var stok = val.getAttribute("data-stok");
              var kondisi = val.getAttribute("data-kondisi");
              var jenis = val.getAttribute("data-jenis");
              var keterangan = val.getAttribute("data-keterangan");

              // document.form's name.input's name.value
              document.edit.id_barang.value = id;
              document.edit.nama_barang.value = nama_barang;
              document.edit.stok.value = stok;
              document.edit.kondisi.value = kondisi;
              document.edit.jenis.value = jenis;
              document.edit.keterangan.value = keterangan;
          }
      </script>