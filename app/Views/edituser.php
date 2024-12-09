<h3>Edit User</h3>
  <form action="<?= base_url('home/simpanuser') ?>" method="post">
  <div class="mb-3">
    <label for="text" class="form-label">Username: </label>
    <input type="email" class="form-control" id="nama" placeholder="Enter id" name="username" 
    value="<?= $takdirestui->username ?>">
  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Password: </label>
    <input type="text" class="form-control" id="stok" placeholder="Enter jumlah" name="pw" 
    value="<?= $takdirestui->password ?>">
  </div>
  <div class="mb-3">
    <label for="text" class="form-label">level: </label>
    <input type="text" class="form-control" id="stok" placeholder="Enter level" name="level" 
    value="<?= $takdirestui->level ?>">
  </div>
     <input type="hidden" value="<?= $takdirestui->id_user?>" name="id"> 
     <button type="submit" class="btn btn-primary">Submit</button>
</form>