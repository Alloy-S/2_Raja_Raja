<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kim Purwoagung | Berita</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="tentangKamiStyle.css" />
    <link rel="stylesheet" href="eventStyle.css">
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Biogas</a>
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
                            <li><a class="dropdown-item" href="berita.php">Berita</a></li>
                            <li><a class="dropdown-item active" href="#.php">Event</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
        <div class="container-fluid"></div>

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                <img src="assets/images/biogas.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                <img src="assets/images/cat.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="assets/images/biogas.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="judul">
            Varian Unik Olahan Tempe Kami
            <hr class="lineSiap">
        </div>
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-6" style="margin: 0 2%">
                <div class="col">
                    <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">Card title</h5>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">Card title</h5>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">Card title</h5>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">Card title</h5>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="judul">
            Mau Belajar Membuat Tempe?
            <hr class="lineSiap">
        </div>

        <div class="row mb-3">
            <div class="d-flex row align-items-center">
                <div class="col-5">
                    <img class="foto foto-kiri" src="assets/images/festival-tempe-sanan-depan.jpeg" alt="Penampakan Bagian Depan Festival Tempe Sanan">
                </div>
                <div class="col-7 info" style="padding-right: 3%">
                    Festival Tempe Sanan merupakan acara tahunan yang digelar oleh RW 14, 15, dan 16. Festival ini menghelat warga pengrajin tempe 
                    untuk menampilkan produk olahan mereka di tenda-tenda bazar. Tujuan utama dari festival ini ialah untuk menarik minat masyarakat 
                    terhadap produk olahan tempe warga Sanan. Adapun berbagai varian produk yang ditawarkan antara lain seperti brownies tempe, 
                    cookies tempe, sus tempe, burger tempe, dan lain sebagainya. Festival ini awal mulanya diusulkan oleh Bapak Anggik Dewanta 
                    selaku ketua pelaksana Festival Tempe Sanan. Oleh karena antusiasnya tersebut, festival ini pun diagendakan tiap tahun.
                </div>
            </div>
        </div>
        <div class="row mb-3 background detail-event" style="margin-top: 5%">
            <div class="d-flex row align-items-center" style="margin-top:-5%">
                <div class="col-8" style="padding-left: 3%">
                    <div class="row info deskripsi" style="margin-top: 5%">
                        <h2>Manfaat & Dampak</h2>
                    </div>
                    <div class="row info">
                        <h5  style="color: white; margin-top: -1%; font-style: italic">Memotivasi generasi muda untuk bisa membuka peluang usaha</h2>
                    </div>
                </div>
                <div class="col-4 mt-3 mb-3">
                    <img class="foto foto-kanan" src="assets/images/festival-tempe-sanan-belakang.jpeg" alt="Penampakan Bagian Depan Festival Tempe Sanan">
                </div>
            </div>
        </div>

        <form style="margin-top: -5%">
            <h2 class="judul">Deskripsi</h2>
            <h5 class="tanggalDeskripsi">Olahan tempe baru: <span class="teks">Tempe Menjes</span></h5>
            <h2 class="judul", style="margin-top: -5%">Tanggal</h2>
            <hr class="lineSiap">
            <h5 class="tanggalDeskripsi">xx November 2023</h5>
            <div class="d-grid gap-3 col-6 mx-auto">
                <button class="btn btn-lg btn-secondary mt-1" type="submit" data-bs-toggle="modal" data-bs-target="#daftarModal" style="margin-bottom: 5%">Daftar Sekarang!</button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="daftarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="daftarModalLabel">Daftar Event</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="namaLengkap">
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="inputPhoneNumber" class="form-label">No. Telepon (WA)</label>
                                <input type="text" class="form-control" id="inputPhoneNumber" aria-describedby="emailHelp">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>
        </form>

    </main>

    <div class="footerPage row">
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
</body>
       