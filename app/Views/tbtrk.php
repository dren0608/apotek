<h3>Tambah Transaksi</h3>
<form action="<?= base_url('home/simpan_tbtrk') ?>" method="post">
    <div class="mb-3">
        <label for="id" class="form-label">Nomor Nota: </label>
        <input type="number" class="form-control" id="number" placeholder="Enter Nomor Nota" name="idn">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Tanggal Transaksi: </label>
        <input type="date" class="form-control" id="date" placeholder="Enter Tanggal Transaksi" name="tgl">
    </div>
    <div class="mb-3">
        <label for="number" class="form-label">Quantity: </label>
        <input type="number" class="form-control" id="number" placeholder="Enter Quantity" name="qty">
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
            <select class="form-control" name="status" id="status_transaksi">
            <option value="">Status Transaksi</option>
            <option value="success">Success</option>
            <option value="pending">Pending</option>
            <option value="cancel">Cancel</option>
        </select>
    </div>
    
    <input type="hidden" value="" name="idt"> 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>