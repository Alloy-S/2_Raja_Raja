<?php
require './session.php';
require_once('../conn.php');

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

$id = $_GET['q'];

$Varian = mysqli_query($conn, "SELECT * FROM varian WHERE id='$id'");
$queryVarian = mysqli_fetch_array($Varian);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Purwoagung</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../fontAwesome/css/fontawesome.min.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Purwoagung</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#eventOption" aria-expanded="true" aria-controls="eventOption">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Event</span>
                </a>
                <div id="eventOption" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Event Options:</h6>
                        <a class="collapse-item" href="showEvent.php">Show Event</a>
                        <a class="collapse-item" href="addEvent.php">Add Event</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#berita" aria-expanded="true" aria-controls="berita">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Berita</span>
                </a>
                <div id="berita" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Berita Options:</h6>
                        <a class="collapse-item" href="showBerita.php">Show Berita</a>
                        <a class="collapse-item" href="addBerita.php">Add Berita</a>
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="varian.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Varian</span>
                </a>
            </li>


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['nama']; ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div>
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Varian</h1>

                    </div>

                    <div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <label for="nama">Nama Varian</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="<?= $queryVarian['nama']; ?>">
                            <label for="foto">Foto saat ini</label>
                            <div><img src="<?= $queryVarian['foto']; ?>" alt="" class="w-50"></div>
                            
                            <label for="foto">Masukan Foto</label>
                            <input type="file" id="foto" name="foto" class="form-control">

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteComfirm">
                                    Delete
                                </button>
                                <a href="varian.php">
                                    <button type="button" class="btn btn-secondary">Close</button>
                                </a>
                                <button type="submit" class="btn btn-primary" name="submit">simpan</button>
                            </div>
                        </form>
                    </div>

                    <?php if (isset($_POST['submit'])) {
                        // var_dump($_POST);
                        // var_dump($_FILES);
                        $nama = htmlspecialchars($_POST['nama']);

                        $target_dir = "../image/";
                        $nama_file = basename($_FILES["foto"]["name"]);
                        $target_file = $target_dir . $nama_file;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        $size_file = $_FILES['foto']['size'];

                        $randomString = getName(10);
                        if ($nama == "") {
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
                                            $file = $target_dir . $randomString . "." . $imageFileType;
                                            $queryAdd = mysqli_query($conn, "UPDATE varian SET nama='$nama', foto='$file' WHERE id='$id'");
                                            if ($queryAdd) {
                                                echo "<div class='alert alert-primary mt-3' role='alert'>Varian Berhasil Di update</div>";
                                                // untuk merefresh halaman
                                                echo "<meta http-equiv='refresh' content='1; url=./varian.php'>";
                                            } else {
                                                echo mysqli_error($conn);
                                            }
                                        } else {
                                            echo "<div class='alert alert-primary mt-3' role='alert'>Gagal Upload foto</div>";
                                        }
                                    }
                                }
                            } else {
                                $queryAdd = mysqli_query($conn, "UPDATE varian SET nama='$nama' WHERE id='$id'");
                                echo "<meta http-equiv='refresh' content='1; url=./varian.php'>";
                            }
                        }
                    }
                    ?>
                </div>
                <!-- /.container-fluid -->
                <!-- Modal -->
                <div class="modal fade" id="deleteComfirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Berita</h1>
                            </div>
                            <div class="modal-body">
                                Anda yakin ingin mendelete berita ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <form action="" method="post">
                                    <button type="submit" class="btn btn-primary" name="delete">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                if (isset($_POST['delete'])) {
                    $query = mysqli_query($conn, "DELETE FROM varian WHERE id='$id'");
                    if ($query) {
                        echo "<div class='alert alert-primary mt-3' role='alert'>varian Berhasil Dihapus</div>";
                        echo "<meta http-equiv='refresh' content='0.5; url=./varian.php'>";
                    } else {
                        echo mysqli_error($conn);
                    }
                }
                ?>
                <!-- End of Main Content -->
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2023</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

        <script src="../fontAwesome/js/all.min.js"></script>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>