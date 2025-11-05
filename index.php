<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet">
</head>

<body>
    <?php
        $nama = "";
        $jumlahBarang = "";
        $jumlahBarang = "";
        $jenisBarang = "";
    ?>
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
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Daftar Barang</a>
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
    <!-- Hero Section Start -->
    <section class="hero-section">
        <div class="container content-spacing mt-lg-5 d-flex align-items-center justify-content-center flex-column">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Form Input
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="form-group">
                                    <label for="nama"><b>NAMA:</b></label>
                                    <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlahBarang"><b>JUMLAH BARANG:</b></label>
                                    <input type="text" id="jumlahBarang" name="jumlahBarang" value="<?php echo $jumlahBarang; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenisBarang"><b>JENIS BARANG:</b></label>
                                    <select id="jenisBarang" name="jenisBarang" onchange="hitungSemua()">
                                        <option value="">-- Pilih Barang --</option>
                                        <option value="admin" <?php if ($jenisBarang == "Semen") echo "selected"; ?>>Semen</option>
                                        <option value="staff" <?php if ($jenisBarang == "Pasir") echo "selected"; ?>>Pasir</option>
                                        <option value="staff" <?php if ($jenisBarang == "Kerikil") echo "selected"; ?>>Kerikil</option>
                                        <option value="staff" <?php if ($jenisBarang == "Batu Bata") echo "selected"; ?>>Batu Bata</option>
                                    </select>
                                </div>
                                <div class="form-group status-container">
                                    <fieldset>
                                        <legend>STATUS</legend>
                                        <label><input type="radio" id="tetap" name="status" value="Tetap"
                                                <?php if ($status == "Tetap") echo "checked"; ?>> Tetap</label><br>
                                        <label><input type="radio" id="kontrak" name="status" value="Kontrak"
                                                <?php if ($status == "Kontrak") echo "checked"; ?>> Kontrak</label>
                                    </fieldset>
                                    <input type="text" name="status_output" id="status_output" readonly value="<?php echo strtoupper($status); ?>">
                                </div>

                                <div class="form-group">
                                    <button type="button" onclick="baru()">Baru</button>
                                    <button type="submit">Cetak</button>
                                    <button type="button" onclick="keluar()">Keluar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Hasil Output
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>