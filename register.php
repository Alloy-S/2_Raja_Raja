<?php
require_once('./conn.php');
?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KIM Purwoagung - Register Penjual</title>

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="loginRegisterStyle.css">

</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Daftar Sekarang!</h1>
                                    </div>
                                    <hr>
                                    <form class="user" method="POST" action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="namaPenjual" placeholder="Masukkan nama lengkap" name="namaPenjual">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="namaToko" placeholder="Masukkan nama toko" name="namaToko">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-user" id="telp" placeholder="Telp number" name="telp">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Masukkan alamat email" name="email">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="password2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                <label class="custom-control-label" for="rememberMe">Ingat Saya</label>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary btn-user btn-block" name="submit" type="submit">
                                            Daftar
                                        </button>

                                    </form>

                                    <?php
                            if (isset($_POST['submit'])) {
                                $name_penjual = strtolower(stripslashes($_POST["namaPenjual"]));
                                $name_toko = strtolower(stripslashes($_POST["namaToko"]));
                                $telp = $_POST['telp'];
                                $email = strtolower(stripslashes($_POST["email"]));
                                $password = mysqli_real_escape_string($conn, $_POST["password"]);
                                $password2 = mysqli_real_escape_string($conn, $_POST["password2"]);
                                
                                //cek username
                                $result = mysqli_query($conn, "SELECT email FROM penjual WHERE email = '$email';");

                                if (mysqli_fetch_assoc($result)) {
                                    echo "<script>
                                                alert('Username sudah terdaftar');
                                        </script>";
                                    // header("Location: ./login.php");
                                    echo "<meta http-equiv='refresh' content=0; url=./login.php'>";
                                    exit();
                                }

                                //cek password
                                if ($password !== $password2) {
                                    echo "<script>
                                            alert('pasword tidak sesuai!');
                                        </script>";
                                }

                                //enkripsi password
                                $password = password_hash($password, PASSWORD_DEFAULT);

                                //tambah user baru ke data base
                                $qry = "INSERT INTO penjual (nama_penjual, nama_toko, no_hp, email, password) VALUES ('$name_penjual', '$name_toko', '$telp', '$email', '$password');";
                                $query = mysqli_query($conn, $qry);

                                if ($query) {
                                    // header("Location: login.php");
                                    echo "<meta http-equiv='refresh' content=0; url=./login.php'>";

                                } else {
                                    echo "<script>
                                        alert('Gagal mendaftar!');
                                    </script>";
                                }
                            }
                            ?>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

</body>

</html>