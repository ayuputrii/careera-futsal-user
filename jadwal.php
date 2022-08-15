<?php 
  include 'layout/header.php';
  $data = select("SELECT * FROM tb_jadwal ORDER BY kode_jadwal DESC");

  $query ="SELECT kode_lapangan FROM tb_lapangan";
  $result = $db->query($query);
  if($result > 0){
    $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
  }
?>
  <div class="p-4 mt-4">
    <div class="d-flex justify-content-between">
      <div class="col-8">
        <h2 class="text-secondary">Menu Jadwal</h2>
        <form>
          <div class="mb-3">
            <label for="tgl_jadwal" class="form-label text-secondary text-opacity-75">Tanggal Jadwal</label>
            <input type="date" class="form-control" id="tgl_jadwal" name="tgl_jadwal" placeholder="Input Tanggal Jadwal" required>
          </div>

          <div class="mb-3">
            <label for="tgl_jadwal" class="form-label text-secondary text-opacity-75">Kode Lapangan</label>
            <div class="form-floating">
              <select class="form-select" id="kode_lapangan" aria-label="Floating label select example">
                  <option selected>Pilih Kode Lapangan</option>
                  <?php foreach ($options as $option) { ?>
                  <option><?php echo $option['kode_lapangan']; ?></option>
                  <?php }?>
              </select>
              <label for="kode_lapangan">Pilih Kode Lapangan</label>
            </div>
          </div>

          <div class="mb-3">
            <label for="tgl_jadwal" class="form-label text-secondary text-opacity-75">Kode Jam</label>
            <div class="form-floating">
              <select class="form-select" id="kode_jam" aria-label="Floating label select example">
                  <option selected>Pilih Kode Jam</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>
              <label for="kode_jam">Pilih Kode Jam</label>
            </div>
          </div>

          <div class="mb-3">
            <label for="harga" class="form-label text-secondary text-opacity-75">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" placeholder="Input Harga" required>
          </div>

          <div class="mb-3">
            <label for="status_lapangan" class="form-label text-secondary text-opacity-75">Status Lapangan</label>
            <div class="form-floating">
              <select class="form-select" id="status_lapangan" aria-label="Floating label select example">
                  <option selected>Pilih Status Lapangan</option>
                  <option value="Tersedia">Tersedia</option>
                  <option value="Tidak Tersedia">Tidak Tersedia</option>
              </select>
              <label for="status_lapangan">Pilih Kode Jam</label>
            </div>
          </div>
          <button type="submit" class="btn btn-info text-white" name="add" onClick="return confirm('Apakah data yang anda masukkan sudah sesuai?');">Tambah</button>
        </form>
        <table class="table table-bordered mt-4">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tanggal Jadwal</th>
              <th scope="col">Kode Lapangan</th>
              <th scope="col">Kode Jam</th>
              <th scope="col">Harga</th>
              <th scope="col">Status Lapangan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data as $jadwal) : ?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <th scope="row"><?= $jadwal['tanggal_jadwal']; ?></th>
                <th scope="row"><?= $jadwal['kode_lapangan']; ?></th>
                <th scope="row"><?= $jadwal['kode_jam']; ?></th>
                <th scope="row"><?= $jadwal['harga']; ?></th>
                <th scope="row"><?= $jadwal['status_lapangan']; ?></th>
                <th scope="row" class="d-flex flex-row">
                  <a href="update-jadwal.php?kode_jadwal=<?= $jadwal['kode_jadwal']; ?>" class="btn btn-success"  onClick="return confirm('Apakah anda yakin data jadwal ini diubah?');">Ubah</a>&nbsp;
                  <a href="delete-jadwal.php?kode_jadwal=<?= $jadwal['kode_jadwal']; ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin data jadwal ini dihapus?');">Hapus</a>
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