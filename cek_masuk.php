<?php
    session_start();

    include 'koneksi.php';

    $username = $_POST['username_admin'];
    $password = $_POST['password_admin'];
    
    // mengecek username dan password pada tabel user pengguna dalam db_bandha
    $sql= mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username_admin='$username' and password_admin='$password'");

    $cek= mysqli_num_rows($sql);

    if ($cek > 0) {
        $_SESSION['username_admin'] = $username;
        $_SESSION['status'] = "login";
        echo "<script> alert('Selamat Datang Admin Bandha') </script>";
        echo "<script> location='admin.php' </script>";
    }
    else {
        echo "<script> alert('Username atau Password yang Anda Masukan Salah') </script>";
        echo "<script> location='masuk.php' </script>";
    }
?>