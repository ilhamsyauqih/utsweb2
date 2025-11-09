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
    <?php
    $nama = "";
    $jumlahBarang = "";
    $jenisBarang = "";
    $totalHargaBarang = 0;
    $diskon = 0;
    $pembayaran = "";
    $layananTambahan = "";
    $totalHargaPlusAdmin = 0;
    $totalHargaKeseluruhan = 0;
    $tampilkanHasil = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tampilkanHasil = true;
        $nama = $_POST["nama"];
        $jumlahBarang = (int)$_POST["jumlahBarang"];
        $jenisBarang = $_POST["jenisBarang"];
        $totalHargaBarang = (int)$_POST["totalHargaBarang"];
        $diskon = (int)$_POST["diskon"];
        $pembayaran = $_POST["pembayaran"];
        $layananTambahan = isset($_POST["layananTambahan"]) ? $_POST["layananTambahan"] : [];

        // Perhitungan admin pembayaran
        if ($pembayaran == "transfer") {
            $totalHargaPlusAdmin = $totalHargaBarang + 5000;
        } else {
            $totalHargaPlusAdmin = $totalHargaBarang;
        }

        //Perhitungan layanan tambahan
        $biayaLayanan = 0;
        foreach ($layananTambahan as $layanan) {
            if ($layanan == "pengiriman") $biayaLayanan += 100000;
            if ($layanan == "pemotongan") $biayaLayanan += 10000;
            if ($layanan == "instalasi") $biayaLayanan += 150000;
        }
        $totalHargaKeseluruhan = $totalHargaPlusAdmin + $biayaLayanan;
    }
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
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="./index.php">Pemesanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="./daftar_barang.php">Daftar Barang</a>
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
        <video autoplay loop muted plays-inline class="back-video">
            <source src="./images/hero-video.mp4" type="video/mp4">
        </video>
        <div class="hero-content">
            <h1 class="judul-hero">Selamat Datang <br> Toko Bangunan <br> Ilham</h1>
            <button class="pesan-button">Pesan Produk</button>
        </div>
        <div class="arrow-down">
            <div class="arrow"></div>
        </div>
        <h3 class="pesan-arrow">Scroll untuk tambah pesanan</h3>
    </section>
    <!-- Hero Section End -->
    <!-- Form Pemesanan Section Start -->
    <section class="pemesanan-section">
        <div class="form-pemesanan mt-5 mt-lg-5">
            <div class="row g-3">
                <div class="<?php echo $tampilkanHasil ? "col-md-6 col-lg-6" : "col-12"; ?></php>">
                    <div class="card">
                        <div class="card-header">
                            Tambah Pesanan
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="form-group">
                                    <label for="nama"><b>NAMA:</b></label>
                                    <input class="text-input" type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlahBarang"><b>JUMLAH BARANG:</b></label>
                                    <input class="text-input" type="text" id="jumlahBarang" name="jumlahBarang" value="<?php echo $jumlahBarang; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenisBarang"><b>JENIS BARANG:</b></label>
                                    <select id="jenisBarang" name="jenisBarang" onchange="hitungBarang()">
                                        <option value="">-- Pilih Barang --</option>
                                        <option value="semen" <?php if ($jenisBarang == "Semen") echo "selected"; ?>>Semen (1 sak 50kg)</option>
                                        <option value="pasir" <?php if ($jenisBarang == "Pasir") echo "selected"; ?>>Pasir (1 truk)</option>
                                        <option value="bata" <?php if ($jenisBarang == "Batu Bata") echo "selected"; ?>>Batu Bata (per biji)</option>
                                        <option value="kerikil" <?php if ($jenisBarang == "Kerikil") echo "selected"; ?>>Kerikil (1 karung)</option>
                                        <option value="triplek" <?php if ($jenisBarang == "Kayu") echo "selected"; ?>>Triplek (per lembar)</option>
                                        <option value="keramik" <?php if ($jenisBarang == "Keramik") echo "selected"; ?>>Keramik (per dus)</option>
                                        <option value="cat" <?php if ($jenisBarang == "Cat Tembok") echo "selected"; ?>>Cat Tembok (per kaleng)</option>
                                        <option value="pipa" <?php if ($jenisBarang == "Pipa PVC") echo "selected"; ?>>Pipa PVC (4 meter)</option>
                                        <option value="alat" <?php if ($jenisBarang == "Alat Perkakas") echo "selected"; ?>>Alat Perkakas (per unit)</option>
                                        <option value="paku" <?php if ($jenisBarang == "Paku") echo "selected"; ?>>Paku (per kilogram)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="diskon"><b>DISKON:</b></label>
                                    <input class="diskon text-input" type="text" id="diskon" name="diskon" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="totalHargaBarang"><b>TOTAL HARGA BARANG:</b></label>
                                    <input class="totalHargaBarang text-input" type="text" id="totalHargaBarang" name="totalHargaBarang" readonly>
                                </div>
                                <div class="radio-pembayaran form-group">
                                    <label for="pembayaran"><b>PEMBAYARAN :</b></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pembayaran" id="tunai" value="tunai" <?php if ($pembayaran == "tunai") echo "checked"; ?>>
                                        <label class="form-check-label" for="tunai">
                                            Tunai
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pembayaran" id="transfer" value="transfer" <?php if ($pembayaran == "transfer") echo "checked"; ?>>
                                        <label class="form-check-label" for="transfer">
                                            Transfer (+ admin Rp. 5.000)
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="layananTambahan"><b>LAYANAN TAMBAHAN:</b></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="layananTambahan[]" value="pengiriman" id="pengiriman" <?php if ($layananTambahan == "pengiriman") echo "checked"; ?>>
                                        <label class="form-check-label" for="pengiriman">
                                            Pengiriman Barang (Rp. 100.000)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="layananTambahan[]" value="pemotongan" id="pemotongan" <?php if ($layananTambahan == "pemotongan") echo "checked"; ?>>
                                        <label class="form-check-label" for="pemotongan">
                                            Pemotongan Material (Rp. 10.000)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="layananTambahan[]" value="instalasi" id="instalasi" <?php if ($layananTambahan == "instalasi") echo "checked"; ?>>
                                        <label class="form-check-label" for="instalasi">
                                            Jasa Instalasi/Pasang (Rp. 150.000)
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn" type="button" onclick="baru()">Baru</button>
                                    <button class="btn" type="submit">Cetak</button>
                                    <button class="btn" type="button" onclick="keluar()">Keluar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php if ($tampilkanHasil) { ?>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                Hasil Output
                            </div>
                            <div class="card-body">
                                <table class="tabel-hasil">
                                    <tr>
                                        <th>NAMA</th>
                                        <td><?php echo $nama; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Barang</th>
                                        <td><?php echo $jumlahBarang; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Barang</th>
                                        <td><?php echo ucfirst($jenisBarang); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Diskon</th>
                                        <td>Rp. <?php echo number_format($diskon, 0, ',', '.'); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Total Harga Barang (Setelah Diskon)</th>
                                        <td>Rp. <?php echo number_format($totalHargaBarang, 0, ',', '.'); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tambahan pembayaran (Jika transfer)</th>
                                        <td>Rp. <?php echo number_format($totalHargaPlusAdmin, 0, ',', '.'); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Total Harga Keseluruhan</th>
                                        <td>Rp. <?php echo number_format($totalHargaKeseluruhan, 0, ',', '.'); ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Form Pemesanan Section End -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script
        src="./script.js">
    </script>
</body>

</html>