<h3>Edit Buku</h3>
	<form action="<?= base_url('home/simpanbuku') ?>" method="post">
	<div class="mb-3">
		<label for="text" class="form-label">Judul Buku: </label>
		<input type="text" class="form-control" id="judul" placeholder="Enter judul" name="judul" 
		value="<?= $takdirestui->judul_buku ?>">
	</div>
	<div class="mb-3">
		<label for="text" class="form-label">Kode Buku: </label>
		<input type="text" class="form-control" id="kode" placeholder="Enter kode" name="kode" 
		value="<?= $takdirestui->kode_buku ?>">
	</div>
		<div class="mb-3">
		<label for="text" class="form-label">Tahun Terbit: </label>
		<input type="date" class="form-control" id="kode" placeholder="Enter tanggal" name="terbit" 
		value="<?= $takdirestui->tahun_terbit ?>">
	</div>
	<div class="mb-3">
		<label for="text" class="form-label">Kode Rak: </label>
		<input type="text" class="form-control" id="kode" placeholder="Enter kode" name="rak" 
		value="<?= $takdirestui->kode_rak ?>">
	</div>
	   <input type="hidden" value="<?= $takdirestui->id_buku?>" name="id"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>