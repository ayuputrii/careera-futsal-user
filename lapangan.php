<?php 
  include 'layout/header.php';
  $data = select("SELECT * FROM tb_lapangan ORDER BY kode_lapangan DESC");
?>
  <div class="p-4 mt-4">
    <div class="d-flex justify-content-between">
      <div class="col-8">
        <h2 class="text-secondary">Menu Lapangan</h2>
        <form>
          <div class="mb-3">
            <label for="nomor_lapangan" class="form-label text-secondary text-opacity-75">Nomor Lapangan</label>
            <input type="number" class="form-control" id="nomor_lapangan" name="nomor_lapangan" placeholder="Input Nomor Lapangan" required>
          </div>
          <div class="mb-3">
            <label for="gambar" class="form-label text-secondary text-opacity-75">Gambar</label>
            <input type="image" class="form-control" id="gambar" name="gambar" required>
          </div>
          <label for="deskripsi" class="form-label text-secondary text-opacity-75">Deskripsi</label>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="deskripsi" name="deskripsi"></textarea>
            <label for="floatingTextarea">Deskripsi</label>
          </div>
          <button type="submit" class="btn btn-info text-white mt-3">Submit</button>
        </form>
        <table class="table table-bordered mt-4">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Lapangan</th>
              <th scope="col">Nomor Lapangan</th>
              <th scope="col">Gambar</th>
              <th scope="col">Deskripsi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data as $lapangan) : ?>
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <th scope="row"><?= $lapangan['kode_lapangan']; ?></th>
              <th scope="row"><?= $lapangan['no_lapangan']; ?></th>
              <th scope="row"><?= $lapangan['gambar']; ?></th>
              <th scope="row"><?= $lapangan['deskripsi']; ?></th>
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