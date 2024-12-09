<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Peminjaman</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Input</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
<h3>Daftar Peminjaman</h3>
<form action="<?= base_url('home/simpan_peminjaman') ?>" method="POST">
<table>
<div class="mk-3">
      </div>
      <div class="mb-2">
        <label for="text" class="form-label">Nama Siswa: </label>
        <select class="form-control" name="siswa">
        <option> Pilih Siswa</option>
        <?php
        foreach ($siswa as $key => $value) {
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
        foreach ($buku as $key => $value) {
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
        foreach ($petugas as $key => $value) {
          ?>
          <option value="<?=$value->id_petugas?>"><?= $value->nama_petugas?></option>
          <?php
        }
        ?>
      </select>
    </div>
    <div class="mb-2">
        <label for="text" class="form-label">Tanggal Peminjaman: </label>
        <input type="date" class="form-control" id="kode" placeholder="Enter tanggal" name="peminjaman">
    </div>
    <div class="mb-2">
        <label for="text" class="form-label">Tanggal Pengembalian: </label>
        <input type="date" class="form-control" id="kode" placeholder="Enter tanggal" name="pengembalian">
    </div>
    <div class="mb-2">
        <label for="text" class="form-label">Denda: </label>
        <input type="text" class="form-control" id="kode" placeholder="Enter nominal" name="denda">
    </div>
    <div class="mb-2">
        <label for="text" class="form-label">Jumlah: </label>
        <input type="text" class="form-control" id="jumlah" placeholder="Enter jumlah" name="jumlah">
    </div>

       <button type="submit" class="btn btn-primary">Submit</button>
       
</table>
</form>
</body>
</html>
</div>
</div>
          </div>

        </div>
      </div>
    </section>