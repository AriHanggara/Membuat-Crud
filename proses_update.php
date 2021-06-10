<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id_pelanggan'];
  $nama_pelanggan = $_POST['nama_pelanggan'];
  $alamat_pelanggan = $_POST['alamat_pelanggan'];
  $wa = $_POST['wa'];
  
  // update data berdasarkan id_pelanggan yg dikirimkan
  $q = $conn->query("UPDATE pelanggan SET nama_pelanggan = '$nama_pelanggan', alamat_pelanggan = '$alamat_pelanggan', wa = '$wa' WHERE id_pelanggan = '$id'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data pelanggan berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data pelanggan gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}