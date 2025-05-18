<?php
session_start();

//untuk login ke halaman utama index.php
if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header("Location: index.php");
    exit();
}
?>

<!-- halaman utama sebelum masuk login dan daftar diri -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-KTP Remaja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
            
        }

        .carousel-caption h1,
        .carousel-caption p {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
        }

        .carousel-caption a.btn-primary {
            background-color: #212529;
            border-color: #212529;
        }

        .btn-primary {
            background-color: #212529;
            border-color: #212529;
        }

        .btn-primary:hover {
            background-color: #000;
            border-color: #000;
        }

        .feature-icon-small {
            background-color: #212529 !important;
            color: #fff !important;
        }

        footer {
            background-color: #fff;
        }

        .featurette-divider {
            border-color: #ccc;
        }

        .featurette-heading {
            color: #212529;
        }

        .text-body-secondary {
            color: #6c757d !important;
        }

        .btn-outline-dark:hover {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>

<body>

    <!-- Header Navbar -->
    <header class="d-flex flex-wrap align-items-center justify-content-between py-3 px-4 border-bottom bg-white shadow-sm navbar position-sticky top-0" style="z-index: 100;">
        <a href="halamanD.php" class="d-flex align-items-center text-decoration-none">
            <img src="img/KTP.png" width="40" height="40" alt="Logo" class="me-2">
            <span class="fs-5 fw-bold text-dark">e-KTP Remaja</span>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#myCarousel" class="nav-link px-3 text-dark fw-semibold">Home</a></li>
            <li><a href="#Fitur" class="nav-link px-3 text-secondary">Fitur</a></li>
            <li><a href="#Artikel" class="nav-link px-3 text-secondary">Artikel</a></li>
            <li><a href="#Kontak" class="nav-link px-3 text-secondary">Kontak</a></li>
            <li><a href="#profil" class="nav-link px-3 text-secondary">Profil</a></li>
        </ul>

        <div class="text-end">
            <a href="login.php" class="btn btn-outline-dark me-2">Login</a>
            <a href="register.php" class="btn btn-dark">Sign-up</a>
        </div>
    </header>

    <main>
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" style="scroll-margin-top: 60px;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/pemuda2_1.jpg" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption text-start">
                        <h1>Selamat Datang di e-KTP Remaja</h1>
                        <p>Platform mudah dan cepat untuk pendataan e-KTP bagi remaja.</p>
                        <p><a class="btn btn-primary btn-lg" href="register.php">Daftar Sekarang</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/daftar2_1.jpg" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption">
                        <h1>Mudah dan Aman</h1>
                        <p>Proses pendataan e-KTP tanpa ribet dan lebih aman.</p>
                        <p>
                            <a class="btn btn-primary btn-lg" href="#" id="btnPelajariFitur" data-bs-toggle="modal" data-bs-target="#fiturModal">Pelajari Fitur</a>
                        </p>
                    </div>
                </div>

                <!-- Modal Fitur -->
                <div class="modal fade" id="fiturModal" tabindex="-1" aria-labelledby="fiturModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="fiturModalLabel">Fitur-fitur e-KTP Remaja</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row g-4">
                          <div class="col-md-6">
                            <h6><i class="bi bi-file-earmark-text me-2"></i>Pendaftaran Online Mudah</h6>
                            <p>
                              Isi data diri secara online tanpa harus datang ke kantor. Formulir pendaftaran dirancang sederhana dan mudah dipahami, sehingga proses pengajuan e-KTP jadi lebih cepat.
                            </p>
                            <h6><i class="bi bi-eye me-2"></i>Cek Status KTP</h6>
                            <p>
                              Pantau status pengajuan e-KTP kamu secara real-time. Kamu bisa melihat apakah data sudah diverifikasi, sedang diproses, atau sudah selesai.
                            </p>
                            <h6><i class="bi bi-shield-lock me-2"></i>Keamanan Data</h6>
                            <p>
                              Data yang kamu kirimkan dijaga kerahasiaannya dan disimpan secara terenkripsi. Hanya admin yang berwenang yang dapat mengakses data untuk keperluan verifikasi.
                            </p>
                          </div>
                          <div class="col-md-6">
                            <h6><i class="bi bi-person-gear me-2"></i>Kelola Data Admin</h6>
                            <p>
                              Admin dapat memverifikasi, mengedit, dan menghapus data pendaftar dengan mudah melalui dashboard khusus. Proses verifikasi lebih efisien dan transparan.
                            </p>
                            <h6><i class="bi bi-newspaper me-2"></i>Artikel & Berita Terkini</h6>
                            <p>
                              Dapatkan informasi terbaru seputar e-KTP, kebijakan pemerintah, dan tips penting melalui fitur artikel yang selalu diperbarui.
                            </p>
                            <h6><i class="bi bi-chat-dots me-2"></i>Kontak & Bantuan</h6>
                            <p>
                              Tersedia kontak resmi dan form bantuan jika kamu mengalami kendala atau ingin bertanya seputar layanan e-KTP Remaja.
                            </p>
                          </div>
                        </div>
                        <div class="mt-3">
                          <strong>Semua fitur dirancang agar proses pendaftaran e-KTP remaja menjadi lebih praktis, aman, dan transparan!</strong>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                    <img src="img/menjaga2_1.jpg" class="d-block w-100" alt="Slide 3">
                    <div class="carousel-caption text-end">
                        <h1>Layanan Terpercaya</h1>
                        <p>Dapatkan e-KTP digital remaja dari rumah dengan dukungan resmi.</p>
                        <p>
                            <a class="btn btn-primary btn-lg" href="#" id="btnTentangKami" data-bs-toggle="modal" data-bs-target="#tentangKamiModal">Tentang Kami</a>
                        </p>
                    </div>
                </div>

                <!-- Modal Tentang Kami -->
                <div class="modal fade" id="tentangKamiModal" tabindex="-1" aria-labelledby="tentangKamiModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="tentangKamiModalLabel">Tentang Kami & Latar Belakang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                      </div>
                      <div class="modal-body">
                        <p>
                          Website <b>e-KTP Remaja</b> dibuat sebagai solusi atas kebutuhan proses pendataan KTP remaja yang selama ini masih dilakukan secara manual dan seringkali memakan waktu, tenaga, serta rentan terjadi kesalahan data. 
                        </p>
                        <p>
                          Latar belakang pembuatan website ini adalah untuk memudahkan remaja Indonesia dalam melakukan pendataan e-KTP secara online, sehingga prosesnya menjadi lebih praktis, efisien, aman, dan transparan. Dengan sistem digital, pengguna dapat mengisi data diri, memantau status pengajuan, serta mendapatkan informasi terbaru seputar e-KTP tanpa harus datang langsung ke kantor kelurahan.
                        </p>
                        <p>
                          Selain itu, aplikasi ini juga mendukung upaya pemerintah dalam digitalisasi layanan publik dan perlindungan data pribadi masyarakat. Dengan adanya <b>e-KTP Remaja</b>, diharapkan proses administrasi kependudukan menjadi lebih modern dan mudah diakses oleh generasi muda.
                        </p>
                        <p class="mb-0">
                          <b>e-KTP Remaja</b> merupakan bagian dari project tugas akhir/skripsi yang bertujuan untuk memberikan inovasi pada layanan publik berbasis web, serta menjadi latar belakang laporan project web ini.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <style>
                    /: agar modal lebih besar */
                  #tentangKamiModal .modal-content {
                    box-shadow: 0 0 32px 8px rgba(0,0,0,0.3);
                  }
                </style>
                <script>
                  // Menampilkan modal ketika tombol "Tentang Kami" diklik
                  document.addEventListener('DOMContentLoaded', function() {
                    var btnTentang = document.getElementById('btnTentangKami');
                    if (btnTentang) {
                      btnTentang.addEventListener('click', function(e) {
                        e.preventDefault();
                        var tentangModal = new bootstrap.Modal(document.getElementById('tentangKamiModal'));
                        tentangModal.show();
                      });
                    }
                  });
                </script>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Berikutnya</span>
            </button>
        </div>

        <hr class="md-5">

        <!-- Fitur Utama -->
        <div class="container py-5" id="Fitur" style="padding-top: 100px; scroll-margin-top: 100px;">
            <div class="row row-cols-1 row-cols-md-2 align-items-center g-5">
            <div class="col d-flex flex-column align-items-start gap-3">
                <h2 class="fw-bold text-body-emphasis">Kenalan Yuk dengan Website e-KTP Remaja</h2>
                <p class="text-body-secondary">Aplikasi ini memudahkan proses pendataan KTP remaja secara online. Praktis, aman, dan mudah dipantau!</p>
                <a href="#" class="btn btn-primary btn-lg" id="btnKenalanYuk">Kenalan Yuk</a>
            </div>
            <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                <div class="col d-flex flex-column gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center fs-3 rounded-3 p-3">
                    <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <h4 class="fw-semibold mb-0 text-body-emphasis">Pendaftaran Mudah</h4>
                    <p class="text-body-secondary">Isi data diri dengan mudah dan cepat melalui form online kami.</p>
                </div>
                <div class="col d-flex flex-column gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center fs-3 rounded-3 p-3">
                    <i class="bi bi-shield-lock"></i>
                    </div>
                    <h4 class="fw-semibold mb-0 text-body-emphasis">Data Aman Terjaga</h4>
                    <p class="text-body-secondary">Data yang kamu kirimkan tersimpan aman dan terenkripsi.</p>
                </div>
                <div class="col d-flex flex-column gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center fs-3 rounded-3 p-3">
                    <i class="bi bi-eye"></i>
                    </div>
                    <h4 class="fw-semibold mb-0 text-body-emphasis">Cek Status KTP</h4>
                    <p class="text-body-secondary">Pantau status verifikasi data kapan saja dan di mana saja.</p>
                </div>
                <div class="col d-flex flex-column gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center fs-3 rounded-3 p-3">
                    <i class="bi bi-person-gear"></i>
                    </div>
                    <h4 class="fw-semibold mb-0 text-body-emphasis">Kelola Data Admin</h4>
                    <p class="text-body-secondary">Admin dapat memverifikasi, edit, dan hapus data secara efisien.</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal Kenalan Yuk -->
        <div class="modal fade" id="kenalanYukModal" tabindex="-1" aria-labelledby="kenalanYukModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="kenalanYukModalLabel">Kenalan Yuk dengan e-KTP Remaja!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                <p>
                    Selamat datang di website <b>e-KTP Remaja</b>!<br><br>
                    Platform ini hadir untuk memudahkan remaja Indonesia dalam melakukan pendataan KTP secara online. Dengan fitur yang praktis, data yang aman, dan proses yang transparan, kamu bisa memantau status pengajuan KTP-mu kapan saja dan di mana saja.<br><br>
                    Yuk, mulai perjalanan digitalmu bersama e-KTP Remaja dan rasakan kemudahan layanan kependudukan modern!
                </p>
                </div>
            </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            var btnKenalan = document.getElementById('btnKenalanYuk');
            if (btnKenalan) {
                btnKenalan.addEventListener('click', function(e) {
                e.preventDefault();
                var kenalanModal = new bootstrap.Modal(document.getElementById('kenalanYukModal'));
                kenalanModal.show();
                });
            }
            });
        </script>
      
        
        <hr class="md-5">

    <!-- tempat berita -->

