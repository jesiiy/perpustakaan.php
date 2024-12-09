<h3>Edit Kelas</h3>
	<form action="<?= base_url('home/simpankelas') ?>" method="post">
	<div class="mb-3">
		<label for="text" class="form-label">Nama Kelas: </label>
		<input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama" 
		value="<?= $takdirestui->nama_kelas ?>">
	</div>
	<div class="mb-3">
		<label for="text" class="form-label">Id Jurusan: </label>
		<input type="number" class="form-control" id="idjrsn" placeholder="Enter id" name="idjurusan" 
		value="<?= $takdirestui->id_jurusan ?>">
	</div>
	<div class="mb-3">
		<label for="text" class="form-label">Lokasi Kelas: </label>
		<input type="text" class="form-control" id="lokasi" placeholder="Enter lokasi" name="lokasi" 
		value="<?= $takdirestui->lokasi_kelas ?>">
	</div>
	<div class="mb-3">
		<label for="text" class="form-label">WaliKelas: </label>
		<input type="text" class="form-control" id="lokasi" placeholder="Enter lokasi" name="wali" 
		value="<?= $takdirestui->walikelas ?>">
	</div>
	   <input type="hidden" value="<?= $takdirestui->id_kelas?>" name="id"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>