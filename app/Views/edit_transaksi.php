<h3>Edit Transaksi</h3>
	<form action="<?= base_url('home/simpan_transaksi') ?>" method="post">
	<div class="mb-3 mt">
		<label for="number" class="form-label">Nomor Nota: </label>
		<input type="number" class="form-control" id="number" placeholder="Enter Nomor Nota" name="nnn" value="<?= $kita->id_nota ?> ">
	</div>
	<div class="mb-3">
		<label for="date" class="form-label">Tanggal Transaksi: </label>
		<input type="date" class="form-control" id="tgl" placeholder="Enter Tanggal" name="tgl" 
		value="<?= $kita->tanggal_transaksi ?>">
	</div>
	<div class="mb-3">
		<label for="number" class="form-label">Quantity: </label>
		<input type="number" class="form-control" id="qty" placeholder="Enter Quantity" name="qty" 
		value="<?= $kita->jumlah_barang ?>">
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
	
	   <input type="hidden" value="<?= $kita->id_transaksi?>" name="idtr"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>