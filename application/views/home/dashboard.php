<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>PMAPM PN SLEMAN</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

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
</head>

<body>
  <!-- Spinner Start -->

  <!-- Spinner End -->

  <!-- Topbar Start -->

  <!-- Topbar End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top px-4 px-lg-5 py-lg-0" id="home">
    <a href="<?php echo base_url('home/home') ?>" class="navbar-brand d-flex align-items-center">
      <h1 class="m-0 text-danger">
        <img src="<?php echo base_url() ?>assets/img/logopnsleman.png" style="width: 65px; height:75px;"> Pengadilan Negeri Sleman
      </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-3 py-lg-0 item-center">
        <a href="<?php echo base_url('home/home') ?>" class="nav-item nav-link"><b class="fs-6">Home</b></a>
        <a href="#tentang" class="nav-item nav-link"><b class="fs-6">Tentang APM</b></a>
        <a href="#tujuan" class="nav-item nav-link"><b class="fs-6">Tujuan</b></a>
        <a href="#hubungi" class="nav-item nav-link mr-10"><b class="fs-6">Hubungi Kami</b></a>
        <a href="<?php echo base_url('admin/login') ?>" class="nav-item nav-link mr-10"><b class="fs-6"><button type="button" class="btn btn-success btn-sm" style="border-radius: 6px">Login Admin</button></b></a>

      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100 " src="<?php echo base_url() ?>assets/img/kantor.jpeg" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                  <h4 class="text-light mb-3 animated slideInDown">
                    Selamat Datang Di
                  </h4>
                  <h1 class="display-2 text-light mb-3 animated slideInDown ">
                    Penilaian Mandiri Akreditasi Penjaminan Mutu
                  </h1>
                  <br>
                  <br>
                  <br>
                  <center>
                    <a href="<?php echo base_url('user/laporan') ?>" class="btn btn-primary py-3 px-5" style="border-radius: 10px">
                      Tampilkan LKE
                    </a>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100 " src="<?php echo base_url() ?>assets/img/apel1.jpeg" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                  <h4 class="text-light mb-3 animated slideInDown">
                    Selamat Datang Di
                  </h4>
                  <h1 class="display-2 text-light mb-3 animated slideInDown ">
                    Penilaian Mandiri Akreditasi Penjaminan Mutu
                  </h1>
                  <br>
                  <br>
                  <br>
                  <center>
                    <a href="<?php echo base_url('user/laporan') ?>" class="btn btn-primary py-3 px-5" style="border-radius: 10px">
                      Tampilkan LKE
                    </a>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- About Start -->
  <div class="container-xxl py-5" id="tentang">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
            <img class="position-absolute w-100 h-100" src="<?php echo base_url() ?>assets/img/kantor1.jpeg" alt="Image" style="object-fit: cover" />
            <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
              <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                <h1 class="text-white">46</h1>
                <h2 class="text-white">Tahun</h2>
                <h5 class="text-white mb-0">Telah Berdiri</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Tentang Kami</h6>
              <h1 class="display-6 mb-0">
                ALsbjabfaf aKjabsajf AKJbda
              </h1>
            </div>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Pariatur sint molestias impedit accusantium nihil, dolorum quam
              eius suscipit delectus assumenda, laborum, nulla animi dolorem?
              Natus eum fugiat inventore corrupti. Consectetur!
            </p>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
              Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
              sed stet lorem sit clita duo justo magna dolore erat amet
            </p>
            <div class="border-top mt-4 pt-4">
              <div class="row g-4">
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Ontime at services</h6>
                </div>
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">24/7 hours services</h6>
                </div>
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Verified professionals</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Facts Start -->

  <!-- Facts End -->

  <!-- Features Start -->
  <div class="container-xxl py-5" id="tujuan">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4 mb-5">
            <h6 class="text-body text-uppercase mb-2">Tujuan</h6>
            <h1 class="display-6 mb-0">s
              Aksaboasifo ASKdlsndai
            </h1>
          </div>
          <p class="mb-5">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Praesentium dolores necessitatibus tempore, obcaecati at quidem
            architecto non cumque molestiae sit magnam alias eos quo animi.
            Id eum harum eius quis?
          </p>
          <div class="row gy-5 gx-4">
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
              <div class="d-flex align-items-center mb-3">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                <h6 class="mb-0">Large number of services provided</h6>
              </div>
              <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
              <div class="d-flex align-items-center mb-3">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                <h6 class="mb-0">25+ years of professional experience</h6>
              </div>
              <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
              <div class="d-flex align-items-center mb-3">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                <h6 class="mb-0">A large number of grateful customers</h6>
              </div>
              <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
              <div class="d-flex align-items-center mb-3">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                <h6 class="mb-0">Always reliable and affordable prices</h6>
              </div>
              <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
            <img class="position-absolute w-100 h-100" src="<?php echo base_url() ?>assets/img/apel1.jpg" alt="" style="object-fit: cover" />
            <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
              <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                <h1 class="text-white">46</h1>
                <h2 class="text-white">Tahun</h2>
                <h5 class="text-white mb-0">Berpengalaman</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Features End -->

  <!-- Service Start -->

  <!-- Service End -->

  <!-- Appointment Start -->

  <!-- Appointment End -->

  <!-- Team Start -->

  <!-- Team End -->

  <!-- Testimonial Start -->

  <!-- Testimonial End -->

  <!-- Footer Start -->
  <div id="hubungi" class="container-fluid bg-success bg-gradient footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h1 class="text-white mb-4">
            <img src="<?php echo base_url() ?>assets/img/logopnsleman.png" style="width: 65px; height:75px;">Pengadilan Negeri Sleman
          </h1>
          <div class="d-flex pt-2">
            <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-youtube"></i></a>
            <a class="btn btn-square btn-outline-primary me-0" href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">

        </div>
        <div class="col-lg-3 col-md-6">
        <br>
          <br>
          <br>
          <br>
          <br>
          <h4 class="text-light mb-4">Address</h4>
          <p class="text-white">
            <i class="fa fa-map-marker-alt me-3"></i>Pengadilan Negeri Sleman

            Jln. KRT. Pringgodiningrat No 1, Beran Tridadi

            Kode Pos 55511
          </p>
          <p class="text-white"><i class="fa fa-phone-alt me-3"></i>(0274)-868401</p>
          <p class="text-white"><i class="fa fa-envelope me-3"></i>pnsleman@yahoo.co.id</p>
        </div>
        
      </div>
    </div>
    <div class="container-fluid copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a href="#">APM PN Sleman</a>, All Right Reserved.
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
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top " style="border-radius: 30px"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assetslib/wow/wow.min.js"></script>
  <script src="<?php echo base_url() ?>assetslib/easing/easing.min.js"></script>
  <script src="<?php echo base_url() ?>assetslib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>assetslib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="<?php echo base_url() ?>assetsjs/main.js"></script>
</body>

</html>