<div class="container py-4" id="Artikel" style="padding-top: 100px; scroll-margin-top: 100px;">
    <h3 class="mb-4 text-body-emphasis">Berita Terbaru</h3>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://akcdn.detik.net.id/community/media/visual/2023/12/12/ilustrasi-ktp-digital-5_169.jpeg?w=700&q=90" class="card-img-top" alt="Berita 1">
                <div class="card-body">
                    <h5 class="card-title">Cara Membuat KTP Digital Lewat Ponsel</h5>
                    <p class="card-text text-body-secondary">KTP Digital atau Identitas Kependudukan Digital (IKD) merupakan identitas kependudukan dalam bentuk aplikasi digital yang dapat diakses melalui ponsel. 
                        Lalu, bagaimana cara membuat KTP Digital lewat ponsel?</p>
                    <a href="https://finance.detik.com/berita-ekonomi-bisnis/d-7373052/mudah-begini-cara-membuat-ktp-digital-lewat-ponsel" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://akcdn.detik.net.id/community/media/visual/2023/02/13/ilustrasi-ktp-elektronik_169.jpeg?w=700&q=90" class="card-img-top" alt="Berita 2">
                <div class="card-body">
                    <h5 class="card-title">5 Perbedaan e-KTP dengan IKD</h5>
                    <p class="card-text text-body-secondary">Kementerian Dalam Negeri (Kemendagri) tengah berusaha untuk mengganti e-KTP dengan Identitas Kependudukan Digital (IKD). 
                        Bersamaan dengan itu pemerintah telah menyatakan tidak akan menambah persediaan blangko e-KTP, 
                        sehingga masyarakat diimbau untuk segera membuat KTP Digital atau IKD.</p>
                    <a href="https://finance.detik.com/berita-ekonomi-bisnis/d-7091271/5-perbedaan-e-ktp-dengan-ikd-tak-perlu-lagi-fotokopi" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://akcdn.detik.net.id/community/media/visual/2023/03/09/aplikasi-identitas-kependudukan-digital-ikd_169.jpeg?w=700&q=90" class="card-img-top" alt="Berita 3">
                <div class="card-body">
                    <h5 class="card-title">Syarat hingga Cara Aktivasi IKD Bagi WNI di Luar Negeri</h5>
                    <p class="card-text text-body-secondary">Warga Negara Indonesia (WNI) yang berada di luar negeri juga bisa membuat IKD sebagai KTP Digital. 
                        Simak syarat dan cara aktivasi IKD bagi WNI di luar negeri.</p>
                    <a href="https://news.detik.com/berita/d-7436177/syarat-hingga-cara-aktivasi-ikd-bagi-wni-di-luar-negeri-cek-di-sini" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>

        <hr class="my-5">

        <!-- Testimoni -->
        <div class="container py-5">
            <h3 class="mb-4 text-body-emphasis">Testimoni Pengguna</h3>
            <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card shadow-sm">
                <div class="card-body d-flex align-items-start">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Profil Siti Aisyah" class="rounded-circle me-3" width="48" height="48">
                    <div>
                    <h5 class="card-title mb-1">Siti Aisyah</h5>
                    <p class="card-text text-body-secondary mb-0">"Pendataan KTP remaja jadi lebih praktis dan transparan. Saya bisa memantau status data saya dengan mudah."</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <div class="card-body d-flex align-items-start">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profil Budi Santoso" class="rounded-circle me-3" width="48" height="48">
                    <div>
                    <h5 class="card-title mb-1">Budi Santoso</h5>
                    <p class="card-text text-body-secondary mb-0">"Aplikasi ini memudahkan saya dalam proses pendataan KTP. Data saya tersimpan aman dan bisa dicek kapan saja."</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <div class="card-body d-flex align-items-start">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Profil Dewi Lestari" class="rounded-circle me-3" width="48" height="48">
                    <div>
                    <h5 class="card-title mb-1">Dewi Lestari</h5>
                    <p class="card-text text-body-secondary mb-0">"Pendataan KTP remaja secara online sangat membantu. Saya tidak perlu datang ke kantor kelurahan lagi."</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <div class="card-body d-flex align-items-start">
                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Profil Andi Prasetyo" class="rounded-circle me-3" width="48" height="48">
                    <div>
                    <h5 class="card-title mb-1">Andi Prasetyo</h5>
                    <p class="card-text text-body-secondary mb-0">"Saya merasa proses pendataan KTP jadi lebih efisien dan mudah dipantau. Sangat membantu remaja seperti saya."</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- Deskripsi di bawah testimoni -->
            <div class="row mt-4">
                <div class="col">
                    <p class="text-body-secondary text-center">
                        Testimoni di atas membuktikan bahwa proses pendataan KTP remaja secara online memberikan kemudahan, keamanan, dan transparansi bagi para pengguna. Dengan sistem ini, remaja dapat memantau status data mereka tanpa harus datang langsung ke kantor kelurahan.
                    </p>
                </div>
            </div>

            <hr class="my-5">

