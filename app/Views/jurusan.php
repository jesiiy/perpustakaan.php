<main id="main" class="main">

  <div class="pagetitle">
    <h1>Table Jurusan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Jurusan</h5>
            <a href="<?= base_url('home/input_jurusan') ?>" class="btn btn-success">+Tambah</a>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Jurusan</th>
                  <th scope="col">Kode Jurusan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $ms=1;
                foreach ($takdirestui as $key => $value) {
                  ?>
                  <tr>
                    <td scope="row"><?= $ms++ ?></td>
                    <td><?= $value->nama_jurusan ?></td>
                    <td><?= $value->kode_jurusan ?></td>
                    <td>
                     
                      <a href="<?= base_url('Home/editjurusan/'.$value->id_jurusan) ?>
                      " class="btn btn-info">
                      <i class="bi bi-info-lg"></i></a>
                      
                      <a href="<?= base_url('Home/hapus_jurusan/'.$value->id_jurusan) ?>
                      "class="btn btn-danger" ><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>

                  <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>