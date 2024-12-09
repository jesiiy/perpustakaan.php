<main id="main" class="main">

  <div class="pagetitle">
    <h1>Table Buku</h1>
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
            <h5 class="card-title">Buku</h5>
            <a href="<?= base_url('home/input_buku') ?>" class="btn btn-success">+Tambah</a>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul Buku</th>
                  <th scope="col">Kode Buku</th>
                  <th scope="col">Tahun Terbit</th>
                  <th scope="col">Kode Rak</th>
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
                    <td><?= $value->judul_buku ?></td>
                    <td><?= $value->kode_buku ?></td>
                    <td><?= $value->tahun_terbit ?></td>
                    <td><?= $value->kode_rak ?></td>
                    <td>
                     
                      <a href="<?= base_url('Home/editbuku/'.$value->id_buku) ?>
                      " class="btn btn-info">
                      <i class="bi bi-info-lg"></i></a>
                      
                      <a href="<?= base_url('Home/hapus_buku/'.$value->id_buku) ?>
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