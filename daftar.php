<?php
require "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasi_password = $_POST['konfirmasi_password'];

    if ($password != $konfirmasi_password) {
        echo "<script>alert('Password dan Konfirmasi password tidak cocok!')</script>";
    } else {
        $query = query("INSERT INTO akun SET email='$email',password='$password'");
        if ($query !== false) {
            echo "<script>alert('Pembuatan akun berhasil!');</script>";
            header('location: masuk.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="./assets/img/favicon.svg" type="image/svg+xml" />
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .login-container {
            min-width: 500px;
            max-width: 500px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .masuk-btn {
            background-color: #1bbca3;
            border: none;
            padding: 12px;
            width: 100%;
            font-weight: 500;
            color: white !important;
        }

        .masuk-btn:hover {
            background-color: #179e8a;
            color: white !important;
        }

        .forgot-password {
            color: #757575;
            text-decoration: none;
            font-size: 14px;
        }

        .signup-text {
            color: #757575;
            font-size: 14px;
        }

        .signup-link {
            color: #0d6efd;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="bg-light">
        <div class="d-flex flex-column align-items-center w-100 mx-auto p-4 justify-content-center mt-4" style="background: white;">
            <img src="theme/images/MUHA-2.png" alt="logo" style="max-width: 200px; width: 100%;" />
        </div>
    </div>

    <div class="container">
        <div class="login-container">
            <h2 class="text-center mb-4">Daftar</h2>
            <p class="signup-text text-center mb-4">
                Sudah punya akun? <a href="./masuk.php" class="signup-link">Masuk sekarang</a>
            </p>

            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda" required>
                    <div class="form-text">Minimal berisi 8 karakter, mengandung huruf kecil, huruf besar dan angka</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password Anda" required>
                </div>

                <div class="mb-3 text-end">
                    <div class="form-text" style="text-align: center; font-size: small;">Dengan mengklik tombol dibawah ini, saya setuju dengan Kebijakan Privasi serta Syarat & Ketentuan</div>
                </div>

                <button type="submit" class="btn masuk-btn text-white">Daftar</button>
            </form>
        </div>



        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></>
        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>