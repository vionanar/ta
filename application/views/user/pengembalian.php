<div class="content">
        <div class="row">
          <div class="col-md">
            <div class="card ">
            	 <div class="card-header">
            	 	 <h3>Pengembalian Barang</h3>
            	 	</div>
            	 	<div class="card-body">
                  <?php echo $this->session->flashdata('pesan') ?>
            	 		<form method="post" action="<?php echo base_url('user/pengembalian/insert') ?>">

                <div class="form-group col-md-6">
                  <label>Nama Peminjam</label>
                  <input type="text" class="form-control" name="nama" value=" <?php echo $nama ?>" readonly>
                 
                </div>

              	<div class="form-group col-md-6">
              		<label>Nama Barang</label>
              		<select class="form-control select-barang" name="barang">
              			<option>pilih barang</option>
              			<option value="barang1">barang1</option>
              			<option value="barang2">barang2</option>
              			<option value="barang3">barang3</option>
              			<option value="barang4">barang4</option>
              		</select>
              	</div>

              	<div class="form-group col-md-12">
              		<label>Jumlah Barang yang di Pinjam</label>
              		<input type="text" class="form-control" name="jumlah">
              	</div>

              	<div class="form-group col-md-12">
              		<label>Tanggal Kembali</label>
              		<input type="date" name="tgl_kembali" class="form-control">
              	</div> 

                <div class="form-group col-md-12">
                  <label>Kondisi Barang</label>
                  <input type="text" name="kondisi" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>

              </form>
             
            	 	</div>
              </div>
          </div>
      </div>
  </div>
</div>
