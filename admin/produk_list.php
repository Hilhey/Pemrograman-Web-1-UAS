<?php
require '../config.php';
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
    $notice = 'Koneksi database belum tersedia. Import database.sql terlebih dahulu.';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <script src="../assets/js/script.js" defer></script>
  <title>Produk Admin</title>
</head>
<body>
  <div class="admin-content">
    <h2>Data Produk</h2>
    <a class="btn secondary" href="produk_form.php">Tambah Produk</a>
    <?php if ($notice): ?>
      <div class="notice"><?php echo htmlspecialchars($notice, ENT_QUOTES, 'UTF-8'); ?></div>
    <?php endif; ?>
    <table>
      <thead>
        <tr>
          <th>Nama Produk</th>
          <th>Kategori</th>
          <th>Harga</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($produk): ?>
          <?php foreach ($produk as $item): ?>
            <tr>
              <td><?php echo htmlspecialchars($item['nama_produk'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($item['kategori'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td>Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?></td>
              <td>
                <a class="btn" href="produk_form.php?id=<?php echo $item['id']; ?>">Edit</a>
                <a class="btn secondary" href="produk_delete.php?id=<?php echo $item['id']; ?>" onclick="return confirmDelete();">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="4">Belum ada data.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
