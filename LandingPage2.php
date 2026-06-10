<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bengkel GANDA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MRCgAyrKxE4nD+U0t7+vo3S/Iu6u9xA6fvZm11TF1c1MDV0NJLxDcELYQ0iW9Vfq" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
    <link rel="stylesheet" href="../css/LandingPage.css">
    
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="dashboard.php"><i class="fas fa-book"></i> Bengkel GANDA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php#daftar-buku">Daftar Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php.html#peminjaman">Peminjaman</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Book Detail Hero -->
    <section class="book-detail-hero">
      <div class="container text-center">
      </div>
    </section>

    <!-- Book Card -->
    <section class="container">
      <div class="book-card">
        <div class="row">
          <div class="col-md-4">
            <div class="book-image">
              <img src="GantiOLi.png" alt="Ganti Oli" class="img-fluid">
            </div>
          </div>
          <div class="col-md-8">
            <div class="book-info">
              <h2 class="book-title">Ganti Oli</h2>
              <span class="book-genre">Automotive</span>

              <div class="book-description">
                 Kami akan mengganti oli lama dengan oli baru yang berkualitas sesuai spesifikasi kendaraan untuk menjaga performa mesin tetap optimal. Penggantian oli dilakukan secara teliti agar pelumasan mesin bekerja dengan baik, mengurangi gesekan antar komponen, menjaga suhu mesin tetap stabil, serta membantu memperpanjang usia pakai mesin kendaraan. Dengan oli yang baru, mesin dapat bekerja lebih halus, efisien, dan nyaman saat digunakan.
              </div>
                </div>

              <div class="book-details">
                <div class="detail-item">
                  <span class="detail-label">Garansi:</span>
                  <span>7 Bulan</span>
                </div>
                </div>
                <div class="detail-item">
                  <span class="detail-label">Status:</span>
                  <span class="text-success">Tersedia</span>
                </div>
              </div>

              <button class="btn-borrow" onclick="window.location.href='https://wa.me/6285956396383'">Hubungi</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Related Books -->
  <section id="daftar-buku">
      <div class="container">
        <div class="section-title">
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="book-card">
              <div class="book-image">
                <img src="GantiOLi.png" alt="Ganti Oli" class="img-fluid">          
              </div>
              <div class="book-info">
                <p class="book-title">Ganti Oli</p>
                <p class="book-author"> Oli lama akan dikuras dan diganti dengan oli baru berkualitas sesuai spesifikasi kendaraan untuk menjaga performa mesin tetap optimal dan memperpanjang usia mesin.</p>
              </div>
            </div>
          </div>

         <div class="col-md-6 col-lg-4">
            <div class="book-card">
              <div class="book-image">
                <img src="RepairBody.png" alt="Repair Body" class="img-fluid">
              </div>
              <div class="book-info">
                <p class="book-title">Repair Body</p>
                <p class="book-author">Cat mobil akan diperbarui atau diganti sesuai warna dan permintaan pelanggan untuk mengembalikan tampilan kendaraan agar terlihat lebih bersih, menarik, dan seperti baru kembali.</p>
              </div>
            </div>
          </div>

           <div class="col-md-6 col-lg-4">
            <div class="book-card">
              <div class="book-image">
                <img src="Las.png" alt="Las" class="img-fluid">
              </div>
              <div class="book-info">
                <p class="book-title">Las</p>
                <p class="book-author">Las mobil dilakukan untuk memperbaiki bagian body atau rangka kendaraan yang retak, patah, atau mengalami kerusakan agar kembali kuat, kokoh, dan aman digunakan.</p>
                
              </div>
            </div>
          </div>

        </div>
      </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
      <div class="container">
        <p class="mb-0">&copy; 2026 Bengkel GANDA. Mobil maintenance services.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-52abh6x9IpQm3/5qJyd/Pq10VsJed878u4pU02Q3XDx4EhKhFZ2yiInGCK8Ncb8F" crossorigin="anonymous"></script>
  </body>
</html>
