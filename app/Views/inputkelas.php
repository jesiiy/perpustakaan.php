<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Kelas</h1>
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
<h3>Daftar Kelas</h3>
<form action="<?= base_url('home/simpan_kelas') ?>" method="POST">
<table>
<div class="mk-3">
      </div>
        <div class="mk-3">
      <label for="nama">Nama Kelas :</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter nama " name="nama">
    </div>
        <div class="mk-3">
      <label for="id">Id Jurusan :</label>
      <input type="number" class="form-control" id="idjurusan" placeholder="Enter idjrsn " name="id">
    </div>
        <div class="mk-3">
      <label for="lokasi">Lokasi Kelas :</label>
      <input type="text" class="form-control" id="lokasi" placeholder="Enter lokasi " name="lokasi">
    </div>
    <div class="mk-3">
      <label for="wali">WaliKelas :</label>
      <input type="text" class="form-control" id="wali" placeholder="Enter walikelas " name="wali">
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