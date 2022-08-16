<?php
  include 'layout/header.php';
  $id_history = (int)$_GET['id_history'];
  
  if(deleteHistory($id_history) > 0){
    echo "<script>alert('Data Berhasil Dihapus.'); document.location.href= history.php'; </script>";
  }else{
    echo "<script>alert('Data Gagal Untuk Dihapus.'); document.location.href= history.php'; </script>";
  }
?>