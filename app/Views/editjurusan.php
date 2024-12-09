<h3>Edit Jurusan</h3>
	<form action="<?= base_url('home/simpanjurusan') ?>" method="post">
	<div class="mb-3">
		<label for="text" class="form-label">Nama Jurusan: </label>
		<input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama" 
		value="<?= $takdirestui->nama_jurusan ?>">
	</div>
	<div class="mb-3">
		<label for="text" class="form-label">Kode Jurusan: </label>
		<input type="text" class="form-control" id="kode" placeholder="Enter kode" name="kode" 
		value="<?= $takdirestui->kode_jurusan ?>">
	</div>
	   <input type="hidden" value="<?= $takdirestui->id_jurusan?>" name="id"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>