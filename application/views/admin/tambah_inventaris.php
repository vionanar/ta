<div class="content">
        <div class="row">
          <div class="col-md">
            <div class="card ">
            	 <div class="card-header">
            	 	 <h3>Tambahkan Inventaris</h3>
            	 	</div>
            	 	<div class="card-body">
            	 	<form action="<?php echo base_url('admin/inventaris/insert') ?>" method="post">

	            	 	<div class="form-group col-md-6">
	              		<label>Nama Barang</label>
	              		<input type="text" name="nama_barang" class="form-control">
	              		</div>

	              		<div class="form-group col-md-6">
	              		<label>Jumlah</label>
	              		<input type="text" name="jumlah" class="form-control">
	              		</div>

	              		<div class="form-group col-md-6">
	              		<label>Kategori</label>
	              		<select class="form-control select2" name="kategori">
	              			<option value="">Pilih Kategori</option>
	              			<?php foreach ($kategori as $k):?>
	              			<option value="<?php echo $k['nama_kategori'] ?>"><?php echo $k['nama_kategori'] ?></option>
	              			<?php endforeach ?>
	              		</select>
	              		</div>

	              		<div class="form-group col-md-6">
	              		<label>Keterangan</label>
	              		<input type="text" name="keterangan" class="form-control">
	              		</div>

	              		<div class="form-group col-md-6">
	              		<label>Tanggal Masuk</label>
	              		<input type="date" name="tgl_masuk" class="form-control">
	              		</div>

	              		<button type="submit" class="btn btn-info">Simpan</button>
            	 		</form>
            	 	</div>
            	 </div>
            	</div>
            </div>
          </div>
<script type="">
	$(document).ready(function() {
    $('.select2').select2();
});
</script>
            	 	