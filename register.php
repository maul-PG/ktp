<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nik = $_POST['nik'];
    $password = $_POST['password'];

    $cek = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' OR nik='$nik'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Email atau NIK sudah terdaftar!');</script>";
    } else {
        $query = "INSERT INTO user (email, nik, password) VALUES ('$email', '$nik', '$password')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan saat mendaftar.');</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi | e-KTP Remaja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="card mx-auto mt-5" style="width: 400px; border-radius: 20px;">
        <div class="card-header text-center">
            <h3 class="fw-bold">e-KTP Remaja</h3>
        </div>
        <div class="card-body">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Logo" class="img-fluid rounded-circle mx-auto d-block" style="width: 100px; height: 100px;">
        </div>
        <div class="card-body">
            <h5 class="card-title text-center">Registrasi</h5>
            <p class="card-text text-center">Silahkan masukkan data diri anda</p>
            <form action="register.php" method="POST">
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="floatinginput" placeholder="name@example.com" required>
                    <label class="text-muted" for="floatinginput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" name="nik" class="form-control" id="floatingNumber" placeholder="number" required>
                    <label class="text-muted" for="floatingNumber">NIK</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label class="text-muted" for="floatingPassword">Password</label>
                </div>
                <button type="submit" class="btn btn-success w-100">Daftar</button>
            </form>
            <div class="card-body">
                <p class="text-center">Sudah punya akun? <a href="login.php" class="text-decoration-none">Login Sekarang</a></p>
            </div>
        </div>
        <div class="card-footer text-center">
            <p class="text-muted">© 2025 e-KTP Remaja</p>
        </div>
    </div>
</body>
</html>