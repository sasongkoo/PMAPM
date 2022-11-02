<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Halaman Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="<?php echo base_url() ?>assets/img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url() ?>assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/4075006368.js" crossorigin="anonymous"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <style>
        .scroll {
            height: 450px;
            overflow: scroll;
        }

        div.dataTables_wrapper {
            width: 1300px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->

    <!-- Spinner End -->

    <!-- Topbar Start -->

    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Halaman Admin</a>
        <!-- Sidebar Toggle-->
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!"><i class="fa-solid fa-address-card"></i> <?= $this->session->userdata('username') ?> Profile</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('admin/Changepassword') ?>"><i class="fa-solid fa-key"></i> Change Password</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?php echo base_url('admin/dashboard/logout') ?>"><i class="fa-solid fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Navbar End -->
    <main>
        <div class="container px-4">
            <h1 class="mt-4">Penilaian</h1>
            <a class="btn btn-primary mb-3" href="<?php echo base_url('admin/dataTabel') ?>"><i class="fa-solid fa-chevron-left"></i> Kembali</a>
            
            
            <!-- Example single danger button -->

        </div>
        <div class="container px-4">
            <div class="card border-3 bg-primary p-2 text-dark bg-opacity-25" style="width: 60%; border-radius:10px;">
                <div class="card-body">
                    <?php foreach ($checklist as $c) : ?>
                        <form method="POST" action="">
                            <div class="form-group mb-3">
                                <label>Penilaian</label>
                                <textarea name="a" class="form-control" rows="4" value=""><?php echo $c->a ?></textarea>
                                <?php echo form_error('a', '<div class="text-small text-danger"></div>') ?>
                            </div>
                            
                        </form>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

    </main>               
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assetslib/wow/wow.min.js"></script>
    <script src="<?php echo base_url() ?>assetslib/easing/easing.min.js"></script>
    <script src="<?php echo base_url() ?>assetslib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assetslib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url() ?>assetsjs/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

</body>

</html>