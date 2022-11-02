<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap">
    <style>
        .container {
            display: flex;
            height: 100%;
            align-items: center;
            justify-content: center;

        }

        .b {
            background-image: url('../assets/img/kantor.jpeg');

        }

        .login-form {
            height: 520px;
            width: 430px;
            padding: 0 35px;
            background-color: white;
            border: none;
        }
    </style>
    <title>Login Admin</title>
</head>

<body class="b">
    <div class="container-fluid">
        <div class="container mt-5">
            <div class="card login-form mt-5">
                <div class="card-body mt-5">
                <?php echo $this->session->flashdata('warning') ?>
                    <h2 class="card-title">Login Admin</h2>
                    <h7 class="card-subtitle text-muted">Masukkan username dan password</h7>

                    
                    <?php echo $this->session->flashdata('message') ?>
                    <?php echo $this->session->flashdata('peringatan') ?>
                    <?php echo $this->session->flashdata('failed') ?>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <form method="POST" action="<?php echo base_url('admin/login/login_proses') ?>">
                        <div class="mb-3">
                            <label class="form-label">Username*</label>
                            <input type="text" class="form-control" id="username" name="username">
                            <?php echo form_error('username', '<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password*</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>