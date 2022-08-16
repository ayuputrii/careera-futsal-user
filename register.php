<?php 
  include 'layout/header-login.php';
?>
  <div class="p-4">
    <h2 style="text-align: center;" class="mb-4 text-dark text-shadow">REGISTER CAREERA FUTSAL</h2>
    <div class="container fluid rounded p-4 h-75 w-50">
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control rounded-3" id="email" name="email" aria-describedby="emailHelp" placeholder="Input Your Email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control rounded-3" id="password" name="password" placeholder="Input Your Password  " required>
      </div>       
      <div class="d-flex flex-row mt-4">
        <div id="emailHelp" class="form-text text-dark mb-2">Belum punya akun?</div>&ensp;
        <a href="./">
          <button type="button" class="btn btn-danger text-white btn-small btn-sm">LOGIN</button>
        </a>
      </div>
      <div class="d-grid mt-4">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
    </div>
  </div>
<?php include 'layout/footer.php'?>