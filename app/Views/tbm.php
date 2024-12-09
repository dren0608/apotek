<h3>Tambah Barang Masuk</h3>
<form action="<?= base_url('home/simpan_tbm') ?>" method="post">
    <div class="mb-3 mt">
        <label for="name" class="form-label">Nama Barang: </label>
        <select class="form-control" name="id_brg">
            <option>Pilih Barang</option>
            <?php foreach ($kita as $value): ?>
                <option value="<?= $value->id_barang ?>"><?= $value->kode_barang ?> - <?= $value->nama_barang ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah: </label>
        <input type="number" class="form-control" id="jumlah" placeholder="Enter Jumlah" name="jumlah" $value>
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Tanggal: </label>
        <input type="date" class="form-control" id="tanggal" placeholder="Enter Tanggal" name="tanggal" $value>
    </div>
    <input type="hidden" value="<?= $kita->id_bm?>" name="idmk"> 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>