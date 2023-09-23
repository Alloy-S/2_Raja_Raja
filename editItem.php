<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kim Purwoagung | Jual Limbah Tempe</title>
    <link rel="stylesheet" href="indexPenjual.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="editItem.css" />
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
                        <a class="nav-link " aria-current="page" href="indexPenjual.php">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Daftarkan Item</a>
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
        Daftarkan Item
    </div>

    <body>
        <div class="container">
            <form id="survey-form">
                <div class="form-group">
                    <label id="nameItem" class="nItem">Nama Item</label>
                    <input type="text" id="namaItem" class="form-control" placeholder="Masukkan nama item"
                        required></input>
                </div>
                <div class="form-group">
                    <label id="tokoItem" class="tItem">Toko Item</label>
                    <input type="text" id="namaItem" class="form-control" placeholder="Masukkan nama toko"
                        required></input>
                </div>
                <div class="form-group">
                    <label id="descItem" class="dItem">Deskripsi Item</label>
                    <div>
                        <textarea id="descItem" class="input-textarea" name="desc"
                            placeholder="Masukkan Deskripsi Item"></textarea>
                    </div>
                </div>
        </div>
        <div class="form-group">
            <button type="submit" id="submit" class="submit-button"> Submit </button>
        </div>


    </body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>