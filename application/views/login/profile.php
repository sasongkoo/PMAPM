<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>My Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>/assets/css/style1.css" rel="stylesheet" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#"><img src="<?php echo base_url() ?>assets/img/logopnsleman.png" style="width: 35px; height:45px;"> Halaman Admin</a>

        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <?= $this->session->userdata('username') ?> <i class="fas fa-user fa-fw"></i>

            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url('admin/dataTabel') ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div> Tabel LKE
                                </a>
                                <a class="nav-link" href="<?php echo base_url('admin/dataTabelUser') ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div> Tabel User
                                </a>
                            </nav>
                        </div>
                        <a class="nav-link" href="<?php echo base_url('admin/dashboard/logout') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Ini adalah contoh untuk:</div>
                    Halaman Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
                    <h1 class="h3 mb-0 text-gray-800">My Profile</h1>
                    <a class="btn btn-primary mb-3" href="<?php echo base_url('admin/dashboard') ?>"><i class="fa-solid fa-chevron-left"></i> Kembali</a>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <div class="col-lg-8">
                        <form method="POST" action="<?php echo base_url('admin/profile/edit') ?>">
                            <div class="form-group row">
                                <label for="email" class="form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['username'] ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="otoritas" class="form-label">Otoritas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="otoritas" name="otoritas" value="<?= $user['otoritas'] ?>" readonly>
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="py-4 bg-light mt-auto fixed-buttom">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; PN Sleman</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>/assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>/assets/js/datatables-simple-demo.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>/assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>/assets/js/demo/chart-area-demo.js"></script>

    <script>
        // Pie Chart Example
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Ketua", "Wakil Ketua", "Hakim", "Panitera", "Panmud Pidana", "Panmud Perdata", "Koordinator Area"],
                datasets: [{
                    data: [<?php echo $this->db->query("select area from checklist where area='KETUA'")->num_rows(); ?>,
                        <?php echo $this->db->query("select area from checklist where area='WAKIL KETUA'")->num_rows(); ?>,
                        <?php echo $this->db->query("select area from checklist where area='HAKIM'")->num_rows(); ?>,
                        <?php echo $this->db->query("select area from checklist where area='PANITERA'")->num_rows(); ?>,
                        <?php echo $this->db->query("select area from checklist where area='PANMUD PIDANA'")->num_rows(); ?>,
                        <?php echo $this->db->query("select area from checklist where area='PANMUD PERDATA'")->num_rows(); ?>,
                        <?php echo $this->db->query("select area from checklist where area='KOORDINATOR AREA'")->num_rows(); ?>
                    ],
                    backgroundColor: ['#0d6efd', '#198754', '#0dcaf0', '#ffc107', '#000', '#dc3545', '#adb5bd'],
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false
                },
                cutoutPercentage: 0,
            },
        });
    </script>
</body>

</html>