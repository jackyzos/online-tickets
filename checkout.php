<?php   include('inc/header.php');
 if (isset($_POST['confirmpage']) && $_POST['confirmpage'] == 'Yes') {
  $_SESSION['mytickets'] = $_SESSION['tempMytickets'];
    echo '<p class="notification is-success"><strong class="sub-title is-centered">You Successfully Placed Your Order</strong> <a href="mytickets.php" class="button is-info">Go to MyTickets</a></p>';
    ?>
    <div class="columns is-mobile">
      <div class="column is-half is-offset-one-quarter">
        <div class="title" style="text-align: center;">
          Tack för ditt köp!
        </div>
        <div class="notification is-light">
        <div class="subtitle is-5" style="text-align: center;">
          Kvitto på ditt köp
        </div>
        <table class="table is-bordered is-fullwidth">
  <thead>
    <tr>
      <th>Film</th>
      <th>Tickets</th>
      <th>Age</th>
      <th>Målsman</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      echo '<td>' . $_SESSION['tempMytickets'][0] . '</td>';
      echo '<td>' . $_SESSION['tempMytickets'][3] . '</td>';
      echo '<td>' . $_SESSION['tempMytickets'][1] . '</td>';
      echo '<td>' . $_SESSION['tempMytickets'][2] . '</td>';
       ?>
    </tr>
  </tbody>
  </table>
<ul style="border-bottom: 1px solid grey;">
  <?php
  echo '<li class="tag is-medium"><strong class="sub-title">Betalsätt:</strong> ' . $_SESSION['tempMytickets'][4] . '</li>';
  echo '<li class="tag is-medium"><strong class="sub-title">Datum:</strong> 2019-04-25</li>';
  echo '<li class="tag is-medium"><strong class="sub-title">Moms:</strong> ' . $_SESSION['tempMytickets'][6] . 'kr</li>';
  echo '<li class="tag is-medium"><strong class="sub-title">Summa:</strong> ' . $_SESSION['tempMytickets'][5] . 'kr</li>';
   ?>
</ul>
<p class="notification is-large"  style="text-align: right;"><strong class="subtitle is-5">Total Betalat: <?php echo $_SESSION['tempMytickets'][7] ?>kr</strong></p>

      </div>
    </div>
  </div>
    <?php
}else {
  echo '<p class="notification is-warning">
  <strong class="sub-title is-centered">You have to <em class="sub-title is-white">agree to our terms and conditions</em> please try again</strong> <a href="bookning.php" class="button is-info">Go Back</a>
  </p>';
}

     ?>
<?php   include('inc/footer.php'); ?>
