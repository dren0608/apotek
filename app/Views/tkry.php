<h3>Tambah Karyawan</h3>
<form action="<?= base_url('home/simpan_tkry') ?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Karyawan: </label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Nama Karyawan" name="nama">
    </div>
    <div class="mb-3">
        <label for="nik" class="form-label">NIK: </label>
        <input type="number" class="form-control" id="nik" placeholder="Enter NIK" name="nik">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email: </label>
        <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    <div class="mb-3">
        <label for="nohp" class="form-label">NO HP: </label>
        <input type="number" class="form-control" id="nohp" placeholder="Enter Nomor HP" name="nohp">
    <div class="mb-3 mt">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin: </label>
        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="tlh" class="form-label">Tempat Lahir: </label>
        <input type="text" class="form-control" id="tlh" placeholder="Enter Tempat Lahir" name="tlh">
    </div>
    <div class="mb-3">
        <label for="tglh" class="form-label">Tanggal Lahir: </label>
        <input type="date" class="form-control" id="tglh" placeholder="Enter Tanggal Lahir" name="tglh">
    </div>
    <div class="mb-3">
        <label for="almt" class="form-label">Alamat: </label>
        <input type="text" class="form-control" id="almt" placeholder="Enter Alamat" name="almt">
    </div>
    <div class="mb-3 mt">
        <label for="level" class="form-label">Level: </label>
        <select class="form-control" name="level" id="level">
            <option value="">Pilih Level</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <input type="hidden" value="" name="idtbk"> 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>