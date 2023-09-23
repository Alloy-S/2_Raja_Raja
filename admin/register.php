<?php
require_once("../conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name" placeholder="Full name" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="telp" placeholder="Telp number" name="telp">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address" name="email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="password2">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block" id="submit" name="submit" type="submit">
                                    Register Account
                                </button>
                            </form>

                            <?php
                            if (isset($_POST['submit'])) {

                                $fullname = strtolower(stripslashes($_POST["name"]));
                                $telp = $_POST['telp'];
                                $email = strtolower(stripslashes($_POST["email"]));
                                $password = mysqli_real_escape_string($conn, $_POST["password"]);
                                $password2 = mysqli_real_escape_string($conn, $_POST["password2"]);
                                
                                //cek username
                                $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email';");

                                if (mysqli_fetch_assoc($result)) {
                                    echo "<script>
                                            alert('Username sudah terdaftar');
                                    </script>";
                                    header("Location: login.php");
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
                                $qry = "INSERT INTO user (nama, no_telepon, email, password) VALUES ('$fullname', '$telp', '$email', '$password');";
                                $query = mysqli_query($conn, $qry);

                                if($query) {
                                    header("Location: login.php");
                                } else {
                                    echo "<script>
                                    alert('pasword tidak sesuai!');
                                </script>";
                                }
                            }

                            ?>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>