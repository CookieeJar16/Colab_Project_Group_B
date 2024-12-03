<?php
    session_start();
    include'../config/config.php';

    $rating = isset($_GET['rating']) ? (int)$_GET['rating'] : 5;

    $stmt = $pdo->prepare("SELECT name, rating, message, okupasi FROM reviews WHERE rating = :rating ORDER BY create_at DESC LIMIT 6");
    $stmt->bindParam(':rating', $rating, PDO::PARAM_INT);
    $stmt->execute();
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (isset($_GET['message'])) {
        echo "<p>" . htmlspecialchars($_GET['message']) . "</p>";
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas LuarSekolah</title>
    <link rel="stylesheet" href="../css/styles_komunitas.css">
    <link rel="stylesheet" href="../css/komunitas_responsive.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>

<nav>
    <div class="nav-container">
    <img src="../images/logo.png" alt="Logo" class="nav-logo">
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
        <h1>Jadilah bagian dari komunitas kami!</h1>
      </div>
      <div class="headline-description">
        <p>Tempat bagi SobatLS mendalami Luarsekolah, berinteraksi, dan berdiskusi. Mari bersama memberdayakan dan menciptakan perubahan positif. #Sampaijadibisa</p>
      </div>
      <button>Gabung Sekarang</button>
    </div>
    <div class="section-1-image">
      <img src="../images/headline_img.png" alt="headline_img">
    </div>
  </section>

  <section class="section-2">
    <div class="stats-container">
      <div class="stat">
          <h1>14+</h1>
          <p>Total Program</p>
      </div>
      <div class="stat">
          <h1>2000+</h1>
          <p>Total Alumni</p>
      </div>
      <div class="stat">
          <h1>180+</h1>
          <p>Hiring Partners</p>
      </div>
      <div class="stat">
          <h1>200+</h1>
          <p>Corporate Partners</p>
      </div>
    </div>
  </section>

  <section class="section-3">
    <div class="container">
      <div class="left-section">
        <h1>
        Benefit Bergabung di Komunitas Luarsekolah
        </h1>
        <p>
          Ketahui lebih banyak tentang
          <a href="#">komunitas</a>
        </p>
      </div>
      <div class="right-section">
      <ul>
        <li>
          <i class="fas fa-check-circle"></i>
          Ruang Informasi dan Diskusi Interaktif
        </li>
        <li>
          <i class="fas fa-check-circle"></i>
          Ruang Bersosialisasi dan Menambah Relasi
        </li>
        <li>
          <i class="fas fa-check-circle"></i>
          Ruang Kolaborasi dan Partisipasi
        </li>
        <li>
          <i class="fas fa-check-circle"></i>
          Ruang Kolaborasi dan Partisipasi
        </li>
      </ul>
      </div>
    </div>
    <div class="images-section">
      <img src="../images/image1.png" alt="placeholder" id="image1">
      <img src="../images/image2.png" alt="placeholder" id="image2">
      <img src="../images/image3.png" alt="placeholder" id="image3">
      <img src="../images/image4.png" alt="placeholder" id="image4">
    </div>
  </section>

  <section class="section-4">
  <div class="review-container">
        <h2>Cerita Alumni, Inspirasi Kami</h2>
        <p class="paragraf">Kami Sangat Terinspirasi oleh dukungan luar biasa dari Komunitas LuarSekolah yang hebat dan kreatif dan memotivasi kami setiap hari. ingin menjadi bagian dari kami?</p>
        <div id="star-container">
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <span class="star" data-rating="<?php echo $i; ?>"><?php echo "&#9733;"; ?></span>
            <?php endfor; ?>
        </div>

        <h3 align="center">Ulasan untuk Rating <?php echo htmlspecialchars($rating); ?> Bintang</h3>
        <div class="review-box">
            <div class="review-up">
                <?php
                if(count($reviews) > 0){
                    for ($i = 0; $i < 3; $i++) {
                        if (isset($reviews[$i])) {
                            echo '<div class="review">';
                            echo '<div class="review-stars">' . str_repeat('&#9733;', $reviews[$i]['rating']) . '</div>';
                            echo '<div class="review-message">' . htmlspecialchars($reviews[$i]['message']) . '</div>';
                            echo '<div class="review-div"><strong>' . htmlspecialchars($reviews[$i]['name']) . '</strong></div>';
                            echo '<div class="reviewer-name">' . htmlspecialchars($reviews[$i]['okupasi']) . '</div>';
                            echo '</div>';
                        }
                    }
                }else{
                    echo '<p>Tidak ada ulasan untuk rating ini.</p>';
                }
                ?>
            </div>
            <div class="review-bottom">
                <?php
                    for ($i = 3; $i < 6; $i++) {
                        if (isset($reviews[$i])) {
                            echo '<div class="review">';
                            echo '<div class="review-stars">' . str_repeat('&#9733;', $reviews[$i]['rating']) . '</div>';
                            echo '<div class="review-message">' . htmlspecialchars($reviews[$i]['message']) . '</div>';
                            echo '<div class="review-div"><strong>' . htmlspecialchars($reviews[$i]['name']) . '</strong></div>';
                            echo '<div class="reviewer-name">' . htmlspecialchars($reviews[$i]['okupasi']) . '</div>';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>
        <!-- <div class="rating-form">
            <h3>Tambah Ulasan</h3>
            <form action="submit.php" method="POST">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>

                <label for="okupasi">Okupasi:</label>
                <input type="text" id="okupasi" name="okupasi" required>

                <label for="rating">Rating (1-5):</label>
                <select id="rating" name="rating" required>
                    <option value="5">5 - ★★★★★</option>
                    <option value="4">4 - ★★★★☆</option>
                    <option value="3">3 - ★★★☆☆</option>
                    <option value="2">2 - ★★☆☆☆</option>
                    <option value="1">1 - ★☆☆☆☆</option>
                </select>

                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Kirim Ulasan</button>
            </form>
        </div> -->
    </div>
  </section>

  <section class="section-3b">
    <div class="community-container">
      <h1 class="community-title">Mari Bergabung Bersama Komunitas Luarsekolah</h1>
      <div class="community-cards">
        <!-- Card 1 -->
        <div class="community-card-wrapper">
          <div class="community-card card-1">
            <div class="heading-container">
              <h2 class="card-subheading">Sobat LS</h3>
            </div>
          </div>
          <!-- Card 1 Hover -->
          <div class="community-card-hover card-1-hover">
            <div class="heading-card">
              <h2 class="card-heading">Komunitas Sobat LS</h2>
            </div>
            <p>Komunitas ini hadir untuk siapapun kamu yang bergabung dan dibimbing #Sampaijadibisa.</p>
            <div class="card-content">
              <p>Keunggulan Komunitas</p>
              <ul>
                <li><i class="fas fa-bullhorn"></i> Informasi mengenai kelas Luarsekolah, Prakerja, dan ISW</li>
                <li><i class="fas fa-calendar"></i> Informasi mengenai event LuarSekolah</li>
                <li><i class="fas fa-gift"></i> Gift away voucher kelas gratis</li>
              </ul>
              <button class="card-button" onclick="window.open('https://t.me/+FHnsDdl9V7w2MWJl', '_blank')">Gabung Sekarang</button>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="community-card-wrapper">
          <div class="community-card card-2">
            <div class="heading-container">
              <h2 class="card-subheading">Alumni Belajar Bekerja</h3>
            </div>
          </div>
          <!-- Card 2 Hover -->
          <div class="community-card-hover card-2-hover">
            <div class="heading-card">
              <h2 class="card-heading">Komunitas Alumni Belajar Bekerja</h2>
            </div>
            <p>Komunitas ini hadir untuk kamu yang berhasil lulus program Belajar Bekerja termasuk alumni magang+.</p>
            <div class="card-content">
              <p>Keunggulan Komunitas</p>
              <ul>
                <li><i class="fas fa-images"></i> Open diskusi terkait materi/Live Session</li>
                <li><i class="fas fa-bullhorn"></i> Informasi project magang/intern</li>
                <li><i class="fas fa-folder-closed"></i> Pemetaan minat dan topik</li>
                <li><i class="fas fa-satellite-dish"></i> Layanan Job Connector</li>
                <li><i class="fas fa-briefcase"></i> Informasi Lowongan kerja sesuai program belajar</li>
                <li><i class="fas fa-id-card"></i>Layanan Bimbingan karir</li>
                <li><i class="fas fa-people-group"></i> Membangun koneksi antar mitra alumni</li>
                <li><i class="fas fa-comments"></i> Diskusi terkait sukses story alumni belajar bekerja</li>
              </ul>
              <button class="card-button" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSeiH5YAFJz7PXi-Y0pk78VCtpQ0iiGTw5glT_kkle6juBJcPA/viewform', '_blank')">Gabung Sekarang</button>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="community-card-wrapper">
          <div class="community-card card-3">
            <div class="heading-container">
              <h2 class="card-subheading">Alumni Prakerja dan ISW</h3>
            </div>
          </div>
          <!-- Card 3 Hover -->
          <div class="community-card-hover card-3-hover">
            <div class="heading-card">
              <h2 class="card-heading">Komunitas Alumni Prakerja dan ISW</h2>
            </div>
            <p>Komunitas ini hadir untuk siapapun kamu yang bergabung dan dibimbing #Sampaijadibisa.</p>
            <div class="card-content">
              <p>Keunggulan Komunitas</p>
              <ul>
                <li><i class="fas fa-bullhorn"></i> Komunitas ini hadir untuk kamu yang telah menyelesaikan pelatihan prakerja dan event ISW.</li>
                <li><i class="fas fa-calendar"></i> Informasi umum tentang event LS atau DPxPrakerja</li>
              </ul>
              <button class="card-button" onclick="window.open('https://t.me/+bVzEerukGJs4N2Zl', '_blank')">Gabung Sekarang</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="faq-section">
    <div class="faq-container">
      <div class="faq-title">
        <h1>FAQ: Tentang Komunitas</h1>
      </div>
      <div class="faq-details">
        <p>Mari kenali lebih dekat komunitas kami! Berikut beberapa pertanyaan yang sering diajukan beserta jawabannya</p>
      </div>
      <div class="faq-accordion">
        <div class="accordion-item">
          <button class="accordion-button">
            Apa saja kegiatan yang dilakukan di komunitas ini?
            <i class="fas fa-chevron-down"></i>
          </button>
          <div class="accordion-content">
            <p>Kami rutin mengadapan berbagai kegiatan, seperti diskusi mingguan, workshop, hingga program sosial untuk memberikan manfaat bagi anggota dan masyarakat sekitar.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button class="accordion-button">
            Siapa saja yang dapat bergabung dengan komunitas ini?
            <i class="fas fa-chevron-down"></i>
          </button>
          <div class="accordion-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button class="accordion-button">
            Bagaimana cara bergabung dengan komunitas ini?
            <i class="fas fa-chevron-down"></i>
          </button>
          <div class="accordion-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button class="accordion-button">
            Apa ada biaya keanggotaan?
            <i class="fas fa-chevron-down"></i>
          </button>
          <div class="accordion-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button class="accordion-button">
            Apa manfaat yang didapatkan sebagai anggota komunitas ini?
            <i class="fas fa-chevron-down"></i>
          </button>
          <div class="accordion-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-5">
    <div class="section-5-container">
      <h1>Bingung Pilih Komunitas yang Pas Buat Kamu?</h1>
      <p>Santai, jangan khawatir! Kamu bisa langsung konsultasi dengan admin Luar Sekolah untuk mendapatkan rekomendasi komunitas yang sesuai dengan minat dan kebutuhanmu. Cukup klik tombol dibawah ini, dan kami siap membantu!</p>
      <button>Hubungi Admin Sekarang</button>
    </div>
  </section>

  <footer>
        <div class="footer-container">
            <!-- Bagian kiri: Logo dan deskripsi -->
            <div class="footer-left">
                <img src="../images/logo.png" alt="Luar Sekolah Logo" class="footer-logo">
                <p>Luar Sekolah merupakan wadah belajar dan mengajar pelajaran non-formal / alternatif dengan cara menyediakan kelas pengajaran dalam bentuk online dan offline.</p>
            </div>
    
            <!-- Bagian tengah: Link utama -->
            <div class="footer-center">
                <ul>
                    <li><a href="https://www.luarsekolah.com/tentang-kami">Tentang Kami</a></li>
                    <li><a href="https://www.luarsekolah.com/article">blog</a></li>
                    <li><a href="https://www.luarsekolah.com/promo">promo</a></li>
                    <li><a href="https://www.luarsekolah.com/bantuan">bantuan</a></li>
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

    </body>
    <script>
          document.querySelectorAll('.star').forEach(star => {
          star.addEventListener('click', function() {
              const selectedRating = this.getAttribute('data-rating');
              window.location.href = '?rating=' + selectedRating;
          });
      });

      const currentRating = <?php echo $rating; ?>;
      document.querySelectorAll('.star').forEach(star => {
          if (parseInt(star.getAttribute('data-rating')) <= currentRating) {
              star.classList.add('active');
          }
      });
    </script>
    <script src="../js/komunitas.js"></script>
</html>