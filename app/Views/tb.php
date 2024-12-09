<h3>Tambah Barang</h3>
<form action="<?= base_url('home/simpan_tbb') ?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Barang: </label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Nama Barang" name="nb">
    </div>
    <div class="mb-3">
        <label for="kode" class="form-label">Kode Barang: </label>
        <input type="text" class="form-control" id="kode" placeholder="Enter Kode Barang" name="kb">
    </div>
    <div class="mb-3 mt">
            <select class="form-control" name="jenis" id="jenis_barang">
            <option value="">Pilih Jenis Barang</option>
            <option value="Obat">Obat</option>
            <option value="alat_kesehatan">Alat Kesehatan</option>
            <option value="produk_kulit">Produk Kulit</option>
            <option value="produk_bayi">Produk Bayi</option>
        </select>
    </div>
    <div class="mb-3 mt">
        <label for="value" class="form-label">Harga Barang: </label>
        <input type="value" class="form-control" id="hrg" placeholder="Enter Harga Barang" name="hrga" value="<?= $kita->harga_barang ?> ">
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok: </label>
        <input type="number" class="form-control" id="stok" placeholder="Enter Stok" name="stk">
    </div>
    <input type="hidden" value="" name="idmbb"> 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>