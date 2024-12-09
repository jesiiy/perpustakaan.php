<h3>Edit Peminjaman</h3>
	<form action="<?= base_url('home/simpanpeminjaman') ?>" method="post">
	<div class="mb-2">
        <label for="text" class="form-label">Nama Siswa: </label>
        <select class="form-control" name="siswa">
        <option> Pilih Siswa</option>
        <?php
        foreach ($takdirestui as $key => $value) {
          ?>
          <option value="<?=$value->id_siswa?>"><?= $value->nama_siswa?></option>
          <?php
        }
        ?>
      </select>
    </div>
        <div class="mb-2">
        <label for="text" class="form-label">Nama Buku: </label>
<select class="form-control" name="buku">
        <option> Pilih Buku</option>
        <?php
        foreach ($takdirestui as $key => $value) {
          ?>
          <option value="<?=$value->id_buku?>"><?= $value->judul_buku?></option>
          <?php
        }
        ?>
      </select>
    </div>
        <div class="mb-2">
        <label for="text" class="form-label">Nama Petugas: </label>
        <select class="form-control" name="petugas">
        <option> Pilih Petugas</option>
        <?php
        foreach ($takdirestui as $key => $value) {
          ?>
          <option value="<?=$value->id_petugas?>"><?= $value->nama_petugas?></option>
          <?php
        }
        ?>
      </select>
    </div>
	<div class="mb-2">
		<label for="text" class="form-label">Tanggal Peminjaman: </label>
		<input type="date" class="form-control" id="kode" placeholder="Enter tanggal" name="peminjaman" 
		value="<?= $takdirestui->tanggal_peminjaman ?>">
	</div>
	<div class="mb-2">
		<label for="text" class="form-label">Tanggal Pengembalian: </label>
		<input type="date" class="form-control" id="kode" placeholder="Enter tanggal" name="pengembalian" 
		value="<?= $takdirestui->tanggal_pengembalian ?>">
	</div>
	<div class="mb-2">
		<label for="text" class="form-label">Denda: </label>
		<input type="text" class="form-control" id="kode" placeholder="Enter nominal" name="denda" 
		value="<?= $takdirestui->denda ?>">
	</div>
	<div class="mb-2">
		<label for="text" class="form-label">Jumlah: </label>
		<input type="text" class="form-control" id="kode" placeholder="Enter jumlah" name="jumlah" 
		value="<?= $takdirestui->jumlah ?>">
	</div>

	   <input type="hidden" value="<?= $takdirestui->id_peminjam?>" name="id">
	   <button type="submit" class="btn btn-primary">Submit</button>
</form>