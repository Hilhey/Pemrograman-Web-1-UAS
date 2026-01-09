<?php
require '../config.php';

$id = $_GET['id'] ?? null;
$nama = '';
$kategori = '';
$harga = '';
$deskripsi = '';
$notice = '';

if ($mysqli && $id) {
    $stmt = $mysqli->prepare("SELECT nama_produk, kategori, harga, deskripsi FROM produk_mahasiswa WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->bind_result($nama, $kategori, $harga, $deskripsi);
    $stmt->fetch();
    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama_produk'] ?? '';
    $kategori = $_POST['kategori'] ?? '';
    $harga = (int) ($_POST['harga'] ?? 0);
    $deskripsi = $_POST['deskripsi'] ?? '';

    if (!$mysqli) {
        $notice = 'Koneksi database belum tersedia.';
    } elseif ($id) {
        $stmt = $mysqli->prepare("UPDATE produk_mahasiswa SET nama_produk = ?, kategori = ?, harga = ?, deskripsi = ? WHERE id = ?");
        $stmt->bind_param('ssisi', $nama, $kategori, $harga, $deskripsi, $id);
        $stmt->execute();
        $stmt->close();
        header('Location: produk_list.php');
        exit;
    } else {
        $stmt = $mysqli->prepare("INSERT INTO produk_mahasiswa (nama_produk, kategori, harga, deskripsi) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssis', $nama, $kategori, $harga, $deskripsi);
        $stmt->execute();
        $stmt->close();
        header('Location: produk_list.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <title>Form Produk</title>
</head>
<body>
  <div class="admin-content">
    <h2><?php echo $id ? 'Edit Produk' : 'Tambah Produk'; ?></h2>
    <?php if ($notice): ?>
      <div class="notice"><?php echo htmlspecialchars($notice, ENT_QUOTES, 'UTF-8'); ?></div>
    <?php endif; ?>
    <form method="post">
      <div class="form-group">
        <label for="nama_produk">Nama Produk</label>
        <input id="nama_produk" name="nama_produk" type="text" value="<?php echo htmlspecialchars($nama, ENT_QUOTES, 'UTF-8'); ?>" required />
      </div>
      <div class="form-group">
        <label for="kategori">Kategori</label>
        <input id="kategori" name="kategori" type="text" value="<?php echo htmlspecialchars($kategori, ENT_QUOTES, 'UTF-8'); ?>" required />
      </div>
      <div class="form-group">
        <label for="harga">Harga</label>
        <input id="harga" name="harga" type="number" value="<?php echo htmlspecialchars((string) $harga, ENT_QUOTES, 'UTF-8'); ?>" required />
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" rows="4" required><?php echo htmlspecialchars($deskripsi, ENT_QUOTES, 'UTF-8'); ?></textarea>
      </div>
      <button type="submit">Simpan</button>
      <a class="btn secondary" href="produk_list.php">Kembali</a>
    </form>
  </div>
</body>
</html>
