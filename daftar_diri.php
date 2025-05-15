<?php
session_start();
include "koneksi.php";

$id_user = $_SESSION['id_user'] ?? null;

if (!$id_user) {
    echo "<script>alert('Silakan login terlebih dahulu'); window.location.href='login.php';</script>";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $rt_rw = $_POST['rt_rw'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $status_perkawinan = $_POST['status_perkawinan'];
    $pekerjaan = $_POST['pekerjaan'];
    $kewarganegaraan = $_POST['kewarganegaraan'];

    $query = "INSERT INTO daftar (id_user, nama_lengkap, tempat_lahir, tanggal_lahir, alamat, rt_rw, kelurahan, kecamatan, jenis_kelamin, agama, status_perkawinan, pekerjaan, kewarganegaraan) 
              VALUES ('$id_user', '$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$rt_rw', '$kelurahan', '$kecamatan', '$jenis_kelamin', '$agama', '$status_perkawinan', '$pekerjaan', '$kewarganegaraan')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil didaftarkan!'); window.location.href='cekDataAnda.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendataan | e-KTP Remaja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="card mx-auto mt-5" style="width: 600px; border-radius: 20px;">
    <div class="card-header text-center">
      <h3 class="fw-bold">Formulir Pendataan KTP Remaja</h3>
    </div>
    <div class="card-body">
      <form method="POST" action="">
        <div class="form-floating mb-3">
          <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" required>
          <label for="nama_lengkap" class="text-muted">Nama Lengkap</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" required>
          <label for="tempat_lahir" class="text-muted">Tempat Lahir</label>
        </div>
        <div class="form-floating mb-3">
          <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
          <label for="tanggal_lahir" class="text-muted">Tanggal Lahir</label>
        </div>
        <div class="form-floating mb-3">
          <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat Lengkap" style="height: 100px;" required></textarea>
          <label for="alamat" class="text-muted">Alamat Lengkap</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="rt_rw" class="form-control" id="rt_rw" placeholder="RT/RW" required>
          <label for="rt_rw" class="text-muted">RT/RW</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="kelurahan" class="form-control" id="kelurahan" placeholder="Kelurahan" required>
          <label for="kelurahan" class="text-muted">Kelurahan</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="kecamatan" class="form-control" id="kecamatan" placeholder="Kecamatan" required>
          <label for="kecamatan" class="text-muted">Kecamatan</label>
        </div>
        <div class="form-floating mb-3">
          <select name="jenis_kelamin" class="form-select" id="jenis_kelamin" required>
            <option selected disabled>Pilih</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          <label for="jenis_kelamin" class="text-muted">Jenis Kelamin</label>
        </div>
        <div class="form-floating mb-3">
          <select name="agama" class="form-select" id="agama" required>
            <option selected disabled>Pilih</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
          </select>
          <label for="agama" class="text-muted">Agama</label>
        </div>
        <div class="form-floating mb-3">
          <select name="status_perkawinan" class="form-select" id="status_perkawinan" required>
            <option selected disabled>Pilih</option>
            <option value="Belum Kawin">Belum Kawin</option>
            <option value="Kawin">Kawin</option>
          </select>
          <label for="status_perkawinan" class="text-muted">Status Perkawinan</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan" required>
          <label for="pekerjaan" class="text-muted">Pekerjaan</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" placeholder="WNI/WNA" required>
          <label for="kewarganegaraan" class="text-muted">Kewarganegaraan</label>
        </div>
        <button type="submit" class="btn btn-success w-100">Kirim Data</button>
      </form>
    </div>
    <div class="card-footer text-center">
      <p class="text-muted">© 2025 e-KTP Remaja</p>
    </div>
  </div>
</body>
</html>
