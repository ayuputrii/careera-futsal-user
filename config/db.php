<?php
  $db = new mysqli('localhost:3306', 'root', '', 'db_futsal');
  
  if(!$db){
    echo "Gagal koneksi ke database";
  }else{
    echo "";
  }
?>