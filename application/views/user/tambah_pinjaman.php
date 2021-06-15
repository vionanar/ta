<div class="content">
        <div class="row">
          <div class="col-md">
            <div class="card ">
            	 <div class="card-header">
            	 	 <h3>Tambahkan Peminjaman</h3>
            	 	</div>
            	 	<div class="card-body">
                  <?php echo $this->session->flashdata('pesan') ?>
            	 		<form method="post" action="<?php echo base_url('user/pinjam/insert') ?>">

                <div class="form-group col-md-6">
                  <label>Nama Peminjam</label>
                  <input type="text" class="form-control" name="nama" value=" <?php echo $nama ?>" readonly>
                 
                </div>

              	<div class="form-group col-md-6">
              		<label>Nama Barang</label>
              		<select class="form-control select-barang" name="barang">
              			<option>Pilih Barang</option>
                    <?php foreach ($barang as $b) : ?>
              			<option value="<?php echo $b['nama_barang'] ?>"><?php echo $b['nama_barang'] ?></option>
                  <?php endforeach ?>
              		</select>
              	</div>

              	<div class="form-group col-md-12">
              		<label>Jumlah Barang yang di Pinjam</label>
              		<input type="text" class="form-control" name="jumlah">
              	</div>

              	<div class="form-group col-md-12">
              		<label>Tanggal Pinjam</label>
              		<input type="date" name="tgl_pinjam" class="form-control">
              	</div>

                <div class="form-group col-md-6">
                  <label>Lokasi</label>
                  <select class="form-control select-lokasi" name="lokasi">
                    <option>Pilih Lokasi</option>
                    <option value="luar ruangan">Luar Ruangan</option>
                    <?php foreach ($lokasi as $l) : ?>
                    <option value="<?php echo $l['ruangan'] ?>"><?php echo $l['ruangan'] ?></option>

                    <?php endforeach ?>
                    
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Lanjutkan Pinjaman</button>

              </form>
             
            	 	</div>
              </div>
          </div>
      </div>
  </div>
</div>
