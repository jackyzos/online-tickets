<?php   include('inc/header.php');
    if (isset($_POST['boka']) && isset($_POST['payment']) && isset($_POST['malsman'])) {
    if (!empty($_POST['films']) && !empty($_POST['age'])) {
      $film = $_POST['films'];
      $age = $_POST['age'];
      $ticket = $_POST['ticket'];
      $malsman = $_POST['malsman'];
      $payment = $_POST['payment'];
      if (checkAge($film,$age,$malsman) == 'true') {
        echo '<p class="notification is-info"> <strong class="sub-title">Nästan klart</strong></p>';
        ?>
        <div class="columns is-mobile">
          <div class="column is-half is-offset-one-quarter">
            <div class="title" style="text-align: center;">
              Bekräfta ditt köp
            </div>
            <div class="notification is-light">
        <?php
        echo '<p class="tag is-medium">Film: '.$film.'</p>' ;
        echo '<p class="tag is-medium">Age: '.$age.'</p>' ;
        echo '<p class="tag is-medium">Målsman: '.$malsman.'</p><br>' ;
        echo '<p class="tag is-medium" >Betalsätt: '.$payment.'</p>' ;
        echo '<p class="tag is-medium">Summa: '.calcuPrice().'kr</p>' ;
        echo '<p class="tag is-medium">Moms: ' . calcuMoms() .'kr</p>';
        echo '<p class="notification is-white"><strong>Att Betala: ' . calcuTotal() . 'kr</strong></p>';
        array_push($myTickets,$film,$age,$malsman,$ticket,$payment,calcuPrice(),calcuMoms(),calcuTotal());
        if (calcuTotal() > 0) {
          $_SESSION['tempMytickets'] = $myTickets;
        }
        echo '<form class="" action="checkout.php" method="post">';
        echo '<div class="tag is-large">';
        echo '<label class="checkbox">
              <input type="checkbox" name="confirmpage" value="Yes">
              I agree to the <a href="#">terms and conditions</a>
            </label>';
        echo '</div><br>';
            echo '<input type="submit" style="margin: 15px;" class="button is-info" value="Bekräfta" />';
            echo '<a class="button is-text" style="margin: 15px;" href="bookning.php">Cancel</a>';
            echo '</form>';
            ?>
          </div>
        </div>
      </div>
            <?php
      }else {
        echo '<p class="notification is-warning"> You Are to ung to watch this Movie alone <a class="button is-info" href="bookning.php">Go Back</a></p>';
      }

    }
  }else {
    echo '<p class="notification is-danger">All fields are required <a class="button is-info" href="bookning.php">Go Back</a></p>';
  }
     ?>
<?php   include('inc/footer.php'); ?>
