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
    <iframe width="560" height="315" src="https://www.youtube.com/embed/TYpDBmYbick?si=KJnmHBrpa7xsCNof" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>      <p class="video-description">"Testimoni Alumni 1: Cerita sukses dari program magang di Luar Sekolah."</p>
    </div>
    <div class="video-alumni-item">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/hAszW1TxMAo?si=nHmxMZNofCzWAzbj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>      <p class="video-description">"Testimoni Alumni 2: Bagaimana program ini mengubah karier saya."</p>
    </div>
    <div class="video-alumni-item">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/hIZDF0LhzeU?si=Jfs-RnZgVOnQyma_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>      <p class="video-description">"Testimoni Alumni 3: Pengalaman belajar skill standar industri."</p>
    </div>
  </div>
</section>

<section id="our-partners" class="partners-section">
  <h2 class="partners-heading">Our Partners</h2>
  <div class="partners-container">
    <img src="images/partners.jpeg" alt="Partner 1" class="partner-logo">
    
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
  <script>
// Fungsi untuk menghilangkan notifikasi setelah beberapa detik
window.onload = function() {
    var notification = document.getElementById("floating-notification");
    if (notification) {
        // Set waktu berapa detik notifikasi muncul (misalnya 3 detik)
        setTimeout(function() {
            notification.classList.add("hidden"); // Menambahkan kelas "hidden" untuk menyembunyikan
        }, 3000); // 3000ms = 3 detik
    }
};
</script>


    <?php include('page/footer.php'); ?>
    
    
    
