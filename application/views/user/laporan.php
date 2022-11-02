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
  <nav class="navbar navbar-expand-lg sticky-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url() ?>assets/img/logopnsleman.png" style="width: 65px; height:75px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="<?php echo base_url('home/home') ?>">Home</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
  <main>
    <div class="container px-4">
      <h1 class="mt-4">Tabel LKE</h1>
      <!-- Example single danger button -->

    </div>
    <div class="container px-4">

      <table class="table table-bordered rounded-3 table-striped bg-success p-2 text-dark bg-opacity-25 mt-4 display nowrap" id="example">
        <thead>
          <tr>
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
                <center><?php echo $no++ ?></center>
              </td>
              <td><?php echo $c->area ?></td>
              <td><?php echo $c->penilaian ?></td>
              <td><?php echo $c->area_zi ?></td>
              <td><?php echo $c->a ?></td>
              <td><a href="<?php echo $c->file ?> ">Link File</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
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

  </main>
  <div id="hubungi" class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    
    <div class="container-fluid copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a href="#">PN Sleman</a>, All Right Reserved.
          </div>
          <div class="col-md-6 text-center text-md-end">
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
            <br />Distributed By:
            <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
          </div>
        </div>
      </div>
    </div>
  </div>
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
                    return rowData[1] == 'KETUA';
                  }
                },
                {
                  label: 'Wakil Ketua',
                  value: function(rowData, rowIdx) {
                    return rowData[1] == 'WAKIL KETUA';
                  }
                },
                {
                  label: 'Wakil Ketua/MR',
                  value: function(rowData, rowIdx) {
                    return rowData[1] == 'WAKIL KETUA/MR';
                  }
                },
                {
                  label: 'Panitera',
                  value: function(rowData, rowIdx) {
                    return rowData[1] == 'PANITERA';
                  }
                },
                {
                  label: 'Sekretaris',
                  value: function(rowData, rowIdx) {
                    return rowData[1] == 'SEKRETARIS';
                  }
                },
                {
                  label: 'Hakim',
                  value: function(rowData, rowIdx) {
                    return rowData[1] == 'HAKIM';
                  }
                },
                {
                  label: 'Panmud Hukum',
                  value: function(rowData, rowIdx) {
                    return rowData[1] == 'PANMUD HUKUM';
                  }
                },
                {
                  label: 'Panmud Pidana',
                  value: function(rowData, rowIdx) {
                    return rowData[1] == 'PANMUD PIDANA';
                  }
                },
                {
                  label: 'Panmud Perdata',
                  value: function(rowData, rowIdx) {
                    return rowData[1] == 'PANMUD PERDATA';
                  }
                },
                {
                  label: 'Jurusita/Jurusita Pengganti',
                  value: function(rowData, rowIdx) {
                    return rowData[1] == 'JURUSITA/JURUSITA PENGGANTI';
                  }
                },
                {
                  label: 'Panitera Pengganti',
                  value: function(rowData, rowIdx) {
                    return rowData[1] == 'PANITERA PENGGANTI';
                  }
                },
                {
                  label: 'Kepegawaian & Ortala',
                  value: function(rowData, rowIdx) {
                    return rowData[1] == 'KEPEGAWAIAN & ORTALA';
                  }
                },
                {
                  label: 'Umum Keuangan',
                  value: function(rowData, rowIdx) {
                    return rowData[1] == 'UMUM KEUANGAN';
                  }
                },
                {
                  label: 'PTIP',
                  value: function(rowData, rowIdx) {
                    return rowData[1] == 'PTIP';
                  }
                },
                {
                  label: 'Koordinator Area',
                  value: function(rowData, rowIdx) {
                    return rowData[1] == 'KOORDINATOR AREA';
                  }
                },
              ],
              combiner: 'and'
            },
            targets: [1]
          }
        ],
        searchPanes: {
          viewTotal: true,
          columns: [1]
        },
        select: {
          style: 'os',
          selector: 'td:first-child'
        },
        order: [
          [0, 'asc']
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