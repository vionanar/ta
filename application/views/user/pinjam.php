 <div class="content">
        <div class="row">
          <div class="col-md">
            <div class="card ">
              <div class="card-header">
                <h3>PEMINJAMAN SARANA</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <h4>Daftar Peminjam Anda</h4>
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
                        Lokasi
                      </th>
                      <th>
                        Kondisi
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Aksi
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
                          <td><?php echo $p['tgl_kembali'] ?></td>
                          <td><?php echo $p['lokasi'] ?></td>
                          <td><?php echo $p['kondisi'] ?></td>
                          <td>
                            <?php if($p['status']==0): ?>
                              Belum Disetujui
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