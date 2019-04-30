<?php   include('inc/header.php');
    $user = 'tak@go.se';
    $password = '123456';
      if (isset($_POST['submit'])) {
      if (!empty($_POST['email']) && !empty($_POST['password'])) {
      if ($user == $_POST['email'] && $password == $_POST['password']) {
        $_SESSION['user'] = $user;
        if (isset($_SESSION['user'])) {
        header('Location: index.php');
        }
      }else {
        echo 'incorrect Email/password'.'<br>';
        echo '<a href="index.php">Go back</a>';
      }
      }else {
        echo 'empty string'.'<br>';
        echo '<a href="index.php">Go back</a>';
      }
      }else {
        ?>
        <div class="columns is-mobile">
          <div class="column is-half is-offset-one-quarter">
            <div class="title">
              Sign in
            </div>
        <form class="" action="login.php" method="post">
          <div class="field">
            <label class="label">Email</label>
            <div class="control">
              <input class="input" type="email" name="email">
            </div>
          </div>
          <div class="field">
          <label class="label">Password</label>
          <div class="control">
          <input class="input" name="password" type="password">
          </div>
          </div>
            <div class="field is-grouped">
              <div class="control">
                <button class="button is-link" name="submit">Login</button>
              </div>
              <div class="control">
                <button class="button is-text">Cancel</button>
              </div>
            </div>
        </form>
      </div>
    </div>
        <?php
      }
    ?>
<?php   include('inc/footer.php'); ?>

  <!-- <label for="theater">Välj biograf</label>
  <select  id="theater" name="theater">
   <option value="born">Biopalatset</option>
   <option value="dumbo">Filmstaden Bergakungen</option>
   <option value="gentlemannen">Göte i Göteborg</option>
  </select> -->
  <!-- <label for="date">Välj datum</label>
  <input id="date" type="date" name="date"
         value="2019-04-24"
         min="2019-01-01" max="2019-12-31"> -->
