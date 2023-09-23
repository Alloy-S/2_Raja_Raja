<?php
session_start();
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

    <title>KIM Purwoagung - Login Penjual</title>

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
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                    </div>
                                    <hr>
                                    <form class="user" method="POST" action="">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Masukkan alamat email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" placeholder="Masukkan password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary btn-user btn-block" name="submit" type="submit">
                                            Login
                                        </button>

                                    </form>

                                    <?php

                                    if (isset($_POST['submit'])) {
                                        $email = htmlspecialchars($_POST['email']);
                                        $password = htmlspecialchars($_POST['password']);

                                        $query = mysqli_query($conn, "SELECT * FROM penjual WHERE email='$email'");
                                        $countData = mysqli_num_rows($query);
                                        if ($countData > 0) {
                                            $data = mysqli_fetch_array($query);
                                            if (password_verify($password, $data['password'])) {
                                                $_SESSION['username'] = $data['email'];
                                                $_SESSION['key'] = $data['id'];
                                                $_SESSION['login'] = true;
                                                header("location: ./");
                                            } else {
                                                echo "<div class='alert alert-warning mt-4' role='alert'>
                                                        Username/Password salah
                                                    </div>";
                                            }
                                        } else {

                                    ?>
                                            <div class="alert alert-warning" role="alert">
                                                Username/Password salah
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <div class="text-center mt-4">
                                        <a class="small" href="forgot-password.html">Lupa Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Buat Akun!</a>
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