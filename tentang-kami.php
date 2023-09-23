<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kim Purwoagung | Tentang Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- font awesome style -->
    <link rel="stylesheet" href="./fontAwesome/css/all.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="tentangKamiStyle.css" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />

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
                            <a class="nav-link active" href="#">Tentang Kami</a>
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


    <div class="coverTentangKami" id="bg">
        <div class="jumbotron">
            <div class="coverTulisan">
                <div class="introCover d-flex justify-content-center collapse row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2 col-md-3 col-sm-5 titleKim">
                        KIM
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-10 titlePurwo">
                        Purwoagung
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <div class="d-flex justify-content-center row">
                    <div class="col-6 align-items-center subtitleTentangKami">
                        Kelurahan Purwantoro - Malang
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row siapakamiTtgKami">
        <div class="row titleSiapaKami">
            Siapa Kami?
        </div>
        <hr class="lineSiap">
        <div class="row penjelasanSiapaKami">
            <div class="col-7 fotoSiapaKami">
                <img class="imgSiapaKami" src="assets/images/fotosement.jpg">
            </div>
            <div class="col-5 ">
                <div class="tulisanSiapaKami">
                    KIM adalah organisasi dari masyarakat, oleh masyarakat, untuk masyarakat. Tujuan utama KIM adalah
                    untuk
                    penyaluran informasi, baik antar masyarakat, dari masyarakat ke pemerintah, dan sebaliknya.
                </div>
                <div class="tulisanSiapaKami">
                    KIM Purwoagung berfokus pada biogas. Mereka memegang kunci dalam penyebaran ilmu mengenai pengolahan
                    limbah tempe sebagai pakan sapi, menjadi biogas dari limbah yang sapi hasilkan. Biogas yang
                    dihasilkan terbukti memnghabiskan dana yang jauh lebih kecil daripada gas tabung umumnya. Kim
                    Purwoagung menyediakan edukasi bagi desa desa yang berminat untuk menerapkan hal ini.
                </div>
            </div>
        </div>
    </div>



    <div class="row visiMisi">
        <div class="col-6 Visi">
            <div class="row judulVisi">
                Visi
            </div>
            <div class="row penjelasanVisi">
                Visi dari Komunitas Informasi Masyarakat Purwoagung adalah terwujudnya Komunitas Informasi Masyarakat
                yang inovatif dalam meningkatkan nilai tambah bagi masyarakat melakui pendayagunaan informasi dan
                komunikasi dalam rangka mencapai masyarakat informasi yang sejahtera.
            </div>
        </div>
        <div class="col-6 Misi">
            <div class="row judulMisi">
                Misi
            </div>
            <div class="row penjelasanMisi">
                <ol>
                    <li>Meningkatkan peranan KIM dalam memperlancar arus informasi antar anggota masyarakat, antara
                        pemerintah dengan masyarakat serta pemerintah dengan masyarakat.</li>
                    <li>Meningkatkan kemampuan anggota KIM dan masyarakat dalam mengakses dan mengelola informasi untuk
                        mengatasi kesenjangan informasi.</li>
                    <li>Mengembangkan dan meningkatkan aktivitas KIM dalam mendayagunakan informasi guna meningkatkan
                        nilai tambah bagi masyarakat dan menyerap serta menyalurkan aspirasi masyarakat.</li>
                    <li>Meningkatkan aktivitas KIM dalam menyerap dan menyalurkan aspirasi masyarakat.</li>
                    </li>
            </div>
        </div>
    </div>


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

</html>