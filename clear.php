<?php session_start();
    unset($_SESSION['mytickets']);
    header("location: mytickets.php");
?>
