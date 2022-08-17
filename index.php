<?php 
  include 'layout/header-not-login.php';

	$jumlahUser = total("SELECT * FROM tb_user");
	$jumlahLapangan = total("SELECT * FROM tb_lapangan");
	$jumlahJam = total("SELECT * FROM tb_jam");
	$jumlahJadwal = total("SELECT * FROM tb_jadwal");
  
?>
  <div class="position-relative">
    <div class="position-relative">
      <img src="assets/image/background.png" width="50%" height="50%"/>
    </div>
    <div class="position-absolute top-100 start-50 translate-middle" style="background-color: rgba(217, 217, 217, 0.83);">
      <h2>hi</h2>
    </div>
   
  </div>
<?php include 'layout/footer.php'?>