<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo LuarSekolah</title>
    <link rel="stylesheet" href="../css/promo.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>

<nav>
    <div class="nav-container">
    <img src="./img/logo.png" alt="Logo" class="nav-logo">
        <ul class="nav-menu">
            <li><a href="#programs">Program</a></li>
            <li><a href="#benefitsmagang">Why LuarSekolah</a></li>
            <li><a href="page/komunitas.php">Community</a></li>
            <li><a href="#alumni">About US</a></li>
            <?php if (isset($_SESSION['username'])):?>
                    <li><span>Hello, <?php echo $_SESSION['nama']; ?></span></li>
                </ul>
                <a href="../config/logout.php" class="btn-register">
                    Logout <span class="arrow">→</span>
                </a>
            <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                </ul>
                <a href="registrasi.php" class="btn-register">
                    Register <span class="arrow">→</span>
                </a>
            <?php endif; ?>
    </div>            
</nav>

<section class="section-1">
  <div class="section-1-content">
    <div class="headline">
      <h1>Promo Menarik dan Eksklusif Dari Luarsekolah</h1>
    </div>
    <div class="headline-description">
      <p>Dapatkan hadiah menarik lainnya dengan mengikuti Pelatihan dari Luarsekolah.</p>   
      </div>
</section>

<section class="section-2">
  <div class="section-2-content">
    <div class="section-2-title">
      <h1>Promo terbaru</h1>
      <p>Belajar makin asik dengan berbagai promo menarik</p>
    </div>
    <div class="section-2-image">
      <div class="image-card">
        <div class="title-border" id="non-prakerja">
          <p>Non Prakerja</p>
        </div>  
        <img src="../images/promo_image1.png" alt="promo-1">
      </div>
      <div class="image-card">
        <div class="title-border" id="prakerja">
          <p>Prakerja</p>
        </div>  
        <img src="../images/promo_image2.png" alt="promo-2">
      </div>
    </div>
  </div>
</section>
  
<section class="promo-slider">
  <div class="slider-header">
    <div class="header-left">
        <h2>Promo menarik lainnya!</h2>
        <p>Belajar makin asik dengan berbagai promo menarik</p>
    </div>
    <a href="#" class="see-all">Lihat Semua ></a>
</div>

  <div class="slider-wrapper">
      <button class="slider-btn prev-btn">&lt;</button>
      <div class="slider-container">
          <div class="slider">
              <div class="card">
                  <img src="../images/promo_image2.png" alt="Promo 1" class="card-img">
                  <div class="card-content">
                      <p>Dapatin monisi jutaan rupiah & merchandise eksklusif!</p>
                  </div>
              </div>
              <div class="card">
                  <img src="../images/card3.png" alt="Promo 2" class="card-img">
                  <div class="card-content">
                      <p>Selesaikan misi koinLS & dapatkan tunjangan hingga 800rb</p>
                  </div>
              </div>
              <div class="card">
                  <img src="../images/card4.png" alt="Promo 3" class="card-img">
                  <div class="card-content">
                      <p>Gunakan kode promo untuk project-based internship</p>
                  </div>
              </div>
              <div class="card">
                  <img src="../images/card5.png" alt="Promo 4" class="card-img">
                  <div class="card-content">
                      <p>Gunakan kode promo untuk project-based internship</p>
                  </div>
              </div>
              <div class="card">
                  <img src="../images/card6.png" alt="Promo 5" class="card-img">
                  <div class="card-content">
                      <p>Gunakan kode promo untuk project-based internship</p>
                  </div>
              </div>
              <div class="card">
                  <img src="../images/card7.png" alt="Promo 6" class="card-img">
                  <div class="card-content">
                      <p>Gunakan kode promo untuk project-based internship</p>
                  </div>
              </div>
              <div class="card">
                  <img src="../images/card8.png" alt="Promo 7" class="card-img">
                  <div class="card-content">
                      <p>Gunakan kode promo untuk project-based internship</p>
                  </div>
              </div>
              <div class="card">
                  <img src="../images/card9.png" alt="Promo 8" class="card-img">
                  <div class="card-content">
                      <p>Gunakan kode promo untuk project-based internship</p>
                  </div>
              </div>
              <div class="card">
                  <img src="../images/card10.png" alt="Promo 9" class="card-img">
                  <div class="card-content">
                      <p>Gunakan kode promo untuk project-based internship</p>
                  </div>
              </div>
              <div class="card">
                  <img src="../images/card11.png" alt="Promo 10" class="card-img">
                  <div class="card-content">
                      <p>Gunakan kode promo untuk project-based internship</p>
                  </div>
              </div>
              <div class="card">
                  <img src="../images/card12.png" alt="Promo 11" class="card-img">
                  <div class="card-content">
                      <p>Gunakan kode promo untuk project-based internship</p>
                  </div>
              </div>
              <div class="card">
                  <img src="../images/card13.png" alt="Promo 12" class="card-img">
                  <div class="card-content">
                      <p>Gunakan kode promo untuk project-based internship</p>
                  </div>
              </div>
              <div class="card">
                  <img src="../images/card14.png" alt="Promo 13" class="card-img">
                  <div class="card-content">
                      <p>Gunakan kode promo untuk project-based internship</p>
                  </div>
              </div>
          </div>
      </div>
      <button class="slider-btn next-btn">&gt;</button>
  </div>
  <div class="dots"></div>
</section>

<footer>
  <div class="footer-container">
      <!-- Bagian kiri: Logo dan deskripsi -->
      <div class="footer-left">
          <img src="./img/logo.png" alt="Luar Sekolah Logo" class="footer-logo">
          <p>Luar Sekolah merupakan wadah belajar dan mengajar pelajaran non-formal / alternatif dengan cara menyediakan kelas pengajaran dalam bentuk online dan offline.</p>
      </div>

      <!-- Bagian tengah: Link utama -->
      <div class="footer-center">
          <ul>
              <li><a href="https://www.luarsekolah.com/tentang-kami">Tentang Kami</a></li>
              <li><a href="https://www.luarsekolah.com/article">Blog</a></li>
              <li><a href="page/promo.php">Promo</a></li>
              <li><a href="https://www.luarsekolah.com/bantuan">Bantuan</a></li>
              <li><a href="#">Komunitas</a></li>
          </ul>
      </div>

      <!-- Bagian kanan: Link tambahan -->
      <div class="footer-right">
          <ul>
              <li><a href="https://magang.luarsekolah.com/">Luar Sekolah Magang+</a></li>
              <li><a href="https://www.luarsekolah.com/#">Ajukan Penawaran</a></li>
              <li><a href="https://www.luarsekolah.com/pages#terms-of-use">Syarat & Ketentuan</a></li>
              <li><a href="https://www.luarsekolah.com/pages#privacy-policy">Kebijakan Privasi</a></li>
          </ul>

          <a href="https://play.google.com/store/apps/details?id=com.luarsekolah.mobile" target="_blank"> <img src="https://file.luarsekolah.com/assets/images/google-play-badge.png" style="width:200px" alt="imgplaygplay" loading="lazy"></a>
      </div>
  </div>
</footer>

<script src="../js/promo.js"></script>
</body>
</html>