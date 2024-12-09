<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Siswa</h1>
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
<h3>Daftar Siswa</h3>
<form action="<?= base_url('home/simpan_siswa') ?>" method="POST">
<table>
<div class="mk-3">
      </div>
        <div class="mk-3">
      <label for="nama">Nama Siswa :</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter nama " name="nama">
    </div>
    </div>
        <div class="mk-3">
      <label for="nis">Nis :</label>
      <input type="number" class="form-control" id="nis" placeholder="Enter nis " name="nis">
    </div>
    </div>
        <div class="mk-3">
      <label for="idkls">Nama Kelas :</label>
        <select class="form-control" name="kelas">
        <option> Pilih Kelas</option>
        <?php
        foreach ($kelas as $key => $value) {
          ?>
          <option value="<?=$value->id_kelas?>"><?= $value->nama_kelas?></option>
          <?php
        }
        ?>
      </select>
    </div>
            <div class="mk-3">
      <label for="username">Username :</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username " name="username">
    </div>
    </div>
        <div class="mk-3">
      <label for="password">Password :</label>
      <input type="text" class="form-control" id="password" placeholder="Enter pw " name="password">
    </div>

        <tr>
       <button type="submit" class="btn btn-primary">Submit</button>
    </tr>
    </tr>
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