<?php
session_start();

// Jika admin sudah login sebelumnya, langsung lempar ke dashboard
if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // MENYANTUMKAN USERNAME & PASSWORD LANGSUNG DI KODE
    // Silakan ganti 'admin' dan 'admin123' sesuai keinginanmu
    if ($username === 'admin' && $password === 'admin123') {
        // Set session login sukses
        $_SESSION['login'] = true;
        $_SESSION['user']  = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        // Jika salah, munculkan notifikasi error
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login Admin - Desa Baosan Lor</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        body {
            background-color: #212529; /* Gelap senada dengan tema header/navbar */
            font-family: 'Montserrat', sans-serif;
        }
        .card-login {
            margin-top: 10%;
            border: none;
            border-radius: 0.5rem;
        }
        .btn-primary {
            background-color: #ffc800;
            border-color: #ffc800;
            color: #212529;
            font-weight: 700;
        }
        .btn-primary:hover {
            background-color: #d9aa00;
            border-color: #d9aa00;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card card-login shadow p-4 p-md-5 bg-white">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold text-uppercase text-dark mb-1">Login Admin</h3>
                        <span class="text-muted small">Desa Baosan Lor</span>
                    </div>

                    <?php if (isset($error)) : ?>
                        <div class="alert alert-danger text-center small py-2" role="alert">
                            Username atau Password salah!
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label small fw-bold text-uppercase text-muted">Username</label>
                            <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Masukkan username..." required />
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label small fw-bold text-uppercase text-muted">Password</label>
                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Masukkan password..." required />
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" name="login" class="btn btn-primary btn-lg text-uppercase">Masuk</button>
                            <a href="index.php" class="btn btn-light btn-sm text-uppercase text-muted mt-2">Kembali ke Beranda</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>