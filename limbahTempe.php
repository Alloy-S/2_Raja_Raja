<?php
require_once('./conn.php');

$sql = mysqli_query($conn, "SELECT produk.*, penjual.* FROM produk INNER JOIN penjual ON produk.id_penjual=penjual.id;");

?>


<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kim Purwoagung | Jual Limbah Tempe</title>
    <link rel="stylesheet" href="limbahTempe.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="tentangKamiStyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="navbar-content container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo-kim-purwoagung-removebg-preview.png" alt="Logo" width="80" height="60" class="d-inline-block align-text-top">
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Berita & Event
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="berita.php">Berita</a></li>
                            <li><a class="dropdown-item" href="event.php">Event</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tempe
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Limbah Tempe</a></li>
                            <li><a class="dropdown-item" href="olahanTempe.php">Olahan Tempe</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Search -->
                <div class="d-flex align-items-center">
                    <form class="" role="search" id="search-bar">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari" aria-label="cari" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="cari" name="cari">Cari</button>
                        </div>
                    </form>
                </div>

                <!-- Profile -->
                <div class="d-flex justify-content-end" id="logo-dropdown">
                    <div class="dropdown d-flex justify-content-end">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow round-logo" href="#" id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div class="judulLimbah">
        Ingin Membeli Limbah Tempe?
        <hr class="lineSiap">
    </div>


    <div class="d-flex collapse justify-content-center row limbahCards ">

        <?php while ($row = mysqli_fetch_array($sql)) : ?>

            <div class="col-12 col-sm-6 col-md-5 col-lg-4">
                <button class="btn cardd" data-bs-toggle="modal" data-bs-target="#limbah<?= $row['id']; ?>">
                    <img class="fotoLimbah" src="<?= $row['foto']; ?>" alt="foto limbah">
                    <div class="container penjelasanLimbah">
                        <div class="namaPenjual"><?= $row['nama_penjual']; ?></div>
                        <div class="merk"><?= $row['merek']; ?></div>
                    </div>

                </button>
            </div>

            <div class="modal fade" id="limbah<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" id="exampleModalLabel">Kontak Penjual</h1>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row modal-body">
                            <div class="col-6">
                                <img class="fotoLimbah" src="<?= $row['foto']; ?>" alt="foto limbah">
                            </div>
                            <div class="col-6 penjelasanLimbahModal">
                                <div class="namaPenjual"><?= $row['nama_penjual']; ?></div>
                                <div class="merk"><?= $row['merek']; ?></div>
                                <hr>
                                <div class="infoKontak">
                                    <div>Nomor WA: <?= $row['no_hp']; ?></div>
                                    <div>Email: <?= $row['email']; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>

        <!-- <div class="col-12 col-sm-6 col-md-5 col-lg-4">
            <button class="btn cardd" data-bs-toggle="modal" data-bs-target="#limbah2">
                <img class="fotoLimbah" src="assets/images/limbah2.jpeg" alt="foto limbah">
                <div class="container penjelasanLimbah">
                    <div class="namaPenjual">Pak Heri</div>
                    <div class="merk">Limbah Padat</div>
                </div>

            </button>
        </div>

        <div class="modal fade" id="limbah2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel">Kontak Penjual</h1>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="row modal-body">
                        <div class="col-6">
                            <img class="fotoLimbah" src="assets/images/limbah2.jpeg" alt="foto limbah">
                        </div>
                        <div class="col-6 penjelasanLimbahModal">
                            <div class="namaPenjual">Pak Heri</div>
                            <div class="merk">Limbah Padat</div>
                            <hr>
                            <div class="infoKontak">
                                <div>Nomor WA: 081234567891</div>
                                <div>Email: penjual@gmail.com</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-5 col-lg-4">
            <button class="btn cardd" data-bs-toggle="modal" data-bs-target="#limbah3">
                <img class="fotoLimbah" src="assets/images/limbah3.jpeg" alt="foto limbah">
                <div class="container penjelasanLimbah">
                    <div class="namaPenjual">Pak Joko</div>
                    <div class="merk">Limbah Padat dan Cair</div>
                </div>

            </button>
        </div>

        <div class="modal fade" id="limbah3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel">Kontak Penjual</h1>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="row modal-body">
                        <div class="col-6">
                            <img class="fotoLimbah" src="assets/images/limbah3.jpeg" alt="foto limbah">
                        </div>
                        <div class="col-6 penjelasanLimbahModal">
                            <div class="namaPenjual">Pak Joko</div>
                            <div class="merk">Limbah Padat dan Cair</div>
                            <hr>
                            <div class="infoKontak">
                                <div>Nomor WA: 081234567890</div>
                                <div>Email: penjual@gmail.com</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> -->


        <div class="d-flex justify-content-center row pendaftaranPenjualLimbah">
            <a href="register.php" class="col-6 tombolDaftar">
                Daftar sebagai penjual disini!
            </a>
        </div>


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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>