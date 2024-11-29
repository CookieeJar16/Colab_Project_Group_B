  <?php 
    include 'config/config.php';
    include('page/navbar.php'); 

    $stmt = $pdo->query("SELECT * FROM course");
    $courses = $stmt->fetchAll();
  ?>

  <header class="hero-section">
  <div class="hero-content">
    <h1>Siap Kerja lewat Project Based Internship</h1>
    <p>Apa itu Project-Based Internship?</p>
    <p>Luar Sekolah Project-Based Internship adalah program magang virtual yang dirancang untuk membantumu mengembangkan skill standar industri lewat proyek nyata, sehingga kamu bisa lebih mudah beradaptasi di lingkungan kerja profesional.</p>
      <div class="container-list">
      <h2>Kalo ikut magang di Luar Sekolah kamu akan:</h2>
      <ul class="hero-list">
        <li>
          <div class="list-centang">
          <img src="images/centang.png" alt="centang">
          <span class="text">Langsung diterima</span>
          </div>
        </li>
        <li>
        <div class="list-centang">
          <img src="images/centang.png" alt="centang">
          <span class="text">Auto lolos</span>
          </div>
        </li>
        <li>
        <div class="list-centang">
          <img src="images/centang.png" alt="centang">
          <span class="text">bisa konversi SKS</span>
          </div>
        </li>
        <li>
        <div class="list-centang">
          <img src="images/centang.png" alt="centang">
          <span class="text">Dapat sertifikasi</span>
          </div>
        </li>
      </ul>
    </div>
    <h2>Yuk, tunggu apa lagi! Ini waktunya kamu belajar skill standar industri dan langsung siap kerja!</h2>
    <div class="cta-buttons">
      <a href="page/login.php" class="btn-primary">Daftar Sekarang</a>
    </div>
  </div>
</header>

<section id="benefitsmagang" class="benefits-magang">
  <h2 class="benefits-heading">Keuntungan apa aja yang kamu bisa dapet dari Magang Online di Luar Sekolah?</h2>
  <div class="benefits-container">
    <div class="benefits-image">
      <img src="images/woman.png" alt="woman">
    </div>
    <ul class="benefits-list">
      <li>
        <div class="benefit-icon">
          <img src="images/centang.png" alt="Real Case Industry">
        </div>
        <div class="benefit-content">
          <h3>Real Case Industry</h3>
          <p>Kamu akan memiliki pengalaman menyelesaikan kasus - kasus yang terjadi di industri.</p>
        </div>
      </li>
      <li>
        <div class="benefit-icon">
          <img src="images/centang.png" alt="Build your portfolio">
        </div>
        <div class="benefit-content">
          <h3>Build your portfolio</h3>
          <p>Kamu menjadi kandidat yang sesuai dengan kebutuhan industri dengan membuat portfolio melalui real case.</p>
        </div>
      </li>
      <li>
        <div class="benefit-icon">
          <img src="images/centang.png" alt="Mentorship">
        </div>
        <div class="benefit-content">
          <h3>Mentorship from Industry Experts</h3>
          <p>Selama magang kamu akan didampingi oleh mentor yang sudah sangat berpengalaman di dalam industri.</p>
        </div>
      </li>
      <li>
        <div class="benefit-icon">
          <img src="images/centang.png" alt="Convert SKS">
        </div>
        <div class="benefit-content">
          <h3>Convert SKS</h3>
          <p>Bagi mahasiswa yang mencari tempat magang online kamu bisa di konversi SKS sesuai kebutuhan perguruan tinggi.</p>
        </div>
      </li>
      <li>
        <div class="benefit-icon">
          <img src="images/centang.png" alt="Sertifikat Magang">
        </div>
        <div class="benefit-content">
          <h3>Sertifikat Magang</h3>
          <p>Kamu tentunya akan mendapatkan sertifikat magang sebagai bukti kamu telah menyelesaikan magang.</p>
        </div>
      </li>
      <li>
        <div class="benefit-icon">
          <img src="images/centang.png" alt="Auto Lolos">
        </div>
        <div class="benefit-content">
          <h3>Auto lolos</h3>
          <p>Jika kamu rajin hadir dan mengerjakan tugas, kamu pasti akan auto lolos, semua orang memiliki kesempatan untuk berpengalaman industri.</p>
        </div>
      </li>
    </ul>
  </div>
</section>

