<main id="main" class="main">

    <div class="pagetitle">
        <h1>Table User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
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
                                    <a href="<?= base_url('home/input_user') ?>" class="btn btn-success">+Tambah</a>


                        <!-- Add and Search Buttons -->
                        <form class="d-flex mb-3">
                            <input class="form-control me-2" type="text" placeholder="Search">
                            <button class="btn btn-primary" type="button">Search</button>
                        </form>

                        <!-- Table with stripped rows -->
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                              <tr>
                                <th width="3%">NO</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                          <?php
                          $ms=1;
                          foreach ($takdirestui as $key => $value) {
                            ?>
                            <tr>
                              <td><?= $ms++ ?></td>
                              <td><?= $value->username ?></td>
                              <td><?= $value->password ?></td>
                              <td><?= $value->level ?></td>
                              <td>
                                <a href="<?= base_url('home/edit_user/'.$value->id_user) ?>" class="btn btn-info">
                      <i class="bi bi-info-lg"></i></a>
                                <a href="<?= base_url('home/hapus_user/'.$value->id_user) ?>"class="btn btn-danger" ><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php 
                    } 
                    ?>
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
    </div>
</div>
</div>
</section>

</main><!-- End #main -->