<?php
  include 'layout/header.php';
  $kode_jadwal = (int)$_GET['kode_jadwal'];
  
  if(deleteJadwal($kode_jadwal) > 0){
    echo "<script>alert('Data Berhasil Dihapus.'); document.location.href='jadwal.php'; </script>";
  }else{
    echo "<script>alert('Data Gagal Untuk Dihapus.'); document.location.href='jadwal.php'; </script>";
  }
?>