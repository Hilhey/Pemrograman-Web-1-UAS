<?php
require 'includes/header.php';
?>
<section class="hero container">
  <div>
    <h1>Portal E-Commerce & Katalog Produk Digital</h1>
    <p>Kami menghadirkan produk kreatif digital untuk UMKM, kreator konten, dan startup. Jelajahi template, audio, dan aset visual yang siap pakai.</p>
    <div class="badges">
      <span>Produk Digital</span>
      <span>Lisensi Komersial</span>
      <span>Dukungan 24/7</span>
    </div>
    <div style="margin-top: 18px;">
      <button onclick="showPromo()">Lihat Promo</button>
      <a class="btn secondary" href="produk.php">Lihat Katalog</a>
    </div>
  </div>
  <div>
    <img src="assets/images/hero.svg" alt="GlowCanvas Studio" />
  </div>
</section>

<section class="section">
  <div class="container grid">
    <div class="card">
      <h3>Kenapa GlowCanvas?</h3>
      <p>Platform kami menyediakan produk digital yang mudah digunakan dan membantu bisnis Anda tampil lebih profesional.</p>
      <ul>
        <li>Gratis update konten setiap bulan.</li>
        <li>Lisensi fleksibel untuk individu dan bisnis.</li>
        <li>Metode pembayaran aman dan cepat.</li>
      </ul>
    </div>
    <div class="card">
      <h3>Bullet Numbering</h3>
      <ol>
        <li>Pilih produk yang diinginkan.</li>
        <li>Masukkan ke keranjang belanja.</li>
        <li>Unduh secara instan.</li>
      </ol>
      <p>Kunjungi <a href="https://www.instagram.com" target="_blank" rel="noreferrer">Instagram</a> kami untuk update terbaru.</p>
    </div>
    <div class="card">
      <h3>Media Showcase</h3>
      <div class="media-grid">
        <div>
          <p><strong>Music Preview</strong></p>
          <audio controls>
            <source src="https://www.w3schools.com/html/horse.mp3" type="audio/mpeg" />
            Browser Anda tidak mendukung audio.
          </audio>
        </div>
        <div>
          <p><strong>Video Showcase</strong></p>
          <video controls width="100%">
            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4" />
            Browser Anda tidak mendukung video.
          </video>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
require 'includes/footer.php';
?>
