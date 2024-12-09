<h3>Edit Nota</h3>
	<form action="<?= base_url('home/simpan_nota') ?>" method="post">
	<div class="mb-3 mt">
		<label for="value" class="form-label">Username: </label>
		<input type="value" class="form-control" id="usrn" placeholder="Enter Username" name="usn" value="<?= $kita->id_user ?> ">
	</div>
	<div class="mb-3">
		<label for="value" class="form-label">Tanggal: </label>
		<input type="value" class="form-control" id="tgl" placeholder="Enter Tanggal" name="tgl" 
		value="<?= $kita->tanggal ?>">
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
	<div class="mb-3">
		<label for="value" class="form-label">Total Bayar: </label>
		<input type="value" class="form-control" id="byr" placeholder="Enter Total Bayar" name="bayar" 
		value="<?= $kita->total_bayar ?>">
	</div>
	
	   <input type="hidden" value="<?= $kita->id_nota?>" name="idn"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>