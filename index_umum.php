<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Salon Shopia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
    position: relative;
    background: url('assets/shopia-bg.jpg') center center / cover no-repeat;
    color: white;
    padding: 120px 20px;
    text-align: center;
    overflow: hidden;
    min-height: 220px;
    }
    .hero::before {
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.3); /* gelap transparan */
    z-index: 1;
    }
    .hero .container {
    position: relative;
    z-index: 2; /* agar konten muncul di atas overlay */
    min-height: 220px;
    }
    .btn-login {
      background-color: #ff69b4;
      border: none;
      color: white;
    }
    .btn-login:hover {
      background-color: #e754a3;
    }
    .section-img {
      border-radius: 10px;
      max-width: 100%;
      height: auto;
    }
    .map-responsive {
      overflow: hidden;
      padding-bottom: 40%;
      position: relative;
      height: 0;
    }
    .map-responsive iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Salon Shopia</a>
      <div class="ms-auto">
        <a href="pages/login.php" class="btn btn-login">Login</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container" style="position: relative; z-index: 2; min-height: 220px;">
      <!-- Hero kosong, hanya background -->
    </div>
  </section>

  <!-- Tentang Kami -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="fw-bold">Tentang Salon Shopia</h2>
        <p class="text-muted">Tempat perawatan rambut & kecantikan dengan layanan unggulan dan kemudahan sistem online.</p>
      </div>
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="assets/foto_salon.jpg" alt="Foto Salon" class="section-img shadow-sm">
        </div>
        <div class="col-md-6">
          <p>Salon Shopia adalah tempat perawatan modern yang memadukan layanan profesional dan sistem digital. Pelanggan dapat memesan layanan secara online, mendapatkan poin loyalitas, dan menerima rekomendasi perawatan personal.</p>
          <ul>
            <li>✂️ Potong & styling rambut</li>
            <li>💆‍♀️ Perawatan wajah & tubuh</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Kontak -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4 fw-bold">Kontak Kami</h2>
      <div class="row text-center">
        <div class="col-md-4">
          <p>📍 <strong>Alamat:</strong><br> Jl. Cibadak, Sukamulya, Kec. Garawangi, Kabupaten Kuningan, Jawa Barat 45571</p>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <p>☎️ <strong>Telepon:</strong><br> 0813-2012-9629</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Google Maps -->
  <section class="pb-5">
    <div class="container">
      <h2 class="text-center fw-bold mb-4">Temukan Kami di Google Maps</h2>
      <div class="map-responsive rounded shadow-sm">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15840.374649285606!2d108.53294649776662!3d-6.998250788045962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f13beefea5125%3A0xb994f3395960a7b8!2sShopia%20Salon!5e0!3m2!1sid!2sid!4v1746101783672!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
