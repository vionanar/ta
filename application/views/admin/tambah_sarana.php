<div class="content">
        <div class="row">
          <div class="col-md">
            <div class="card ">
            	 <div class="card-header">
            	 	 <h3>Tambahkan Sarana</h3>
            	 	</div>
            	 	<div class="card-body">
                  <?php echo $this->session->flashdata('pesan') ?>
            	 		<form method="post" action="<?php echo base_url('admin/sarana/insert') ?>">
              	<div class="form-group col-md-6">
              		<label>Nama Sarana</label>
              		<select class="form-control select-barang" name="nama_sarana">
              			<option>Pilih </option>
                    <?php foreach ($barang as $b) : ?>
              			<option value="<?php echo $b['nama_barang'] ?>"><?php echo $b['nama_barang'] ?></option>
                  <?php endforeach ?>
              		</select>
              	</div>

              	<div class="form-group col-md-12">
              		<label>Keterangan</label>
              		<input type="text" class="form-control" name="keterangan">
              	</div>
                <div class="form-group col-md-6">
                  <label>Nama Ruangan</label>
                  <select class="form-control select-lokasi" name="ruangan">
                    <option>Pilih</option>
                    <option value="luar ruangan">Luar Ruangan</option>
                    <?php foreach ($ruangan as $r) : ?>
                    <option value="<?php echo $r['ruangan'] ?>"><?php echo $r['ruangan'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group col-md-12">
                  <label>No Inventaris</label>
                  <input type="text" class="form-control" name="no_inventaris">
                </div>

                <div class="form-group col-md-12">
                  <label>Jumlah</label>
                  <input type="text" class="form-control" name="jumlah">
                </div>

                <div class="form-group col-md-12">
                  <label>Kelayakan</label>
                  <select class="form-control" name="kelayakan">
                    <option>Pilih</option>
                    <option value="Layak">Layak</option>
                    <option value="Tidak Layak">Tidak Layak</option>
                  </select>
                </div>

                <button type="submit" class="btn btn-primary">Lanjutkan Pinjaman</button>

              </form>
             
            	 	</div>
              </div>
          </div>
      </div>
  </div>
  <script type="">
     $(document).ready(function() {
    $('.select-barang').select2();
});
    $(document).ready(function() {
    $('.select-lokasi').select2();
});
  </script>
