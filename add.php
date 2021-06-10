<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  // $id_pelanggan = $_POST['id_pelanggan'];
  $nama_pelanggan = $_POST['nama_pelanggan'];
  $alamat_pelanggan = $_POST['alamat_pelanggan'];
    $wa = $_POST['wa'];

  // id_produk bernilai '' karena kita set auto increment;
    $query = "INSERT INTO pelanggan (nama_pelanggan,alamat_pelanggan,wa) VALUES ( '$nama_pelanggan', '$alamat_pelanggan', '$wa')";
  $q = $conn->query($query);
  
  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data pelanggan berhasil ditambahkan'); 
	window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data pelanggan gagal ditambahkan');
	window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}