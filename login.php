<?php
session_start();
include "koneksi.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $nik = $_POST['nik'];
  $password = $_POST['password'];

 
  $query = "SELECT * FROM user WHERE email = '$email' AND nik = '$nik' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $data = mysqli_fetch_assoc($result);
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['email'] = $data['email'];
    header("Location: home.php");
    exit;
  } else {
    echo "<script>alert('Login gagal. Email, NIK, atau Password salah!');</script>";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login | e-KTP Remaja </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <div class="card mx-auto mt-5"  style="width: 400px; border-radius: 20px;">
      <div class="card-header text-center">
        <h3 class="fw-bold">e-KTP Remaja</h3>
      
      </div>
      <div class="card-body">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Logo" class="img-fluid rounded-circle mx-auto d-block" style="width: 100px; height: 100px;">
      </div>
      <div class="card-body">
        <h5 class="card-title text-center">Login</h5>
        <p class="card-text text-center">Silahkan masukkan email, NIK dan password anda</p>
      <div class="card-body">

        <form action="login.php" method="POST">
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatinginput" placeholder="name@example.com">
            <label class="text-muted" for="floatinginput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" name="nik" class="form-control" id="floatingNumber" placeholder="number">
            <label class="text-muted" for="floatingName">NIK</label>

          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label class="text-muted" for="floatingPassword">Password</label>
            
          </div>
          <button type="submit" href="index.php" class="btn btn-success w-100">Login</button>
          <?php
          if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger mt-3" role="alert">Login gagal. Email, NIK, atau Password salah!</div>';
          }
          ?>
        </div>
        </form>
        <div class="card-body">
          <p class="text-center">Belum punya akun? <a href="register.php" class="text-decoration-none">Daftar Sekarang</a></p>
        </div>
      </div>
      <div class="card-footer text-center">
        <p class="text-muted">© 2025 e-KTP Remaja</p>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    
    
  </body>
</html>