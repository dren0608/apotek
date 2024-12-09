<h3>Tambah Nota</h3>
<form action="<?= base_url('home/simpan_tnota') ?>" method="post">
    <div class="mb-3">
        <label for="id" class="form-label">Id User: </label>
        <input type="number" class="form-control" id="number" placeholder="Enter Id User" name="idn">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Tanggal: </label>
        <input type="date" class="form-control" id="date" placeholder="Enter Tanggal" name="tgl">
    </div>
    <div class="mb-3 mt">
            <select class="form-control" name="jenis" id="metode_pembayaran">
            <option value="">Pilih Metode Pembayaran</option>
            <option value="cod">COD</option>
            <option value="qris">QRIS</option>
            <option value="virtual_account">Virtual Account</option>
            <option value="pay_later">Pay Later</option>
        </select>
    </div>
    <div class="mb-3 mt">
        <label for="value" class="form-label">Total Bayar: </label>
        <input type="value" class="form-control" id="hrg" placeholder="Enter Total Harga" name="hrga" value="<?= $kita->total_bayar ?> ">
    </div>
    
    <input type="hidden" value="" name="idn"> 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>