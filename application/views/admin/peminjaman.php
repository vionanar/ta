 <div class="content">
        <div class="row">
          <div class="col-md">
            <div class="card ">
              <div class="card-header">
                <h3>PEMINJAMAN SARANA</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <h4>Data Peminjam</h4>
                  <table class="table tablesorter" id="">
                    <thead class="text-primary">
                      <tr>
                        <th>
                          Nama Peminjam
                        </th>
                        <th>
                          Nama Barang
                        </th>
                        <th>
                          Jumlah Barang 
                        </th>
                        <th>
                          Tanggal Pinjam
                        </th>
                        <th>
                          Batas Pengembalian
                        </th>
                       <th>
                        Tanggal Kembali
                      </th>
                      <th>
                        Kondisi
                      </th>
                      <th>
                        Status
                      </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($pinjam as $p): ?>

                        <tr>
                          <td><?php echo $p['nama'] ?></td>
                          <td><?php echo $p['barang'] ?></td>
                          <td><?php echo $p['jumlah'] ?></td>
                          <td><?php echo $p['tgl_pinjam'] ?></td>
                          <td><?php echo $p['batas_kembali'] ?></td>
                          <td>
                            <?php if($p['tgl_kembali']==null): ?>
                            <form  method="post" action="<?php echo base_url('admin/peminjaman/insert_tgl_kembali/').$p['id'] ?>">
                              <input type="date" name="tgl_kembali" class="form-control" value="<?php echo $p['tgl_kembali'] ?>" onchange="event.preventDefault();this.closest('form').submit();">
                            </form>
                            <?php else: ?>


                              <?php echo $p['tgl_kembali'] ?>

                              <?php endif ?>

                          </td>
                          <td>
                            <?php if($p['status'] ==0): ?>
                            <form name="" method="post" action="<?php echo base_url('admin/peminjaman/update/').$p['id'] ?>">
                              <select class="form-control" name="kondisi" onchange="event.preventDefault();this.closest('form').submit();">
                                <?php if($p['kondisi']!=null): ?>
                                <option selected value="<?php echo $p['kondisi'] ?>"><?php echo $p['kondisi'] ?></option>
                                <?php else: ?>
                                <option value="">Pilih Kondisi</option>
                              <?php endif ?>
                                <option value="Tersedia - Layak">Layak - Barang Tersedia</option>
                                <option value="Tersedia - Rusak">Rusak - Barang Tersedia</option>
                                <option value="Kosong">Barang Tidak Tersedia</option>
                              </select>                              
                            </form>
                            <?php else: ?>
                             <?php echo $p['kondisi'] ?>
                            <?php endif ?>
                          </td>

                          <td>
                            <?php if($p['status'] ==0): ?>
                              <a class="btn btn-primary" href="<?php echo base_url('admin/peminjaman/terima/').$p['id'] ?>">Setujui</a>
                              <?php else: ?>
                                Disetujui
                            <?php endif ?>
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
      </div>