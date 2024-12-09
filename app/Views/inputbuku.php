<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Buku</h1>
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
<h3>Daftar Buku</h3>
<form action="<?= base_url('home/simpan_buku') ?>" method="POST">
<table>
<div class="mk-3">
      </div>
        <div class="mk-3">
      <label for="judul">Judul Buku :</label>
      <input type="text" class="form-control" id="judul" placeholder="Enter judul " name="judul">
    </div>
        <div class="mk-3">
      <label for="kode">Kode Buku :</label>
      <input type="text" class="form-control" id="kode" placeholder="Enter kode " name="kode">
    </div>
    <div class="mk-3">
      <label for="terbit">Tahun Terbit :</label>
      <input type="date" class="form-control" id="terbit" placeholder="Enter terbit " name="terbit">
    </div>
    <div class="mk-3">
      <label for="koderak">Kode Rak :</label>
      <input type="text" class="form-control" id="koderak" placeholder="Enter kode " name="rak">
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