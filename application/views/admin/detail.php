<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h3>Daftar Barang</h3>
               <a href="<?php echo base_url('admin/prasarana/index') ?>" class="btn btn-primary">Kembali</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <tr>
                      <th>Nama</th>
                      <th>Jumlah</th>
                      <th>Kelayakan</th>
                    </tr>
                    <?php foreach ($sarana as $s): ?>
                      <tr>
                        <td><?php echo $s['nama_sarana']; ?></td>
                        <td><?php echo $s['jumlah']; ?></td>
                        <td><?php echo $s['kelayakan']; ?></td>
                      </tr>
                    <?php endforeach ?>
                  </table>
            </div>
          </div>
       </div>
    </div>
  </div>
</div>