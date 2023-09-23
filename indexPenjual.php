<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kim Purwoagung | Jual Limbah Tempe</title>
    <link rel="stylesheet" href="indexPenjual.css" />
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
                        <a class="nav-link active" aria-current="page" href="#">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="editItem.php">Daftarkan Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="editProfile.php">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang-kami.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="judulItem">
        Daftar Item yang Terdaftarkan
    </div>


    <div class="d-flex collapse justify-content-center row itemCards ">

        <div class="col-12 col-sm-8 col-md-7 col-lg-6">
            <button class="btn cardd" data-bs-toggle="modal" data-bs-target="#limbah1">
                <div class="row ">
                    <div class="col-5">
                        <img class="fotoItem" src="image/amber.jpg" alt="foto limbah">
                    </div>
                    <div class="col-7 container penjelasanItem">
                        <div class="namaItem">Keripik Tempe</div>
                        <div class="toko">Uniqlo</div>
                        <hr>
                        <div class="descItem">Deskripsi:</div>
                        <div class="descItem">Keripik yang terbuat dari kentang</div>
                    </div>
                </div>
            </button>
        </div>

        <div class="col-12 col-sm-8 col-md-7 col-lg-6">
            <button class="btn cardd" data-bs-toggle="modal" data-bs-target="#limbah1">
                <div class="row ">
                    <div class="col-5">
                        <img class="fotoItem" src="image/amber.jpg" alt="foto limbah">
                    </div>
                    <div class="col-7 container penjelasanItem">
                        <div class="namaItem">Keripik Tempe2</div>
                        <div class="toko">Uniqlo</div>
                        <hr>
                        <div class="descItem">Deskripsi:</div>
                        <div class="descItem">Keripik yang terbuat dari Ayam</div>
                    </div>
                </div>
            </button>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>

</html>