<?php
  include 'db.php';

  //fungsi untuk menampilkan data
  function select($query){
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    if(!$result){
      die(mysqli_error($db));
    }

    while($row = mysqli_fetch_array($result)){
      $rows[] = $row;
    }

    return $rows;
  }

  //fungsi untuk menambahkan data jam
  function createJam($post){
    global $db;

    $jam = $post['jam'];

    $query = "INSERT INTO tb_jam VALUES(null, '$jam')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
  }
  //fungsi untuk menambahkan data jadwal
  function createJadwal($post){
    global $db;

    $jadwal = $post['jadwal'];
    $kode_lapangan = $post['kode_lapangan'];
    $kode_jam = $post['kode_jam'];
    $harga = $post['harga'];
    $status_lapangan = $post['status_lapangan'];

    $query = "INSERT INTO tb_jadwal VALUES(null, '$jadwal', '$kode_lapangan', '$kode_jam', '$harga', '$status_lapangan')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
  }

  //fungsi untuk mengubah data jam
  function updateJam($post){
    global $db;

    $kode_jam = $post['kode_jam'];
    $jam = $post['jam'];

    $query = "UPDATE tb_jam SET jam = '$jam' WHERE kode_jam=$kode_jam";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
  }

  //fungsi untuk hapus data jam
  function deleteJam($kode_jam){
    global $db;

    mysqli_query($db, "DELETE FROM tb_jam WHERE kode_jam=$kode_jam");
    return mysqli_affected_rows($db);
  }
?>