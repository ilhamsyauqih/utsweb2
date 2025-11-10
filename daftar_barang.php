<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="./style8.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Section Start -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">Bangunan</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" aria-current="page" href="./index.php">Pemesanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 active" href="./daftar_barang.php">Daftar Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Tentang</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" class="login-button">Login</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- Navbar Section End -->
        <section class="pemesanan-section">
        <div class="container my-5">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            Semen
                        </div>
                        <div class="card-body">
                            <div class="list-barang">
                                <img class="gambar-barang" src="./images/gambar-barang/semen.gresik.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            Pasir
                        </div>
                        <div class="card-body">
                            <div class="list-barang">
                                <img class="gambar-barang" src="./images/gambar-barang/pasir.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            Batu Bata
                        </div>
                        <div class="card-body">
                            <div class="list-barang">
                                <img class="gambar-barang" src="./images/gambar-barang/batu.bata.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            Kerikil
                        </div>
                        <div class="card-body">
                            <div class="list-barang">
                                <img class="gambar-barang" src="./images/gambar-barang/kerikil.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            Triplek
                        </div>
                        <div class="card-body">
                            <div class="list-barang">
                                <img class="gambar-barang" src="./images/gambar-barang/triplek.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            Keramik
                        </div>
                        <div class="card-body">
                            <div class="list-barang">
                                <img class="gambar-barang" src="./images/gambar-barang/keramik.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            Cat
                        </div>
                        <div class="card-body">
                            <div class="list-barang">
                                <img class="gambar-barang" src="./images/gambar-barang/cat.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            Pipa PVC
                        </div>
                        <div class="card-body">
                            <div class="list-barang">
                                <img class="gambar-barang" src="./images/gambar-barang/pipa.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            Palu
                        </div>
                        <div class="card-body">
                            <div class="list-barang">
                                <img class="gambar-barang" src="./images/gambar-barang/palu.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>
</html>