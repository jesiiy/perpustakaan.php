<h3>Edit Siswa</h3>
	<form action="<?= base_url('home/simpansiswa') ?>" method="post">
	<div class="mb-3">
		<label for="text" class="form-label">Nama Siswa: </label>
		<input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama" 
		value="<?= $takdirestui->nama_siswa ?>">
	</div>
	<div class="mb-3">
		<label for="text" class="form-label">Nis: </label>
		<input type="number" class="form-control" id="nis" placeholder="Enter nis" name="nis" 
		value="<?= $takdirestui->nis ?>">
	</div>
	<div class="mb-3">
		<label for="text" class="form-label">Nama Kelas: </label>
        <select class="form-control" name="kelas">
        <option> Pilih Kelas</option>
        <?php
        foreach ($takdirestui as $key => $value) {
          ?>
          <option value="<?=$value->id_kelas?>"><?=$value->nama_kelas?></option>
          <?php
        }
        ?>
      </select>
      	</div>
		   <input type="hidden" value="<?= $takdirestui->id_user?>" name="idu"> 
	   <input type="hidden" value="<?= $takdirestui->id_siswa?>" name="id"> 
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>