<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kim Purwoagung</title>
    <link rel="stylesheet" href="tentangKamiStyle.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- graf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $("body").on("click", "#kalkulasi", function() {
                var invest = $("#investasi").val();
                var penggunaanKg = $("#penggunaan").val();
                var jmlBulan = $("#jmlBulan").val();
                var harga = $("#harga").val();


                if (invest != 0 && penggunaanKg != 0 && jmlBulan != 0, harga != 0) {
                    var BEP = invest / (penggunaanKg * harga);
                    var keuntungan = (penggunaanKg * harga * jmlBulan) - invest;

                    var formattedCurrency = keuntungan.toLocaleString('id-ID', {
                        style: 'currency',
                        currency: 'IDR'
                    });

                    var data = [];
                    var arrBulan = [];
                    var hasil = -1;
                    var bulan = 0
                    while (hasil < 0) {
                        hasil = (penggunaanKg * harga * bulan) - invest;
                        data.push(hasil);
                        arrBulan.push(bulan);
                        console.log(hasil);
                        bulan++;
                    }

                    $("#aknKmbl").html("Akan kembali modal dalam: (bulan)")
                    $("#BEP").html(BEP);
                    $("#keuntunganBio").html(formattedCurrency);
                    $('#graf').html("<canvas id='myChart' style='width:100%;max-width:700px'></canvas>");

                    new Chart("myChart", {
                        type: "line",
                        data: {
                            labels: arrBulan,
                            datasets: [{
                                data: data,
                                borderColor: "red",
                                fill: false,
                                label: "Keuntungan"
                            }]
                        },
                        options: {
                            legend: {
                                display: true
                            }
                        }
                    });
                }
            });
        });
    </script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="navbar-content container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo-kim-purwoagung-removebg-preview.png" alt="Logo" width="80" height="60" class="d-inline-block align-text-top">
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
                            <li><a class="dropdown-item" href="berita.php">Berita</a></li>
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
                            <input type="text" class="form-control" placeholder="Cari" aria-label="cari" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="cari" name="cari">Cari</button>
                        </div>
                    </form>
                </div>
                <!-- Profile -->
                <?php
                if (isset($_SESSION['login'])) { ?>
                    <div class="d-flex justify-content-end" id="logo-dropdown">
                        <div class="dropdown d-flex justify-content-end">
                            <a class="dropdown-toggle d-flex align-items-center hidden-arrow round-logo" href="#" id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-user fa-2x"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                                <li>
                                    <a class="dropdown-item" href="indexPenjual.php">My profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <a href="login.php" class="btn btn-outline-secondary">Log in</a>
                <?php
                }
                ?>


            </div>
        </div>
    </nav>



    <div id="background" class="coverTtgBiogas">
        <div class="jumbotron">
            <div class="row jdulBio">Biogas</div>
            <div class="row descBio">
                suatu gas yang dihasilkan oleh aktifitas atau kegiatan anaerobik atau juga fermentasi dari
                bahan-bahan organik.
            </div>
        </div>
    </div>

    <!-- Benefits -->
    <div class="d-flex row justify-content-center" id="benefits">
        <div class="benefit col-5" id="keuntungan">
            <h2 class="judulList">Keuntungan</h2>
            <ul>
                <li>Mengurangi limbah organik yang mencemari lingkungan</li>
                <li>Mengurangi ketergantungan pada bahan bakar fosil</li>
                <li>Menghasilkan biogas sebagai energy</li>
                <li>Mendukung keberlanjutan peternakan</li>
                <li>Mengurangi emisi gas rumah kaca</li>
            </ul>
        </div>
        <div class="benefit col-5" id="manfaat">
            <h2 class="judulList">Manfaat</h2>
            <ul>
                <li>Pembangkit Listrik</li>
                <li>Bahan bakar kendaraan berbasis gas</li>
                <li>Bisa di gunakan sebagai pemanas rumah dan air panas</li>
                <li>Pemrosesan limbah menjadi pupuk organik</li>
            </ul>
        </div>
    </div>

    <!-- kalkulator keuntungan -->
    <div class="d-flex justify-content-center row" id="kalkulator">
        <div class="row d-flex justify-content-center">
            <div class="simulasiTitle">Ingin tahu perhitungan keuntungan?</div>
        </div>
        <div class="row">
            <div class="col-4 kiriKalk">
                <form action="">
                    <div class="mb-4">
                        <label for="investasi" class="form-label textDiForm">Nilai Investasi</label>
                        <input type="number" name="investast" id="investasi" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="penggunaan" class="form-label textDiForm">Penggunaan Gas per bulan (Kg)</label>
                        <input type="number" name="penggunaan" id="penggunaan" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="jmlBulan" class="form-label textDiForm">Total Penggunaan Biogas (jumlah
                            Bulan)</label>
                        <input type="number" name="jmlBulan" id="jmlBulan" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="harga" class="form-label textDiForm">Harga Gas LPG</label>
                        <input type="number" name="harga" id="harga" class="form-control">
                    </div>
                    <div class="mb-4 ">
                        <button class="btn btn-primary textDiForm" id="kalkulasi" name="kalkulasi" type="button">Kalkulasi</button>
                    </div>
                </form>
            </div>
            <div class="col-1"></div>
            <div class="col-6 kananKalk">
                <div id="aknKmbl"></div>
                <div id="BEP" class="textDiForm"></div>
                <div id="keuntunganBio"></div>
                <div>
                    <div id="graf" class="graf"></div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    <!-- Sejarah -->
    <div class="d-flex row" id="sejarah">
        <div class="d-flex row">
            <h2>Berawal dari <span class="teks-highlight">Limbah Tempe</span></h2>
        </div>
        <div class="d-flex justify-content-center row konten-sejarah">
            <div class="col-5 gambar-sejarah" id="limbah-cair-img"></div>
            <div class="col-6 isi-sejarah">
                Purwoagung dikenal oleh industri utamanya yaitu pembuatan tempe. Olahan tempe yang mereka miliki pun
                bervariasi
                mulai dari kripik tempe, brownies tempe, cokelat tempe, dan lain-lain. Akan tetapi, limbah tempe
                baik berupa air cucian kedelai maupun
                kulit ari kedelai ternyata memiliki kandungan gizi yang sangat tinggi. Limbah cair tempe memiliki
                kandungan gizi di antaranya protein (0,42%),
                lemak (0,113%), karbohidrat (0,11%), air (0,98,87%), kalsium (13,60 ppm), forfor (1,74 ppm), besi
                (4,55 ppm). Selain itu, limbah kulit ari yang
                merupakan 10% dari total kedelai yang diolah juga memiliki kandungan gizi protein (14,45%), lemak
                (3,15%), serat pangan (47,01%).
            </div>
        </div>
        <div class="d-flex row konten-sejarah2">
            <h2 class="right">Menjadi <span class="teks-highlight">Limbah Sapi</span></h2>
        </div>
        <div class="d-flex justify-content-center row endPage">
            <div class="col-6 isi-sejarah">
                Oleh karena kandungan proteinnya yang tinggi, limbah hasil pengolahan tempe digunakan untuk
                pakan sapi
                untuk mengurangi limbah biologi pencemaran Sungai. Pertama, limbah hasil pengolahan tempe itu
                dikumpulkan melalui
                tempat penggemukan sapi. Setelah itu, kotoran sapi yang dihasilkan akan dimasukkan reactor gas
                sehingga
                terjadilah fermentasi anaerobic serta pengumpulan dan penyimpanan gas lalu akhirnya melalui
                selang-selang, setelah
                itu gas-gas tersebut pun dialirkan ke masing-masing kompor gas rumah tangga.
            </div>
            <div class="col-5 gambar-sejarah" id="pakan-kulit-img"></div>
        </div>
    </div>



    <div class="d-flex row footerPage row">
        

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

    <a href="https://api.whatsapp.com/send?phone=+6282157444870&text=Saya%20ingin%20bertanya%20mengenai%20Biogas" class="float" target="_blank">
        <i class="fa-brands fa-whatsapp my-float"></i>
    </a>

    </main>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>


</html>