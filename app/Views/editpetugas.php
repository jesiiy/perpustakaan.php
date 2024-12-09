<h3>Edit Petugas</h3>
	<form action="<?= base_url('home/simpanpetugas') ?>" method="post">
	<div class="mb-3">
		<label for="text" class="form-label">Nama Petugas: </label>
		<input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama" 
		value="<?= $takdirestui->nama_petugas ?>">
	</div>
	<div class="mb-3">
		<label for="text" class="form-label">Username: </label>
		<input type="text" class="form-control" id="username" placeholder="Enter username" name="username" 
		value="<?= $takdirestui->username ?>">
	</div>
	<div class="mb-3">
		<label for="text" class="form-label">Password: </label>
		<input type="text" class="form-control" id="password" placeholder="Enter password" name="password" 
		value="<?= $takdirestui->password ?>">
	</div>
		   <input type="hidden" value="<?= $takdirestui->level?>" name="level"> 
		   <input type="hidden" value="<?= $takdirestui->id_user?>" name="idu"> 
	   <input type="hidden" value="<?= $takdirestui->id_petugas?>" name="id"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>