<?php 
  include 'layout/header.php';
  $data = select("SELECT * FROM tb_history ORDER BY id_history DESC");
?>
  <div class="p-4 mt-4">
    <div class="d-flex justify-content-between">
      <div class="col-8">
        <h2 class="text-secondary">Menu Riwayat Pesanan</h2>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <table class="table table-bordered mt-4">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Id Member</th>
              <th scope="col">No Lapangan</th>
              <th scope="col">Kode Jadwal</th>
              <th scope="col">Harga Pemesanan</th>
              <th scope="col">Waktu Pemesanan</th>
              <th scope="col">Sub Total</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data as $history) : ?>
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <th scope="row"><?= $history['id_member']; ?></th>
              <th scope="row"><?= $history['no_lapangan']; ?></th>
              <th scope="row"><?= $history['kode_jadwal']; ?></th>
              <th scope="row"><?= $history['harga_pemesanan']; ?></th>
              <th scope="row"><?= $history['waktu_pemesanan']; ?></th>
              <th scope="row"><?= $history['sub_total']; ?></th>
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