<!-- Kontak -->
        <div class="container py-5" id="Kontak" style="padding-top: 100px; scroll-margin-top: 100px;">
            <h3 class="mb-4 text-body-emphasis">Kontak Kami</h3>
            <p class="text-body-secondary">Punya pertanyaan, saran, atau ingin berkolaborasi? Kami siap membantu Anda! Jangan ragu untuk menghubungi tim e-KTP Remaja melalui kontak di bawah ini:</p>
            <ul class="list-unstyled">
            <li><i class="bi bi-envelope-fill"></i> Email: e-ktpremaja@gmail.com</li>
            <li><i class="bi bi-telephone-fill"></i> Telepon: +62 123 4567 890</li>
            </ul>
            <div class="mt-4">
            <h5 class="mb-2">Alamat Kantor</h5>
            <p class="text-body-secondary mb-2">Jl. SeturanRaya No. 1, Yogyakarta</p>
            <div class="ratio ratio-16x9 rounded shadow-sm">
                <iframe 
                src="https://www.google.com/maps?q=Jl.+SeturanRaya+No.+1,+Yogyakarta&output=embed" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>
        </div>

<!-- Profil Pembuat -->

<!-- Modal Profil Pembuat -->
<div class="modal fade" id="profilModal" tabindex="-1" aria-labelledby="profilModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profilModalLabel">Profil Pembuat Website</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-4">
                    <div class="col-md-6 d-flex flex-column align-items-center border-end">
                        <img src="img/foto_almet.jpeg" alt="Profil Maulana" class="img-fluid rounded-circle mb-2" style="width: 150px; height: 160px;">
                        <h5> Rafi'i Maulana</h5>
                        <p class="mb-1">Email: maulanarafii036@gmail.com</p>
                        <p class="mb-1">Nomor Telepon: 082231727744</p>
                        <p class="mb-1">Alamat: Jl. Glagahsari No. 68, Yogyakarta</p>
                        <p class="mb-1">Tanggal Lahir: 18 Juni 2005</p>
                        <p class="mb-1">Jenis Kelamin: Laki-laki</p>
                        <p class="mb-2">Status: Aktif</p>
                        <div>
                            <a href="https://instagram.com/raf.maul" target="_blank" class="text-dark me-2"><i class="bi bi-instagram fs-4"></i></a>
                            <a href="https://github.com/maul-PG" target="_blank" class="text-dark"><i class="bi bi-github fs-4"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column align-items-center">
                        <img src="img/gara_foto.jpeg" alt="Profil Siti" class="img-fluid rounded-circle mb-2" style="width: 150px; height: 160px;">
                        <h5>Hanggara Winasis</h5>
                        <p class="mb-1">Email: HanggaraW@gmail.com</p>
                        <p class="mb-1">Nomor Telepon: 08129876543</p>
                        <p class="mb-1">Alamat: Jl. Ambarukmo No. 10, Majenang</p>
                        <p class="mb-1">Tanggal Lahir: 15 Mei 2005</p>
                        <p class="mb-1">Jenis Kelamin: Laki-laki</p>
                        <p class="mb-2">Status: Aktif</p>
                        <div>
                            <a href="https://instagram.com/garawins_" target="_blank" class="text-dark me-2"><i class="bi bi-instagram fs-4"></i></a>
                            <a href="https://github.com/garawins" target="_blank" class="text-dark"><i class="bi bi-github fs-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // modalprofil untuk profil pembuat
    document.addEventListener('DOMContentLoaded', function() {
        var profilLink = document.querySelector('a[href="#profil"]');
        if (profilLink) {
            profilLink.addEventListener('click', function(e) {
                e.preventDefault();
                var profilModal = new bootstrap.Modal(document.getElementById('profilModal'));
                profilModal.show();
            });
        }
    });
</script>

        <!-- Footer -->
        <footer class="bg-white border-top mt-5 py-4">
            <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-md-start text-center mb-3 mb-md-0">
                <img src="img/KTP.png" width="36" height="36" alt="Logo" class="me-2 align-middle">
                <span class="fw-bold text-dark align-middle">e-KTP Remaja</span>
                </div>
                <div class="col-md-4 text-center mb-3 mb-md-0">
                <a href="https://instagram.com/eKTPRemaja" target="_blank" class="text-dark me-3" title="Instagram"><i class="bi bi-instagram fs-5"></i></a>
                <a href="mailto:e-ktpremaja@gmail.com" class="text-dark me-3" title="Email"><i class="bi bi-envelope-fill fs-5"></i></a>
                <a href="https://github.com/maul-PG/ktp" target="_blank" class="text-dark" title="GitHub"><i class="bi bi-github fs-5"></i></a>
                </div>
                <div class="col-md-4 text-md-end text-center">
                <small class="text-muted">&copy; 2025 e-KTP Remaja. All rights reserved.</small>
                </div>
            </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
