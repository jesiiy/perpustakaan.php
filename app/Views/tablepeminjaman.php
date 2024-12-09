<table>
  <tr>
   <td width="10%"><img src="<?= base_url('img/logoobor.png');?>" width="90%"></td>
   <td width="250%">Perpustakaan Jesi</td>
 </tr>
</table>
<table class="table table-striped">
  <thead>
    <tr>
      <th width="3%">NO</th>
      <th>Id Siswa</th>
      <th>Id Buku</th>
      <th>Id Petugas</th>
      <th>Tanggal Peminjaman</th>
      <th>Tanggal Pengembalian</th>
      <th>Denda</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    $ms=1;
    foreach ($takdirestui as $key => $value) {
      ?>
      <tr>
        <td><?= $ms++ ?></td>
        <td><?= $value->id_siswa ?></td>
        <td><?= $value->id_buku ?></td>
        <td><?= $value->id_petugas ?></td>
        <td><?= $value->tanggal_peminjaman ?></td>
        <td><?= $value->tanggal_pengembalian ?></td>
        <td><?= $value->denda ?></td>
      </tr>
      <?php 
    } 
    ?>
  </tbody>
</table>
<script>
  window.print();
</script>