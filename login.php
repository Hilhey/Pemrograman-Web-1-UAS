<?php
require 'includes/header.php';
?>
<section class="section">
  <div class="container" style="max-width: 520px;">
    <div class="card">
      <h2>Login Admin</h2>
      <p>Gunakan akun demo untuk masuk ke halaman admin.</p>
      <form method="post" action="admin/index.php">
        <div class="form-group">
          <label for="username">Username</label>
          <input id="username" name="username" type="text" placeholder="admin" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" placeholder="12345" required />
        </div>
        <button type="submit">Masuk</button>
      </form>
      <p style="margin-top: 12px;">Belum punya akun? Hubungi admin GlowCanvas.</p>
    </div>
  </div>
</section>
<?php
require 'includes/footer.php';
?>
