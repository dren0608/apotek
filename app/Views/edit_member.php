<h3>Edit Member</h3>
	<form action="<?= base_url('home/simpan_member') ?>" method="post">
	<div class="mb-3 mt">
		<label for="email" class="form-label">UserName: </label>
		<input type="email" class="form-control" id="usn" placeholder="Enter UserName" name="usn" value="<?= $kita->id_user ?> ">
	</div>
	<div class="mb-3 mt">
		<label for="number" class="form-label">NO HP: </label>
		<input type="number" class="form-control" id="enh" placeholder="Enter NO HP" name="nomor" value="<?= $kita->no_hp ?> ">
	</div>
	<div class="mb-3">
		<label for="number" class="form-label">Poin Member: </label>
		<input type="number" class="form-control" id="epm" placeholder="Enter Poin Member" name="poin" 
		value="<?= $kita->poin_member ?>">
	</div>
	

	
	   <input type="hidden" value="<?= $kita->id_member?>" name="idm"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>