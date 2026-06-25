<?php 
include 'koneksi.php'; 

// Mengambil ID berita dari URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    
    // Query untuk mengambil data berita berdasarkan ID
    $query = mysqli_query($koneksi, "SELECT * FROM berita WHERE id = '$id'");
    $row = mysqli_fetch_assoc($query);
    
    // Jika data tidak ditemukan, alihkan ke beranda
    if (!$row) {
        header("Location: index.php");
        exit;
    }
    
    // Format tanggal Indonesia (YYYY-MM-DD -> DD-MM-YYYY)
    $tanggal_id = date('d-m-Y', strtotime($row['tanggal']));
} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?php echo $row['judul']; ?> - Desa Baosan Lor</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar-custom {
            background-color: #212529;
            padding: 1rem 0;
        }
        .news-content {
            line-height: 1.8;
            font-family: 'Roboto Slab', serif;
            font-size: 1.1rem;
            white-space: pre-line; /* Menjaga spasi paragraf sesuai inputan admin */
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold" href="index.php" style="color: #ffc800;">
                <i class="fas fa-arrow-left me-2"></i>Kembali ke Beranda
            </a>
        </div>
    </nav>

    <div class="container my-5 pt-4">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="mb-3 text-muted small text-uppercase fw-bold">
                    <i class="far fa-calendar-alt me-1"></i> Dipublikasikan pada: <?php echo $tanggal_id; ?>
                </div>
                
                <h1 class="fw-bold mb-4 text-dark text-uppercase" style="line-height: 1.3;">
                    <?php echo $row['judul']; ?>
                </h1>
                
                <hr class="mb-4">

                <div class="mb-4 text-center">
                    <img class="img-fluid rounded shadow-sm w-100" src="assets/img/news/<?php echo $row['gambar']; ?>" alt="<?php echo $row['judul']; ?>" style="max-height: 500px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/900x500?text=Foto+Berita'" />
                </div>

                <div class="news-content text-secondary px-2">
                    <?php echo $row['isi']; ?>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer py-4 bg-white border-top mt-5">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-12 text-muted small">
                    Copyright &copy; Website Resmi Desa Baosan Lor 2026
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>