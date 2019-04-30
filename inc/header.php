<?php
 session_start();
 require('function.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booka Biobilljetter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
    <section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Welcome to Online Tickets
      </h1>
    </div>
  </div>
</section>
    <?php
    // menu visar efter när man har loggat in
    if (!empty($_SESSION['user'])) {
      include('inc/menu.php');
    }
    ?>
