<?php
require_once 'koneksi.php';
// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // ambil data berdasarkan id_pelanggan
  $q = $conn->query("SELECT * FROM pelanggan WHERE id_pelanggan = '$id'");
  foreach ($q as $dt) :
  ?>
  <h1>CRUD Tugas 10 (Ari Hanggara 311810542)</h1>
  <h2>Halaman Ubah Data</h2>

  <form action="proses_update.php" method="post">
    <input type="hidden" name="id_pelanggan" value="<?= $dt['id_pelanggan'] ?>">
    <input type="text" name="nama_pelanggan" value="<?= $dt['nama_pelanggan'] ?>">
    <input type="text" name="alamat_pelanggan" value="<?= $dt['alamat_pelanggan'] ?>">
    <input type="number" name="wa" value="<?= $dt['wa'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>

  <?php
  endforeach;
}