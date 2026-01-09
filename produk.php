<?php
require 'config.php';
require 'includes/header.php';

$produk = [];
$notice = '';

if ($mysqli) {
    $result = $mysqli->query("SELECT * FROM produk_mahasiswa ORDER BY id DESC");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $produk[] = $row;
        }
    }
} else {
    $notice = 'Koneksi database belum tersedia. Silakan import file database.sql ke database BD.';
}
?>
<section class="section">
  <div class="container">
    <h2>Katalog Produk Digital</h2>
    <p>Daftar produk ditampilkan langsung dari database BD.</p>
    <?php if ($notice): ?>
      <div class="notice"><?php echo htmlspecialchars($notice, ENT_QUOTES, 'UTF-8'); ?></div>
    <?php endif; ?>
    <div class="grid">
      <?php if ($produk): ?>
        <?php foreach ($produk as $item): ?>
          <div class="card">
            <h3><?php echo htmlspecialchars($item['nama_produk'], ENT_QUOTES, 'UTF-8'); ?></h3>
            <p><strong>Kategori:</strong> <?php echo htmlspecialchars($item['kategori'], ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Harga:</strong> Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?></p>
            <p><?php echo htmlspecialchars($item['deskripsi'], ENT_QUOTES, 'UTF-8'); ?></p>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="card">
          <p>Belum ada data produk.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php
require 'includes/footer.php';
?>
