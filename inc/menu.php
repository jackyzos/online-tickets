<nav class="navbar is-light" role="navigation" aria-label="main navigation">
  <div class="container">
  <div class="navbar-menu is-active is-light">
    <div class="navbar-start">
      <?php echo 'Login as:  <strong> ' . $_SESSION['user'].'</strong><br>'; ?>
    </div>

    <div class="navbar-end">
      <a class="navbar-item" href="index.php">Home</a>
      <a class="navbar-item" href="bookning.php">Köp Biljetter</a>
      <a class="navbar-item" href="mytickets.php">Mina Billjetter</a>
      <a class="navbar-item" href="logout.php">Logout</a>
    </div>
  </div>
  </div>
</nav>
