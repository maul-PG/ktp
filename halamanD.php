<!--halaman utama sebelum masuk login dan daftar diri -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-KTP Remaja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Header Navbar -->
    <header class="d-flex flex-wrap align-items-center justify-content-between py-3 px-4 border-bottom bg-white shadow-sm">
        <!-- Logo + Brand -->
        <a href="home.php" class="d-flex align-items-center text-decoration-none">
            <img src="img/KTP.png" width="40" height="40" alt="Logo" class="me-2">
            <span class="fs-5 fw-bold text-dark">e-KTP Remaja</span>
        </a>

        <!-- Menu -->
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-3 text-dark fw-semibold">Home</a></li>
            <li><a href="#" class="nav-link px-3 text-secondary">Features</a></li>
            <li><a href="#" class="nav-link px-3 text-secondary">Pricing</a></li>
            <li><a href="#" class="nav-link px-3 text-secondary">FAQs</a></li>
            <li><a href="#" class="nav-link px-3 text-secondary">About</a></li>
        </ul>

        <!-- Tombol Aksi -->
        <div class="text-end">
            <a href="login.php" class="btn btn-outline-dark me-2">Login</a>
            <a href="register.php" class="btn btn-dark">Sign-up</a>
        </div>
    </header>

    <main>
        <!-- Carousel Start -->
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/pemuda.jpg" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption text-start">
                        <h1>Selamat Datang di e-KTP Remaja</h1>
                        <p>Platform mudah dan cepat untuk pendaftaran e-KTP bagi remaja.</p>
                        <p><a class="btn btn-primary btn-lg" href="register.php">Daftar Sekarang</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/daftar.jpg" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption">
                        <h1>Mudah dan Aman</h1>
                        <p>Proses pendaftaran e-KTP tanpa ribet dan lebih aman.</p>
                        <p><a class="btn btn-primary btn-lg" href="fitur.php">Pelajari Fitur</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/menjaga.jpg" class="d-block w-100" alt="Slide 3">
                    <div class="carousel-caption text-end">
                        <h1>Layanan Terpercaya</h1>
                        <p>Dapatkan e-KTP digital remaja dari rumah dengan dukungan resmi.</p>
                        <p><a class="btn btn-primary btn-lg" href="tentang.php">Tentang Kami</a></p>
                    </div>
                </div>
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
        <!-- Carousel End -->

        <div class="container marketing py-5">
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div>
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div>
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div>
            </div>

            <hr class="featurette-divider py-5">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#eee" />
                        <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-body-secondary">See for yourself.</span></h2>
                    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#eee" />
                        <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-body-secondary">Checkmate.</span></h2>
                    <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#eee" />
                        <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">
        </div>

        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>© 2017–2025 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
