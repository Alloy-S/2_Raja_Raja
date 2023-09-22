<?php
require './session.php';
require_once('../conn.php');


$id = $_GET['wkwk'];

$data = mysqli_query($conn, "SELECT * FROM berita WHERE id='$id'");
$detailBerita = mysqli_fetch_array($data);

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
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

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
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#produkOption" aria-expanded="true" aria-controls="produkOption">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Produk</span>
                </a>
                <div id="produkOption" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Produk Options:</h6>
                        <a class="collapse-item" href="showProduk.php">Show</a>
                        <a class="collapse-item" href="cards.html">Add Produk</a>
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
                        <a class="collapse-item" href="showBerita.php">Show</a>
                        <a class="collapse-item" href="addBerita.php">Add Berita</a>
                    </div>
                </div>
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

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Detail Produk</h1>

                    <div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <label for="subject">Judul Berita:</label>
                                <input type="text" class="form-control" name="namaBerita" value="<?= $detailBerita['nama_artikel']; ?>">
                                <label for="categories">Nama Penulis:</label>
                                <input type="text" class="form-control" name="namaPenulis" value="<?= $detailBerita['nama_penulis']; ?>">
                                <!-- <label for="date">Date:</label>
                                    <input type="date" class="form-control" name="date"> -->
                                <label for="description">Description:</label>
                                <textarea name="description" cols="10" rows="25" class="form-control"><?= $detailBerita['deskripsi']; ?></textarea>

                                <div class="mt-4">
                                    <label for="fotoSekarang">Foto Saat Ini</label>
                                </div>
                                <div>
                                    <img src="<?= $detailBerita['foto']; ?>" alt="" class="img-fluid rounded mx-auto d-block">
                                </div>
                                <label for="foto" class="mb-4 mt-4">Upload Foto Baru</label>
                                <input type="file" name="foto" id="foto" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteComfirm">
                                    Delete
                                </button>
                                <a href="showBerita.php">
                                    <button type="button" class="btn btn-secondary">Close</button>
                                </a>
                                <button type="submit" class="btn btn-primary" name="submitUpdate">Add</button>
                            </div>
                        </form>
                    </div>
                    <?php if (isset($_POST['submitUpdate'])) {
                        $nama = htmlspecialchars($_POST['namaBerita']);
                        $namaPenulis = htmlspecialchars($_POST['namaPenulis']);
                        $detail = htmlspecialchars($_POST['description']);

                        $target_dir = "../image/";
                        $nama_file = basename($_FILES["foto"]["name"]);
                        $target_file = $target_dir . $nama_file;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        $size_file = $_FILES['foto']['size'];

                        $randomString = getName(10);
                        if ($nama == "" || $namaPenulis == "" || $detail == "") {
                            echo "<div class='alert alert-primary mt-3' role='alert'>harap Lengkapi Form</div>";
                        } else {


                            if ($nama_file != '') {

                                if ($size_file > 5000000) {
                                    echo "<div class='alert alert-primary mt-3' role='alert'>foto tidak boleh dari 500kb</div>";
                                } else {
                                    if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg') {
                                        echo "<div class='alert alert-primary mt-3' role='alert'>File harus bertipe JPG, PNG atau JPEG</div>";
                                    } else {
                                        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dir . $randomString . "." . $imageFileType)) {
                                            $queryExist = mysqli_query($conn, "SELECT * FROM produk WHERE nama='$$nama'");
                                            if (mysqli_num_rows($queryExist) > 0) {
                                                echo "<div class='alert alert-primary mt-3' role='alert'>Produk Sudah Ada</div>";
                                            } else {
                                                $file = $target_dir . $randomString . "." . $imageFileType;
                                                $queryUpdate = $queryUpdate = mysqli_query($conn, "UPDATE berita SET nama_artikel='$nama', nama_penulis='$namaPenulis', foto='$file', deskripsi='$detail' WHERE id='$id'");
                                                if ($queryUpdate) {
                                                    echo "<div class='alert alert-primary mt-3' role='alert'>berhasil diperbarui</div>";
                                                    // untuk merefresh halaman
                                                    echo "<meta http-equiv='refresh' content='1; url=./showBerita.php'>";
                                                } else {
                                                    echo mysqli_error($conn);
                                                }
                                            }
                                        } else {
                                            echo "<div class='alert alert-primary mt-3' role='alert'>Gagal Upload foto</div>";
                                        }
                                    }
                                }
                            } else {
                                $queryUpdate = mysqli_query($conn, "UPDATE berita SET nama_artikel='$nama', nama_penulis='$namaPenulis', deskripsi='$detail' WHERE id='$id'");

                                if ($queryUpdate) {
                                    echo "<div class='alert alert-primary mt-3' role='alert'>berhasil diperbarui</div>";
                                    // untuk merefresh halaman
                                    echo "<meta http-equiv='refresh' content='1; url=./showBerita.php'>";
                                }
                            }
                        }
                    }


                    ?>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                </div>

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
                    $query = mysqli_query($conn, "DELETE FROM berita WHERE id='$id'");
                    if ($query) {
                        echo "<div class='alert alert-primary mt-3' role='alert'>Berita Berhasil Dihapus</div>";
                        echo "<meta http-equiv='refresh' content='0.5; url=./showBerita.php'>";
                    } else {
                        echo mysqli_error($conn);
                    }
                }
                ?>
                <!-- /.container-fluid -->

                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
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
                        <a class="btn btn-primary" href="login.php">Logout</a>
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