<?php
$cust_nama = htmlspecialchars(@$_GET['nama']);
$cust_username = htmlspecialchars(@$_GET['username']);

// Validasi agar $cust_username hanya angka
if (!is_numeric($cust_username)) {
    $cust_username = ''; // Kosongkan jika tidak valid
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Hebat | Register</title>

    <link rel="shortcut icon" type="image/x-icon" href="bahan/logo.png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="template2/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="template2/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="template2/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../index.php"><b>Hotel Hebat</b></a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Daftar untuk akses dashboard </p>

                <form action="functions/cek_login.php" method="post">
                    <div class="input-group mb-3">
                        <input
                            type="text"
                            class="form-control"
                            required
                            name="nama_petugas"
                            minlength="5"
                            placeholder="Nama lengkap">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-users"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="username" required class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" minlength="5" class="form-control" required placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="ulangipassword" minlength="5" class="form-control" placeholder="Konfirmasi password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select name="level" id="level" class="form-control" required>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" required id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <a href="index.php" class="btn btn-block btn-secondary">
                                Home
                            </a>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="text-center mb-3 mt-3">
                        <button type="submit" name="admin_register" class="btn btn-primary btn-block">Register</button>
                    </div>
                </form>

                <div class="text-center mb-3">
                    <p>Sudah punya akun ?</p>
                    <a href="login.php" class="btn btn-block btn-success">
                        Login
                    </a>
                </div>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="template2/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="template2/dist/js/adminlte.min.js"></script>
</body>

</html>