<section id="programs" class="programs-section">
  <h2 class="programs-heading">Program Pelatihan yang Kami Tawarkan</h2>
  <div class="programs-container">
    <?php foreach ($courses as $course): ?>
      <div class="program-item">
        <img src="uploads/<?php echo $course['gambar']; ?>" alt="Program <?php echo $program['id']; ?>" class="program-image">
        <h3 class="program-title"><?php echo htmlspecialchars($course['judul']); ?></h3>
        <p class="program-description"><?php echo htmlspecialchars($course['deskripsi']); ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section id="alumni" class="alumni-section">
  <h2 class="alumni-heading">Lets Hear What our Alumni Says About Us</h2>
  <div class="alumni-container">
    <div class="alumni-item">
      <img src="images/woman.png" alt="Alumni 1" class="alumni-image">
      <h3 class="alumni-name">Siti Aisyah</h3>
      <p class="alumni-story">"Program di Luar Sekolah benar-benar membantu saya memahami dunia kerja. Dari belajar digital marketing hingga mendapatkan pengalaman langsung, semuanya terasa seperti kesempatan emas!"</p>
      <a href="#" class="linkedin-link" target="_blank">Lihat lebih detail di LinkedIn</a>
    </div>
    <div class="alumni-item">
      <img src="images/woman.png" alt="Alumni 2" class="alumni-image">
      <h3 class="alumni-name">Andi Pratama</h3>
      <p class="alumni-story">"Selama mengikuti program Luar Sekolah, saya mendapatkan mentor yang luar biasa dan proyek-proyek yang menantang. Sekarang saya merasa lebih percaya diri menghadapi dunia kerja!"</p>
      <a href="#" class="linkedin-link" target="_blank">Lihat lebih detail di LinkedIn</a>
    </div>
    <div class="alumni-item">
      <img src="images/woman.png" alt="Alumni 3" class="alumni-image">
      <h3 class="alumni-name">Rina Kusuma</h3>
      <p class="alumni-story">"Saya berhasil mengonversi SKS magang dan mendapatkan banyak insight dari program ini. Terima kasih Luar Sekolah atas pengalaman tak terlupakan ini!"</p>
      <a href="#" class="linkedin-link" target="_blank">Lihat lebih detail di LinkedIn</a>
    </div>
  </div>
</section>

<section id="video-alumni" class="video-alumni-section">
  <h2 class="video-alumni-heading">Interesting Stories from Our Alumni</h2>
  <div class="video-alumni-container">
    <div class="video-alumni-item">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/anrttM9SpGU?si=5ElpMoZ0l9804dAF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <p class="video-description">"Testimoni Alumni 1: Cerita sukses dari program magang di Luar Sekolah."</p>
    </div>
    <div class="video-alumni-item">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/anrttM9SpGU?si=5ElpMoZ0l9804dAF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <p class="video-description">"Testimoni Alumni 2: Bagaimana program ini mengubah karier saya."</p>
    </div>
    <div class="video-alumni-item">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/anrttM9SpGU?si=5ElpMoZ0l9804dAF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <p class="video-description">"Testimoni Alumni 3: Pengalaman belajar skill standar industri."</p>
    </div>
  </div>
</section>

<section id="our-partners" class="partners-section">
  <h2 class="partners-heading">Our Partners</h2>
  <div class="partners-container">
    <img src="images/partners.jpeg" alt="Partner 1" class="partner-logo">
    
  </div>
</section>

<section id="faq" class="faq-section">
<h2 class="faq-heading">FAQ</h2>
  <h2 class="faq-title">Bagaimana jam kerja magang di Luar Sekolah?</h2>
  <p class="faq-answer">Jam Kerja untuk peserta magang adalah jam 08.00 - 17.00 WIB namun jam kerja tetap fleksibel dan bisa disesuaikan.</p>

  <h2 class="faq-title">Apakah skema ke lulusan dan syarat untuk mendapatkan sertifikat?</h2>
  <p class="faq-answer">Peserta akan dianggap lulus apabila tidak melebihi jumlah absensi, sebagai berikut:</p>
  <ul class="faq-list">
    <li>Durasi 1 bulan : 1 kali tidak mengerjakan tugas & tidak menghadiri mentoring tanpa alasan yang jelas</li>
    <li>Durasi 2 bulan : 2 kali tidak mengerjakan tugas & tidak menghadiri mentoring tanpa alasan yang jelas</li>
    <li>Durasi 3 bulan : 2 kali tidak mengerjakan tugas & menghadiri mentoring tanpa alasan yang jelas</li>
  </ul>

  <h2 class="faq-title">Apakah program magang ini hanya bersifat WFH?</h2>
  <p class="faq-answer">Utamanya bersifat WFH namun diperbolehkan untuk bekerja langsung di kantor Luar Sekolah.</p>

  <h2 class="faq-title">Dimana sertifikat & transkrip dapat di-download?</h2>
  <p class="faq-answer">Peserta dapat men-download sertifikat penyelesaian dan transkrip nilai di menu <strong>Sertifikat</strong> pada Dashboard.</p>

  <h2 class="faq-title">Apakah terdapat grup diskusi seperti WhatsApp, Discord atau media sosial lainnya?</h2>
  <p class="faq-answer">Untuk memudahkan komunikasi, diskusi dan hubungan yang terjalin baik, kami akan menyediakan grup Discord atau WhatsApp untuk setiap program yang dipilih.</p>
</section>


    <?php include('page/footer.php'); ?>
    
    
    
