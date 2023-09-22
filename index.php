<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kim Purwoagung</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="pengumuman">Pengumuman</div>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <div class="navbar-content container-fluid">
            <a class="navbar-brand" href="#">
                <img src="..." alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                KIM Purwoagung
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Biogas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang-kami.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Berita & Event
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Berita</a></li>
                            <li><a class="dropdown-item" href="#">Event</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tempe
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Limbah Tempe</a></li>
                            <li><a class="dropdown-item" href="#">Olahan Tempe</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search" id="search-bar">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari" aria-label="Cari" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
                    </div>
                </form>

                <!-- Profile -->
                <div class="d-flex justify-content-end" id="logo-dropdown">
                    <div class="dropdown d-flex justify-content-end">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/anonymous.jpg" class="rounded-circle" height="60" alt="Profile" loading="lazy"/>
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

    <header>
        <div id="background">
            <div class="jumbotron">
                <h1>Biogas</h1>
                <div class="description">
                    <p>suatu gas yang dihasilkan oleh aktifitas atau kegiatan anaerobik atau juga fermentasi dari bahan-bahan organik.</p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Benefits -->
        <div class="d-flex row" id="benefits">
            <div class="benefit col" id="keuntungan">
                <h2>Keuntungan</h2>
                <ul>
                    <li>Mengurangi limbah organik yang mencemari lingkungan</li>
                    <li>Mengurangi ketergantungan pada bahan bakar fosil</li>
                    <li>Menghasilkan biogas sebagai energy</li>
                    <li>Mendukung keberlanjutan peternakan</li>
                    <li>Mengurangi emisi gas rumah kaca</li>
                </ul>
            </div>
            <div class="benefit col" id="manfaat">
                <h2>Manfaat</h2>
                <ul>
                    <li>Pembangkit Listrik</li>
                    <li>Bahan bakar kendaraan berbasis gas</li>
                    <li>Bisa di gunakan sebagai pemanas rumah dan air panas</li>
                    <li>Pemrosesan limbah menjadi pupuk organik</li>
                </ul>
            </div>
        </div>

        <!-- kalkulator keuntungan -->
        <div class="d-flex row" id="kalkulator">
            <div class="col-3">
                
            </div>
            <div class="col-9">

            </div>
        </div>

        <!-- Sejarah -->
        <div class="d-flex row" id="sejarah">
            <div class="d-flex row">
                <h2>Berawal dari <span class="teks-highlight">Limbah Tempe</span></h2>
            </div>
            <div class="d-flex row">
                <div class="col-3"></div>
                <div class="col-9"></div>
            </div>
            <div class="d-flex row">
                <h2 class="right">Menjadi <span class="teks-highlight">Limbah Sapi</span></h2>
            </div>
            <div class="d-flex row">
                <div class="col-9"></div>
                <div class="col-3"></div>
            </div>
        </div>

    </main>
  </body>
</html>
