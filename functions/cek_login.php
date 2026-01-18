<?php

session_start();

include 'koneksi.php';

if (isset($_POST['login'])) {
    // Melakukan sanitasi input pengguna
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $password = md5($password); // Enkripsi password

    // Menggunakan prepared statement untuk menghindari SQL Injection
    $sql_petugas = $koneksi->prepare("SELECT * FROM petugas WHERE username = ? AND password = ?");
    $sql_petugas->bind_param("ss", $username, $password);
    $sql_petugas->execute();
    $result = $sql_petugas->get_result();
    $row_petugas = $result->num_rows;
    $petugas = $result->fetch_array();

    if ($row_petugas > 0) {
        $_SESSION['id_petugas'] = $petugas['id_petugas'];
        $_SESSION['username'] = $petugas['username'];
        $_SESSION['nama_petugas'] = $petugas['nama_petugas'];
        $_SESSION['level'] = $petugas['level'];

        if ($_SESSION['level'] == 'admin') {
            echo "<script>
                    alert('Login berhasil. Selamat datang :)');
                    location.replace('../petugas/admin.php');
                </script>";
        } else {
            echo "<script>
                    alert('Maaf level petugas tidak diketahui');
                    location.replace('../login.php?error=Level%20petugas%20tidak%20diketahui');
                </script>";
        }
    } else {
        echo "<script>
                alert('Maaf petugas tidak diketahui');
                location.replace('../login.php?error=Petugas%20tidak%20diketahui');
            </script>";
    }
}

if (isset($_POST['admin_register'])) {
    // Melakukan sanitasi input pengguna
    $nama_petugas = htmlspecialchars($_POST['nama_petugas']);
    $username = htmlspecialchars($_POST['username']);
    $password = md5($_POST['password']);
    $ulangipassword = md5($_POST['ulangipassword']);
    $level = htmlspecialchars($_POST['level']);

    // Memastikan password yang dimasukkan sesuai
    if ($password != $ulangipassword) {
        echo "<script>
            alert('Password tidak sama! Silakan masukkan ulang');
        </script>";
        header('Location: ../petugas/admin.php?page=registrasi&nama=' . urlencode($nama_petugas) . '&username=' . urlencode($username));
    } else {
        // Menggunakan prepared statement untuk mencegah SQL Injection
        $sql_login = $koneksi->prepare("SELECT * FROM petugas WHERE username = ?");
        $sql_login->bind_param("s", $username);
        $sql_login->execute();
        $result = $sql_login->get_result();
        $jumlah_petugas = $result->num_rows;

        if ($jumlah_petugas > 0) {
            echo "<script>
            alert('Username telah terdaftar sebelumnya! Cari username lain');
        </script>";
            header('Location: ../petugas/admin.php?page=registrasi&nama=' . urlencode($nama_petugas) . '&username=' . urlencode($username));
        } else {
            // Menggunakan prepared statement untuk mencegah SQL Injection
            $query_daftar = $koneksi->prepare("INSERT INTO petugas (username, nama_petugas, level, password) VALUES (?, ?, ?, ?)");
            $query_daftar->bind_param("ssss", $username, $nama_petugas, $level, $password);

            if ($query_daftar->execute()) {
                echo "<script>
                    alert('Akun berhasil terdaftar!');
                    location.replace('../petugas/admin.php?page=registrasi');
                </script>";
            } else {
                echo "<script>
                    alert('Akun gagal terdaftar!');
                    location.replace('../petugas/admin.php?page=registrasi');
                </script>";
            }
        }
    }
}
