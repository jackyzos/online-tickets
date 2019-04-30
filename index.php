<?php include('inc/header.php');
    if (!empty($_SESSION['user'])) {
      echo '<div class="container">';
    echo '<p class="title is-centered">Welcome: ' . $_SESSION['user'].'</p>';
    echo '</div>';
    }else{
      header('Location: login.php');
  }
?>
<?php   include('inc/footer.php'); ?>
