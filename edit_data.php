<?php
session_start();
include "koneksi.php";

$id_user = $_SESSION['id_user'] ?? null;

if (!$id_user) {
    echo "<script>alert('Silakan login terlebih dahulu'); window.location.href='login.php';</script>";
    exit;
}

$query = "SELECT * FROM daftar WHERE id_user = '$id_user'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $rt_rw = $_POST['rt_rw'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $pekerjaan = $_POST['pekerjaan'];
    $status_perkawinan = $_POST['status_perkawinan'];
    $kewarganegaraan = $_POST['kewarganegaraan'];

    $update = "UPDATE daftar SET 
        nama_lengkap='$nama_lengkap',
        tempat_lahir='$tempat_lahir',
        tanggal_lahir='$tanggal_lahir',
        alamat='$alamat',
        rt_rw='$rt_rw',
        kelurahan='$kelurahan',
        kecamatan='$kecamatan',
        jenis_kelamin='$jenis_kelamin',
        agama='$agama',
        pekerjaan='$pekerjaan',
        status_perkawinan='$status_perkawinan',
        kewarganegaraan='$kewarganegaraan'
        WHERE id_user='$id_user'";

    if (mysqli_query($conn, $update)) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location.href='cekDataAnda.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data.');</script>";
    }
}
?>

<!-- Formulir Edit Data KTP Remaja -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data | e-KTP Remaja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 750px;">
    <div class="card shadow rounded-4">
        <div class="card-header text-dark fw text-center">
            <h4 class="fw-bold">Edit Data e-KTP Remaja</h4>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" value="<?= htmlspecialchars($data['nama_lengkap']) ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" value="<?= htmlspecialchars($data['tempat_lahir']) ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="<?= $data['tanggal_lahir'] ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                            <option value="Perempuan" <?= $data['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="2" required><?= htmlspecialchars($data['alamat']) ?></textarea>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">RT / RW</label>
                        <input type="text" name="rt_rw" class="form-control" value="<?= htmlspecialchars($data['rt_rw']) ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Kelurahan</label>
                        <input type="text" name="kelurahan" class="form-control" value="<?= htmlspecialchars($data['kelurahan']) ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" value="<?= htmlspecialchars($data['kecamatan']) ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Agama</label>
                        <select name="agama" class="form-select" required>
                            <option value="">Pilih Agama</option>
                            <?php
                            $agamaList = ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu', 'Lainnya'];
                            foreach ($agamaList as $agama) {
                                $selected = ($data['agama'] == $agama) ? 'selected' : '';
                                echo "<option value='$agama' $selected>$agama</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" value="<?= htmlspecialchars($data['pekerjaan']) ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status Perkawinan</label>
                        <select name="status_perkawinan" class="form-select" required>
                            <option value="">Pilih Status</option>
                            <option value="Belum Kawin" <?= $data['status_perkawinan'] == 'Belum Kawin' ? 'selected' : '' ?>>Belum Kawin</option>
                            <option value="Kawin" <?= $data['status_perkawinan'] == 'Kawin' ? 'selected' : '' ?>>Kawin</option>
                            <option value="Cerai Hidup" <?= $data['status_perkawinan'] == 'Cerai Hidup' ? 'selected' : '' ?>>Cerai Hidup</option>
                            <option value="Cerai Mati" <?= $data['status_perkawinan'] == 'Cerai Mati' ? 'selected' : '' ?>>Cerai Mati</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Kewarganegaraan</label>
                        <select name="kewarganegaraan" class="form-select" required>
                            <option value="">Pilih Kewarganegaraan</option>
                            <option value="WNI" <?= $data['kewarganegaraan'] == 'WNI' ? 'selected' : '' ?>>WNI</option>
                            <option value="WNA" <?= $data['kewarganegaraan'] == 'WNA' ? 'selected' : '' ?>>WNA</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-beetwen gap-2 mt-4">
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    <a href="cekDataAnda.php" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
        <div class="card-footer text-center text-muted">
            © 2025 e-KTP Remaja
        </div>
    </div>
</div>
</body>
</html>
