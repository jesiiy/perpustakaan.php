<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Petugas</h1>
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
<h3>Daftar User</h3>
<form action="<?= base_url('home/simpan_user') ?>" method="POST">
<table>
<div class="mk-3">
      </div>
        <div class="mk-3">
      <label for="nama">Username :</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter username " name="username">
    </div>
    </div>
        <div class="mk-3">
      <label for="username">Password :</label>
      <input type="text" class="form-control" id="username" placeholder="Enter pw " name="password">
    </div>
    </div>
        <div class="mk-3">
      <label for="password">Level :</label>
      <input type="text" class="form-control" id="password" placeholder="Enter level " name="level">
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