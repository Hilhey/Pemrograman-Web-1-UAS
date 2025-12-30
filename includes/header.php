<?php
$current = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GlowCanvas Studio</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="assets/js/script.js" defer></script>
</head>
<body>
  <header>
    <div class="container">
      <nav>
        <div class="logo">GlowCanvas Studio</div>
        <ul>
          <li><a href="index.php" <?php echo $current === 'index.php' ? 'style="background: rgba(255,255,255,0.3);"' : ''; ?>>Home</a></li>
          <li><a href="produk.php" <?php echo $current === 'produk.php' ? 'style="background: rgba(255,255,255,0.3);"' : ''; ?>>Produk</a></li>
          <li><a href="profil.php" <?php echo $current === 'profil.php' ? 'style="background: rgba(255,255,255,0.3);"' : ''; ?>>Profil Perusahaan</a></li>
          <li><a href="bebas.php" <?php echo $current === 'bebas.php' ? 'style="background: rgba(255,255,255,0.3);"' : ''; ?>>Menu Bebas</a></li>
          <li><a href="login.php" <?php echo $current === 'login.php' ? 'style="background: rgba(255,255,255,0.3);"' : ''; ?>>Login</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
