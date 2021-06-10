<?php
// panggil koneksinya
require_once 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD Tugas 10</title>
</head>
<body>
  <h1>CRUD Tugas 10 (Ari Hanggara 311810542)</h1>
  <!-- 
  Create atau menambahkan data baru 
  Data akan dikirimkan ke add.php untuk diproses
  -->
  <form method="post" action="add.php">
    <input type="text" name="nama_pelanggan" placeholder="Nama pelanggan">
   <input type="text" name="alamat_pelanggan" placeholder="Alamat pelanggan">
<input type="number" name="wa" placeholder="WA">

    <input type="submit" name="submit" value="Tambah Data">
  </form><br/>
  <!-- Read atau menampilkan data dari database -->
  <table border="1">
    <tr>
      <th>No.</th> 
      <th>ID Pelanggan</th>
      <th>Nama Pelanggan</th>
      <th>Alamat Pelanggan</th>
   <th>WA</th>
      <th colspan="2">Aksi</th>
    </tr>
    <?php
    // Tampilkan semua data
    $q = $conn->query("SELECT * FROM pelanggan");

    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>
    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['id_pelanggan'] ?></td>
      <td><?= $dt['nama_pelanggan'] ?></td>
      <td><?= $dt['alamat_pelanggan'] ?></td>
      <td><?= $dt['wa'] ?></td>

      <td><a href="update.php?id=<?= $dt['id_pelanggan'] ?>">Ubah</a></td>
      <td><a href="delete.php?id=<?= $dt['id_pelanggan'] ?>" 
	  onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>
    <?php
    endwhile;
    ?> 
  </table>
</body>
</html>