<?php
include 'koneksi.php';

if (isset($_GET['hapus'])) {
    $id_user = $_GET['hapus'];
    $id_user = mysqli_real_escape_string($conn, $id_user);
    $id_user = htmlspecialchars($id_user);
    $query = mysqli_query($conn, "DELETE FROM daftar WHERE id_user = '$id_user'");

    if ($query) {
        echo "<script>alert('Data berhasil dihapus'); window.location='data_remaja.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data'); window.location='data_remaja.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak ditemukan'); window.location='data_remaja.php';</script>";
}
?>
