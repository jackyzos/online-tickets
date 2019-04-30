<?php
    include('inc/header.php');
  if (isset($_SESSION['user'])) {
        
       ?>

       <div class="columns is-mobile">
         <div class="column is-half is-offset-one-quarter">
           <div class="title">
             Här kan du köpa Billjetter online
           </div>
          <form class="" action="confirm.php" method="post">
            <div class="field">
            <label class="label">Välj film</label>
            <div class="control">
              <div class="select">
                <select  id="films" name="films">
                  <?php echo listMovies();?>
                </select>
              </div>
            </div>
          </div>
            <div class="field">
            <label for="age">Välj ålder</label>
            <input class="input" name="age" type="number" value="15"
            min="7" max="99">
           </div>
            <div class="field">
              <div class="control">
            <label for="malsman" class="radio">Välj Målsman</label><br>
            <label for="yes">Ja</label>
            <input type="radio" name="malsman" id="yes" value="Ja">
            <label for="no">Nej</label>
            <input type="radio" name="malsman" id="no" value="Nej">
            </div>
            </div>
            <div class="field">
            <label for="ticket">Välj Antal Biljetter</label>
            <input class="input" name="ticket" type="number" value="1"
            min="1" max="99">
              </div>
              <div class="field">
                <div class="control">
              <label for="payment" class="radio">Välj Betalsätt</label><br>

              <label for="kort">Kontokort</label>
              <input type="radio" name="payment" id="kort" value="Kontokort">
              <label for="paypal">Paypal</label>
              <input type="radio" name="payment" id="paypal" value="Paypal">
              </div>
              </div>
              <div class="field is-grouped">
                <div class="control">
                  <button class="button is-link" type="submit" name="boka">Köp</button>
                </div>
                <div class="control">
                  <a class="button is-text" href="index.php">Cancel</a>
                </div>
              </div>
          </form>
          </div>
          </div>
       <?php
}else {
  echo ('seasson is unset Please Login Again');
}

     ?>

<?php   include('inc/footer.php'); ?>
