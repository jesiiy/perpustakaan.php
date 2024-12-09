<main id="main" class="main">

  <div class="pagetitle">
    <h1>Table Kelas</h1>
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
            <h5 class="card-title">Kelas</h5>
            <a href="<?= base_url('home/input_kelas') ?>" class="btn btn-success">+Tambah</a>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Kelas</th>
                  <th scope="col">Id Jurusan</th>
                  <th scope="col">Lokasi Kelas</th>
                  <th scope="col">WaliKelas</th>
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
                    <td><?= $value->nama_kelas ?></td>
                    <td><?= $value->id_jurusan ?></td>
                    <td><?= $value->lokasi_kelas ?></td>
                    <td><?= $value->walikelas ?></td>
                    <td>
                     
                      <a href="<?= base_url('Home/editkelas/'.$value->id_kelas) ?>
                      " class="btn btn-info">
                      <i class="bi bi-info-lg"></i></a>
                      
                      <a href="<?= base_url('Home/hapus_kelas/'.$value->id_kelas) ?>
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