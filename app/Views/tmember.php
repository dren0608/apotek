<h3>Tambah Member</h3>
<form action="<?= base_url('home/simpan_tmember') ?>" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Username: </label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Username" name="usn">
    </div>
    <div class="mb-3">
        <label for="number" class="form-label">NOMOR HP: </label>
        <input type="number" class="form-control" id="nomor" placeholder="Enter Nomor HP" name="nomor">
    </div>
    <div class="mb-3">
        <label for="number" class="form-label">Poin Member: </label>
        <input type="number" class="form-control" id="poin" placeholder="Enter Poin Member" name="poin">
    </div>
    <input type="hidden" value="<?= $kita->id_member?>" name="idm"> 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>