<table class="table table-striped" id="my-table">
  <thead>
    <tr>
      <th width="3%">NO</th>
      <th>Id Siswa</th>
      <th>Id Buku</th>
      <th>Id Petugas</th>
      <th>Tanggal Peminjaman</th>
      <th>Tanggal Pengembalian</th>
      <th>Id Nota</th>
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
        <td><?= $value->id_siswa ?></td>
        <td><?= $value->id_buku ?></td>
        <td><?= $value->id_petugas ?></td>
        <td><?= $value->tanggal_peminjaman ?></td>
        <td><?= $value->tanggal_pengembalian ?></td>
        <td><?= $value->id_nota ?></td>
      </tr>
      <?php 
    } 
    ?>
    <script>
      window.onload = () => {
        const table = document.getElementById('my-table');
        exportTable(table, 'table_bm.xls');
      };

      function exportTable(table, filename) {
        const tableHTML = encodeURIComponent(table.outerHTML);
        const downloadLink = document.createElement('a');

        downloadLink.href = `data:application/vnd.ms-excel,${tableHTML}`;
        downloadLink.download = filename;
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);
        window.close();
      }
    </script>
  </tbody>
</table>