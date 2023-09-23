<?php
require_once("./conn.php");

$sql = mysqli_query($conn, "SELECT * FROM berita ORDER BY tanggal_penulisan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kim Purwoagung | Berita</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="tentangKamiStyle.css" />
    <link rel="stylesheet" href="beritaStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</head>

<body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="navbar-content container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo-kim-purwoagung-removebg-preview.png" alt="Logo" width="80" height="60"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Biogas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang-kami.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Berita & Event
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Berita</a></li>
                            <li><a class="dropdown-item" href="event.php">Event</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tempe
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="limbahTempe.php">Limbah Tempe</a></li>
                            <li><a class="dropdown-item" href="olahanTempe.php">Olahan Tempe</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Search -->
                <div class="d-flex align-items-center">
                    <form class="" role="search" id="search-bar">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari" aria-label="cari"
                                aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="cari" name="cari">Cari</button>
                        </div>
                    </form>
                </div>

                <!-- Profile -->
                <div class="d-flex justify-content-end" id="logo-dropdown">
                    <div class="dropdown d-flex justify-content-end">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow round-logo" href="#"
                            id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-user fa-2x"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item" href="myprofile.php">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <?php $row = mysqli_fetch_array($sql); ?>

        <div class="d-flex card text-bg-dark featured">
            <img src="./image/<?= $row['foto']; ?>" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title"><?= $row['nama_artikel']; ?></h5>

                <p class="card-text"><small><?= $row['tanggal_penulisan']; ?></small></p>
            </div>
        </div>

        <div class="card-group" id="mini-featured">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <?php $row = mysqli_fetch_array($sql); ?>
                <div class="card">
                    <img src="./image/<?= $row['foto']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nama_artikel']; ?></h5>

                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary"><?= $row['tanggal_penulisan']; ?></small>
                    </div>
                </div>
            <?php endfor; ?>

        </div>

        <div class="judul">
            Berita Lainnya
            <hr class="lineSiap">
        </div>

        <div class="card-group">
            <?php while ($row = mysqli_fetch_array($sql)) : ?>
                <div class="col-12 mb-3">
                    <div class="card mb-3 h-100">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <img src="./image/<?= $row['foto']; ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['nama_artikel']; ?></h5>
                                    <p class="card-text"><small class="text-body-secondary"><?= $row['tanggal_penulisan']; ?></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>


        </div>

    </main>

    <div class="d-flex-row footerPage row">
        <div class="subscriptionInput row">
            <div class="inginMendapat col-4">
                Ingin mendapatkan berita terbaru?
            </div>
            <div class="emailSubInput col-6">
                <input class="inputEmail" type="text" id="emailSubscription" name="email" placeholder="Masukkan email anda...">
            </div>
            <div class="col-2">
                <input class="tombol" type="submit" value="Submit">
            </div>
        </div>
        <div class="footerInformation row">
            <div class="infoPurwo col-5">
                <div class="titleInfoPurwo">
                    Purwoagung
                </div>
                <div class="isiInfoPurwo">
                    Kelurahan Purwantoro - Blimbing
                </div>
                <div class="isiInfoPurwo">
                    Kota Malang - Jawa Timur
                </div>
                <div class="isiInfoPurwo2">
                    Website Promosi KIM Purwoagung Kota Malang - Jawa Timur
                </div>
            </div>
            <div class="infoKontak col-3">
                <div class="titleKontak">
                    Kontak Kami
                </div>
                <div class="isiKontakKami">
                    JL. Tembaga No 3.
                </div>
                <div class="isiKontakKami">
                    Kode Pos 65122
                </div>
                <div class="isiKontakKami2">
                    081936876545
                </div>
                <div class="isiKontakKami">
                    kimpurwoagungkotamalang@gmail.com
                </div>
            </div>
            <div class="infoMedsos col-3">
                <div class="titleMedsos">
                    Media Sosial
                </div>
                <div class="isiMedsos">
                    Instagram: @kimpurwoagung
                </div>
            </div>
        </div>
    </div>
</body>

</html>