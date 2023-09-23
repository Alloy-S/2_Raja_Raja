<?php 
require './session.php';
require_once('./conn.php');

function getName($n = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}
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
            <a class="navbar-brand" href="#">
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
                        <a class="nav-link active" href="#">Daftarkan Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="editProfile.php">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="d-flex row" style="padding: 0 5%;">
        <div class="container col-5">
            <div class="judulItem">
                Daftarkan Item
            </div>

            <form id="survey-form" method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label id="nameItem" class="nItem "><b>Nama Item</b></label>
                    <input type="text" id="namaItem" name="nama" class="form-control" placeholder="Masukkan nama item" required></input>
                </div>
                <div class="form-group">
                    <label id="nameItem" class="nItem "><b>Nama Merek</b></label>
                    <input type="text" id="namaItem" name="merek" class="form-control" placeholder="Masukkan nama merek" required></input>
                </div>
                <div class="form-group">
                    <label id="descItem" class="dItem"><b>Deskripsi Item</b></label>
                    <input type="text" id="descItem" name="deskripsi" class="form-control" placeholder="Masukkan deskripsi item" required></input>
                </div>


                <div class="input-group mb-3">

                    <label for="foto" class="inputFoto">
                        <div>
                            <b>Foto</b>
                        </div>
                    </label>

                    <div>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" name="submit" id="submit" class="btn btn-secondary btn btn-block submit-button">Submit
                    </button>
                </div>
            </form>
        </div>

        <?php if (isset($_POST['submit'])) {
            $nama = htmlspecialchars($_POST['nama']);
            $merek = htmlspecialchars($_POST['merek']);
            $deskripsi = htmlspecialchars($_POST['deskripsi']);

            $target_dir = "image/";
            $nama_file = basename($_FILES["foto"]["name"]);
            $target_file = $target_dir . $nama_file;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $size_file = $_FILES['foto']['size'];

            $randomString = getName(10);
            if ($nama == "" || $deskripsi == "" || $merek == "") {
                echo "<div class='alert alert-primary mt-3' role='alert'>harap Lengkapi Form</div>";
            } else {
                if ($nama_file != "") {
                    if ($size_file > 5000000) {
                        echo "<div class='alert alert-primary mt-3' role='alert'>foto tidak boleh dari 500kb</div>";
                    } else {
                        if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg') {
                            echo "<div class='alert alert-primary mt-3' role='alert'>File harus bertipe JPG, PNG atau JPEG</div>";
                        } else {
                            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dir . $randomString . "." . $imageFileType)) {
                                $queryExist = mysqli_query($conn, "SELECT * FROM produk WHERE nama='$nama'");
                                if (mysqli_num_rows($queryExist) > 0) {
                                    echo "<div class='alert alert-primary mt-3' role='alert'>Event Sudah Ada</div>";
                                } else {
                                
                                    $file = $target_dir . $randomString . "." . $imageFileType;
                                    $id = $_SESSION['key'];
                                    $queryAdd = mysqli_query($conn, "INSERT INTO produk (id_penjual, nama, merek, deskripsi, foto) VALUES ('$id', '$nama', '$merek', '$deskripsi', '$file')");
                                    if ($queryAdd) {
                                        echo "<div class='alert alert-primary mt-3' role='alert'>Item Berhasil Ditambahkan</div>";
                                        // untuk merefresh halaman
                                    } else {
                                        echo mysqli_error($conn);
                                    }
                                }
                            } else {
                                echo "<div class='alert alert-primary mt-3' role='alert'>Gagal Upload foto</div>";
                            }
                        }
                    }
                }
            }
        }
        ?>


        <div class="container col-5">
            <div class="judulItem">
                Daftarkan Limbah
            </div>
            <form id="survey-form">
                <div class="form-group">
                    <label id="nameItem" class="nItem "><b>Nama Jenis Limbah</b></label>
                    <div class="form-check">
                        <select name="jenis" id="jenisLimbah">
                            <option value="padat">Padat</option>
                            <option value="cair">Cair</option>
                            <option value="padat-dan-cair">Padat dan Cair</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" id="submit" class="btn btn-secondary btn btn-block submit-button" name="submitAdd"> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>