<?php 
  include 'layout/header.php';
  $data = select("SELECT * FROM tb_history ORDER BY id_history DESC");

  if(isset($_GET['search'])){
    $search = $_GET['search'];
    $data = search("SELECT * FROM tb_history WHERE id_member LIKE '%".$search."%'");				
  }else{
    $data = search("SELECT * FROM tb_history");		
  }
?>
  <div class="p-4 mt-4">
    <div class="d-flex justify-content-between">
      <div class="col-8">
        <h2 class="text-dark">Menu Riwayat Pesanan</h2>
        <form class="d-flex" role="search" action="" method="GET">
          <input class="form-control me-2" type="search" placeholder="Search" id="search" name="search" aria-label="Search">
          <button class="btn btn-success" type="submit" value="search">Search</button>
        </form>
        <table class="table table-bordered border-secondary mt-4">
          <thead class="bg-success bg-opacity-75 text-white">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Id Member</th>
              <th scope="col">Nomor Lapangan</th>
              <th scope="col">Kode Jadwal</th>
              <th scope="col">Harga Pemesanan</th>
              <th scope="col">Waktu Pemesanan</th>
              <th scope="col">Sub Total</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data as $history) : ?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <th scope="row"><?= $history['id_member']; ?></th>
                <th scope="row"><?= $history['nomor_lapangan']; ?></th>
                <th scope="row"><?= $history['kode_jadwal']; ?></th>
                <th scope="row">Rp <?php echo number_format($history['harga_pemesanan'],0,',','.'); ?></th>
                <th scope="row"><?= $history['waktu_pemesanan']; ?></th>
                <th scope="row"><?= $history['sub_total']; ?></th>
                <th scope="row" class="d-flex flex-row">
                  <a href="delete-history.php?id_history=<?= $history['id_history']; ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin data riwayat pesanan ini dihapus?');">Hapus</a>
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