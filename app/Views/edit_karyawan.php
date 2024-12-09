<h3>Edit Karyawan</h3>
	<form action="<?= base_url('home/simpan_karyawan') ?>" method="post">
	<div class="mb-3 mt">
		<label for="name" class="form-label">Nama Karyawan: </label>
		<input type="text" class="form-control" id="ink" placeholder="Enter Nama" name="nama" value="<?= $kita->nama ?> ">
	</div>
	<div class="mb-3">
		<label for="number" class="form-label">NIK: </label>
		<input type="number" class="form-control" id="nik" placeholder="Enter NIK" name="nik" 
		value="<?= $kita->NIK ?>">
	</div>
	<div class="mb-3">
		<label for="number" class="form-label">Nomor HP: </label>
		<input type="number" class="form-control" id="nomor" placeholder="Enter Nomor HP" name="nomor" 
		value="<?= $kita->no_hp ?>">
	</div>
	<div class="mb-3 mt">
            <select class="form-control" name="jk" id="jenis_kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L">L</option>
            <option value="P">P</option>
        </select>
    </div>
	<div class="mb-3">
		<label for="text" class="form-label">Tempat Lahir: </label>
		<input type="text" class="form-control" id="tl" placeholder="Enter Tempat Lahir" name="tempat" 
		value="<?= $kita->tampat_lahir ?>">
	</div>
	<div class="mb-3">
		<label for="date" class="form-label">Tanggal Lahir: </label>
		<input type="date" class="form-control" id="date" placeholder="Enter Tanggal Lahir" name="tgl" 
		value="<?= $kita->tanggal_lahir ?>">
	</div>
	<div class="mb-3">
		<label for="text" class="form-label">Alamat: </label>
		<input type="text" class="form-control" id="almt" placeholder="Enter Alamat" name="almt" 
		value="<?= $kita->alamat ?>">
	</div>
	
	   <input type="hidden" value="<?= $kita->id_karyawan?>" name="idk"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>