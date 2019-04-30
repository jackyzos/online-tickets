<?php   include('inc/header.php');
if (isset($_SESSION['mytickets']) && !empty(isset($_SESSION['mytickets']))) {
?>
<div class="columns is-mobile">
  <div class="column is-half is-offset-one-quarter">
    <div class="title" style="text-align: center;">
      Order History
    </div>
    <div class="notification is-light">
      <ul>
        <table class="table is-bordered is-fullwidth">
  <thead>
    <tr>
      <th>Film</th>
      <th>Age</th>
      <th>Målsman</th>
      <th>Tickets</th>
      <th>Betalsätt</th>
      <th>Summa</th>
      <th>Moms</th>
      <th>Totalt</th>
    </tr>
  </thead>
  <tbody>
    <tr>
<?php

    foreach ($_SESSION['mytickets'] as $item) {
      echo '<td>' . $item . '</td>';
    }
    ?>
  </tr>
</tbody>
</table>
    <?php
    echo '<a href="clear.php" class="button is-info">clear my order History</a>';
    ?>
  </ul>
</div>
</div>
</div>
    <?php
  }else {
    echo '<p class="notification is-warning">Your history is empty <a class="button is-info" href="bookning.php">Buy Tickets</a></p>';
      }
     ?>
<?php   include('inc/footer.php'); ?>
