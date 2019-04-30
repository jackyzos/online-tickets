<?php
// globala variabel
$myTickets = array();
$price = 125;
$moms = 1.25;
$myFilms = array();
$myFilms = ['A Star Is Born' => 11,'Dumbo' => 7,'Den siste gentlemannen' => 15,'Draktränaren 3' => 11];


// funktion där man kontrollerar ålder och filmen
// echo checkAge('A Star Is Born',11,'Nej');
function checkAge($film,$age,$parent){
  global $myFilms;
if (($age > 6 && $age < 10) && $parent == 'Ja') {
  foreach($myFilms as $key => $value) {
    if ($value <= 14 && $key == $film) {
      return 'true';
    }
  }
}
if (($age > 6 && $age < 10) && $parent == 'Nej') {
  foreach($myFilms as $key => $value) {
    if ($value <= 10 && $key == $film) {
      return 'true';
    }
  }
}

if (($age > 10 && $age < 15) && $parent == 'Ja' ) {
  foreach($myFilms as $key => $value) {
    if ($value <= 15 && $key == $film) {
      return 'true';
        }
  }
}
if (($age > 10 && $age < 15) && $parent == 'Nej' ) {
  foreach($myFilms as $key => $value) {
    if ($value <= 14 && $key == $film) {
      return 'true';
        }
  }
}

if ( $age >= 15 && $parent == 'Nej' || $age >= 15 && $parent == 'Ja' ) {
  foreach($myFilms as $key => $value) {
    if ($value <= 18 && $key == $film) {
      return 'true';
        }
  }
}

}
// function hämta mina filmer from array med nyckel och värde
function listMovies(){
  global $myFilms,$price;
  foreach($myFilms as $key => $value) {
      echo '<option value="'.$key.'">'. $key . ' | '. $value . 'år | '. $price . 'kr</option>';
  }
  return $myFilms;
}
// räkna ut pris utan momsen
function calcuPrice(){
  global $price;
  $ticket = $_POST['ticket'];
  $summa = $ticket * $price;
  return $summa;
}

// räkna ut momsen
function calcuMoms(){
  global $moms;
  $totalt = 0;
  $summa = calcuPrice();
  $totalt = $moms * $summa /100;
  return round($totalt, 2);
}
// räkna ut totala pris med momsen
function calcuTotal(){
  $totalt = 0;
  $summa = calcuPrice();
  $moms = calcuMoms();
  $totalt = $moms + $summa;
  return $totalt;
}
 ?>
