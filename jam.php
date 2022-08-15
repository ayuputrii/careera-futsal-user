<?php 
  include 'layout/header.php';
  $data = select("SELECT * FROM tb_jam ORDER BY kode_jam DESC");

  if(isset($_POST['add'])){
    if(create($_POST) > 0){
      echo "<script>alert('Data Berhasil Disimpan.'); document.location.href='jam.php'; </script>";
    }else{
      echo "<script>alert('Data Gagal Untuk Disimpan.'); document.location.href='jam.php'; </script>";
    }
  }
?>
  <div class="p-4 mt-4">
    <div class="d-flex justify-content-between">
      <div class="col-8">
        <h2 class="text-secondary">Menu Jam Ketersediaan</h2>
        <form action="" method="POST">
          <div class="mb-3">
            <label for="jam" class="form-label text-secondary text-opacity-75">Jam</label>
            <input type="time" class="form-control" id="jam" name="jam" required>
          </div>
          <button type="submit" class="btn btn-info text-white" name="add" onClick="return confirm('Apakah data yang anda masukkan sudah sesuai?');">Tambah</button>
        </form>
        <table class="table table-bordered mt-4">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Jam</th>
              <th scope="col">Jam</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data as $jam) : ?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <th scope="row"><?= $jam['kode_jam']; ?></th>
                <th scope="row"><?= $jam['jam']; ?></th>
                <th scope="row" class="d-flex flex-row">
                  <a href="update-jam.php?kode_jam=<?= $jam['kode_jam']; ?>" class="btn btn-success"  onClick="return confirm('Apakah anda yakin data jam ini diubah?');">Ubah</a>&nbsp;
                  <a href="delete-jam.php?kode_jam=<?= $jam['kode_jam']; ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin data jam ini dihapus?');">Hapus</a>
                </th>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="d-flex flex-row-reverse p-4 mb-3 align-self-end">
        <img src="assets/icon/futsal-logo.svg" alt="" width="100%" height="100%" class="d-inline-block align-text-center">
      </div>
    </div>
   
  </div>
<?php include 'layout/footer.php'?>