<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PMAPM PN SLEMAN</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/2.0.2/css/searchPanes.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css">
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
    <!-- Navbar Start -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html"><img src="<?php echo base_url() ?>assets/img/logopnsleman.png" style="width: 35px; height:45px;"> Halaman <?= $this->session->userdata('otoritas')?></a>
        <!-- Sidebar Toggle-->
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?php echo base_url('admin/changepassword') ?>"><i class="fa-solid fa-key"></i> Change Password</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?php echo base_url('admin/dashOtoritas/logout') ?>"><i class="fa-solid fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Navbar End -->
    <main>
        <div class="container-fluid">
            <a class="btn btn-primary mb-2 mt-3" href="<?php echo base_url('admin/dashOtoritas') ?>"><i class="fa-solid fa-chevron-left"></i> Kembali</a>

            <div class="container px-4">
                <h1 class="mt-4">Tabel LKE</h1>

                <a class="btn btn-success mb-3 float-right" href="<?php echo base_url('admin/dataTabelOtoritas/tambahData/') ?>"><i class="fa-solid fa-file-circle-plus fa-beat"></i> Tambah Data</a>
                <!-- Example single danger button -->

            </div>

            <div class="container px-4">
                <?php echo $this->session->flashdata('pesandata') ?>
                <table id="example" class="table table-bordered rounded-3 table-striped bg-success p-2 text-dark bg-opacity-25 mt-4 display nowrap">
                    <thead>
                        <tr>
                            <th class="text">Edit</th>
                            <th class="text">No</th>
                            <th class="text">Area</th>
                            <th class="text">Penilaian</th>
                            <th class="text">Area ZI</th>
                            <th class="text">A (100%)</th>
                            <th class="text">File</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php $no = 1;
                        foreach ($checklist as $c) : ?>
                            <tr>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataTabelOtoritas/updateData/' . $c->no) ?>">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a onclick="return confirm('Yakin Hapus')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataTabelOtoritas/deleteData/' . $c->no) ?>">
                                            <i class="fas fa-trash fa-beat-fade"></i>
                                        </a>
                                    </center>
                                </td>
                                <td>
                                    <center><?php echo $no++ ?></center>
                                </td>
                                <td><?php echo $c->area ?></td>
                                <td><?php echo $c->penilaian ?></td>
                                <td><?php echo $c->area_zi ?></td>
                                <td><?php echo $c->a ?></td>
                                <!-- menampilkan link yang dapat diklik -->
                                <td><a href="<?php echo $c->file ?> ">Link File</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Edit</th>
                            <th>No</th>
                            <th>Area</th>
                            <th>Penilaian</th>
                            <th>Area ZI</th>
                            <th>A (100%)</th>
                            <th>File</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </main>
    <br>
    <footer class="py-4 bg-light mt-auto fixed-buttom bg-dark">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-white">Copyright &copy; PN Sleman</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
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
    <script src="https://cdn.datatables.net/searchpanes/2.0.2/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
    <!--<script>
        $(document).ready(function() {
            $('#example').DataTable({
                scrollY: 300,
                scrollX: true,
            });
        });
    </script>-->
    <script>
        $(document).ready(function() {
            var dt = $('#example').DataTable({
                "language": {
                    "decimal": "",
                    "emptyTable": "Tidak ada data yang tersedia di tabel",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ masukan",
                    "infoEmpty": "Menampilkan 0 sampai 0 dari 0 masukan",
                    "infoFiltered": "(difilter dari _MAX_ total masukan)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Menampilkan _MENU_ masukan",
                    "loadingRecords": "Memuat...",
                    "processing": "Sedang diproses...",
                    "search": "Search:",
                    "zeroRecords": "Arsip tidak ditemukan",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Lanjut",
                        "previous": "Kembali"
                    },
                    "aria": {
                        "sortAscending": ": aktifkan urutan kolom ascending",
                        "sortDescending": ": aktifkan urutan kolom descending"
                    }
                },
                scrollY: 400,
                scrollX: true,
                columnDefs: [{
                        "width": "5%",
                        "targets": [3, 5]
                    },
                    {
                        searchPanes: {
                            options: [{
                                    label: 'Ketua',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'KETUA';
                                    }
                                },
                                {
                                    label: 'Wakil Ketua',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'WAKIL KETUA';
                                    }
                                },
                                {
                                    label: 'Wakil Ketua/MR',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'WAKIL KETUA/MR';
                                    }
                                },
                                {
                                    label: 'Panitera',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'PANITERA';
                                    }
                                },
                                {
                                    label: 'Sekretaris',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'SEKRETARIS';
                                    }
                                },
                                {
                                    label: 'Hakim',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'HAKIM';
                                    }
                                },
                                {
                                    label: 'Panmud Hukum',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'PANMUD HUKUM';
                                    }
                                },
                                {
                                    label: 'Panmud Pidana',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'PANMUD PIDANA';
                                    }
                                },
                                {
                                    label: 'Panmud Perdata',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'PANMUD PERDATA';
                                    }
                                },
                                {
                                    label: 'Jurusita/Jurusita Pengganti',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'JURUSITA/JURUSITA PENGGANTI';
                                    }
                                },
                                {
                                    label: 'Panitera Pengganti',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'PANITERA PENGGANTI';
                                    }
                                },
                                {
                                    label: 'Kepegawaian & Ortala',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'KEPEGAWAIAN & ORTALA';
                                    }
                                },
                                {
                                    label: 'Umum Keuangan',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'UMUM KEUANGAN';
                                    }
                                },
                                {
                                    label: 'PTIP',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'PTIP';
                                    }
                                },
                                {
                                    label: 'Koordinator Area',
                                    value: function(rowData, rowIdx) {
                                        return rowData[2] == 'KOORDINATOR AREA';
                                    }
                                },
                            ],
                            combiner: 'and'
                        },
                        targets: [2]
                    }
                ],
                searchPanes: {
                    viewTotal: true,
                    columns: [2]
                },
                select: {
                    style: 'os',
                    selector: 'td:first-child'
                },
                order: [
                    [1, 'asc']
                ],
                dom: 'Plfrtip',

            });
            dt.on('select.dt', () => {
                dt.searchPanes.rebuildPane(0, true);
            });

            dt.on('deselect.dt', () => {
                dt.searchPanes.rebuildPane(0, true);
            });
        });
    </script>
</body>

</html>