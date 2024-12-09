<h3>Edit Barang Masuk</h3>
	<form action="<?= base_url('home/simpan_bk') ?>" method="post">
	<div class="mb-3 mt">
		<label for="id" class="form-label">Id Barang: </label>
		<input type="text" class="form-control" id="idb" placeholder="Enter Id Barang" name="id" value="<?= $kita->id_barang ?> ">
	</div>
	<div class="mb-3">
		<label for="jumlah" class="form-label">Jumlah: </label>
		<input type="jml" class="form-control" id="jml" placeholder="Enter Jumlah" name="jumlah" 
		value="<?= $kita->jumlah ?>">
	</div>
	<div class="mb-3">
		<label for="Tanggal" class="form-label">Tanggal Keluar: </label>
		<input type="date" class="form-control" id="date" placeholder="Enter Tanggal Keluar" name="tgkl" 
		value="<?= $kita->tanggal_keluar ?>">
	</div>

	
	   <input type="hidden" value="<?= $kita->id_bk?>" name="idbk"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>