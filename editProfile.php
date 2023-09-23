<?php
require_once("./conn.php");
require './session.php';
$id = $_SESSION['key'];

$sql = mysqli_query($conn, "SELECT * FROM penjual WHERE id='$id'");
$sql = mysqli_fetch_array($sql);


?>

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
                        <a class="nav-link " aria-current="page" href="indexPenjual.php">List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="editProduk.php">Daftarkan Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="judulItem">
        Masukkan Informasi Anda
    </div>

    <body>
        <div class="container">
            <form id="survey-form" method="post" action="">
                <div class="form-group">
                    <label id="namaAnda" class="nAnda">Nama Anda</label>
                    <input type="text" id="namaAnda" name="nama" class="form-control" placeholder="Masukkan Nama Anda" value="<?= $sql['nama_penjual']; ?>" required></input>
                </div>
                <div class="form-group">
                    <label id="noTelp" class="nTelp">Nomor Telepon</label>
                    <input type="text" id="noTelp" name="no_hp" class="form-control" placeholder="Masukkan Nomor Telepon" value="<?= $sql['no_hp']; ?>" required></input>
                </div>
                <div class="form-group">
                    <label id="email" class="eml">Email</label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="Masukkan Email Anda" value="<?= $sql['email']; ?>" required></input>
                </div>

                <div class="form-group">
                    <button type="submit" id="submit" name="submit" class="btn btn-secondary btn btn-block submit-button">Submit
                    </button>
                </div>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            var_dump($_POST);
            $nama = htmlspecialchars($_POST['nama']);
            $nohp = $_POST['no_hp'];
            $email = htmlspecialchars($_POST['email']);


            if ($nama != "" && $nohp != "" && $email != "") {
                $sql = mysqli_query($conn, "UPDATE penjual SET nama_penjual='$nama', no_hp='$nohp', email='$email'");

                if ($sql) {
                    echo "<meta http-equiv='refresh' content='0.5; url=./editProfile.php'>";
                } else {
                    echo "<div class='alert alert-warning mt-3' role='alert'>gagal diperbarui</div>";
                }
            }
        }
        ?>


    </body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>