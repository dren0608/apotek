<h3>Edit Barang Masuk</h3>
	<form action="<?= base_url('home/simpan_bm') ?>" method="post">
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
		<label for="Tanggal" class="form-label">Tanggal Masuk: </label>
		<input type="date" class="form-control" id="date" placeholder="Enter Tanggal Masuk" name="tgms" 
		value="<?= $kita->tanggal_masuk ?>">
	</div>

	
	   <input type="hidden" value="<?= $kita->id_bm?>" name="idbm"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>