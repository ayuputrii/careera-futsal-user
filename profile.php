<?php
  include 'layout/header-login.php';  

  if(isset($_POST['cancel'])){
    echo "<script>document.location.href='info-lapangan.php'; </script>";
  }

?>
  <div class="mt-4 pt-4">
    <div style="background-color:rgba(89, 222, 43, 15%); padding: 36px;" class="w-75 mx-auto rounded-4 p-4">
      <div class="d-flex justify-content-center">
        <div class="shadow rounded-circle bg-white mt-4 p-4 mb-4">
            <img src="assets/icon/ic-ig.svg" width="60px" height="60px"/>
        </div>
      </div>
      <h6 style="text-align: center; font-weight: bold;">Ubah Foto Profile</h6>
      <form method="POST" action="">
        <div class="mb-3">
          <label for="nama" class="form-label text-dark">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="nama" placeholder="Input Nama">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label text-dark">Email</label>
          <input type="text" class="form-control" id="email" name="email" value="email" placeholder="Input Email">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label text-dark">Alamat</label>
          <textarea class="form-control" id="alamat" name="alamat" value="" placeholder="Input Alamat"></textarea>
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin" class="form-label text-dark">Jenis Kelamin</label>
          <div class="form-floating">
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Floating label select example">
              <option selected>Pilih Jenis Kelamin</option>
              <option value="Perempuan">Perempuan</option>
              <option value="Laki-Laki">Laki-Laki</option>
            </select>
            <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
          </div>
        </div>
        <div class="d-flex flex-row justify-content-end">
          <button type="submit" class="btn btn-success bg-opacity-75 text-white rounded-4" name="update" onClick="return confirm('Apakah data yang diubah sudah sesuai?');">Ubah</button>&nbsp;
          <button type="submit" class="btn btn-danger bg-opacity-75 text-white rounded-4" name="cancel" onClick="return confirm('Apakah anda yakin membatalkannya?');">Batal</button>
        </div>
      </form>
  </div>
<?php include 'layout/footer.php';