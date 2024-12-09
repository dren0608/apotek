<h3>Edit Barang</h3>
<div class="container mt-3">
	<form action="<?= base_url('home/simpan_barang') ?>" method="post">
	<div class="mb-3 mt">
		<label for="name" class="form-label">Nama Barang: </label>
		<input type="text" class="form-control" id="enb" placeholder="Enter Nama Barang" name="nb" value="<?= $kita->nama_barang ?> ">
	</div>
	<div class="mb-3 mt">
		<label for="kode" class="form-label">Kode Barang: </label>
		<input type="kode" class="form-control" id="ekb" placeholder="Enter Kode Barang" name="kb" value="<?= $kita->kode_barang ?> ">
	</div>
	<div class="mb-3 mt">
            <select class="form-control" name="jenis" id="jenis_barang">
            <option value="">Pilih Jenis Barang</option>
            <option value="Obat">obat</option>
            <option value="Alat Kesehatan">alat_kesehatan</option>
            <option value="Produk Kulit">produk_kulit</option>
            <option value="Produk Bayi">produk_bayi</option>
        </select>
    </div>
	<div class="mb-3 mt">
		<label for="value" class="form-label">Harga Barang: </label>
		<input type="value" class="form-control" id="hrg" placeholder="Enter Harga Barang" name="hrga" value="<?= $kita->harga_barang ?> ">
	</div>
	<div class="mb-3">
		<label for="jumlah" class="form-label">Stok: </label>
		<input type="number" class="form-control" id="stk" placeholder="Enter Stok" name="stk" 
		value="<?= $kita->stok ?>">
	</div>

	
	   <input type="hidden" value="<?= $kita->id_barang?>" name="idb"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>