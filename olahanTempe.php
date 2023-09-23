<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kim Purwoagung</title>
    <link rel="stylesheet" href="olahanTempe.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="tentangKamiStyle.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="navbar-content container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo-kim-purwoagung-removebg-preview.png" alt="Logo" width="80" height="60"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Berita & Event
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="berita.php">Berita</a></li>
                            <li><a class="dropdown-item" href="event.php">Event</a></li>
                        </ul>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tempe
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="limbahTempe.php">Limbah Tempe</a></li>
                            <li><a class="dropdown-item" href="olahanTempe.php">Olahan Tempe</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search" id="search-bar">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari" aria-label="Cari"
                            aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
                    </div>
                </form>

                <!-- Profile -->
                <div class="d-flex justify-content-end" id="logo-dropdown">
                    <div class="dropdown d-flex justify-content-end">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                            id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                            aria-expanded="false">
                            <img src="assets/images/anonymous.jpg" class="rounded-circle" height="60" alt="Profile"
                                loading="lazy" />
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

    <div class="judulOlahan">
        Ingin Membeli Olahan Tempe?
        <hr class="lineSiap">
    </div>


    <div class="d-flex collapse justify-content-center row olahanCards ">

        <div class="col-12 col-sm-6 col-md-5 col-lg-4">
            <button class="btn cardd" data-bs-toggle="modal" data-bs-target="#produk1">
                <img class="fotoProduk" src="image/amber.jpg" alt="foto produk">
                <div class="container penjelasanProduk">
                    <div class="namaProduk">Keripik Tempe</div>
                    <div class="merk">Cap Mawar</div>
                </div>

            </button>
        </div>

        <div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                            <img class="fotoProduk" src="image/amber.jpg" alt="foto produk">
                        </div>
                        <div class="col-6 penjelasanProdukModal">
                            <div class="namaProduk">Keripik Tempe</div>
                            <div class="merk">Cap Mawar</div>
                            <hr>
                            <div class="infoKontak">
                                <div>Nomor WA: 081234567890</div>
                                <div>Alamat Penjual: Malang, Blok 123</div>
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
            <button class="btn cardd" data-bs-toggle="modal" data-bs-target="#produk1">
                <img class="fotoProduk" src="image/amber.jpg" alt="foto produk">
                <div class="container penjelasanProduk">
                    <div class="namaProduk">Keripik Tempe</div>
                    <div class="merk">Cap Mawar</div>
                </div>

            </button>
        </div>

        <div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                            <img class="fotoProduk" src="image/amber.jpg" alt="foto produk">
                        </div>
                        <div class="col-6 penjelasanProdukModal">
                            <div class="namaProduk">Keripik Tempe</div>
                            <div class="merk">Cap Mawar</div>
                            <hr>
                            <div class="infoKontak">
                                <div>Nomor WA: 081234567890</div>
                                <div>Alamat Penjual: Malang, Blok 123</div>
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
            <button class="btn cardd" data-bs-toggle="modal" data-bs-target="#produk1">
                <img class="fotoProduk" src="image/amber.jpg" alt="foto produk">
                <div class="container penjelasanProduk">
                    <div class="namaProduk">Keripik Tempe</div>
                    <div class="merk">Cap Mawar</div>
                </div>

            </button>
        </div>

        <div class="d-flex justify-content-center row pendaftaranPenjualProduk">
            <div class="col-6 tombolDaftar" role="button">
                Daftar sebagai penjual disini!
            </div>
        </div>

        <div class="d-flex row footerPage row">
            <div class="subscriptionInput row">
                <div class="inginMendapat col-4">
                    Ingin mendapatkan berita terbaru?
                </div>
                <div class="emailSubInput col-6">
                    <input class="inputEmail" type="text" id="emailSubscription" name="email"
                        placeholder="Masukkan email anda...">
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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>

</html>