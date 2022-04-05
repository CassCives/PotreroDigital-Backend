<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1 style="text-align: center" >Trabajo Practico 2</h1>
<h2>1</h2>

<?php
$n = 10;
if($n>0){
  echo "n es un numero positivo";
}
?>

<br>

<h2>2</h2>

<?php
$n = 5;
if($n>0&&$n<10){
  echo "n es un numero mayor a 0 y menos a 10";
}
?>

<br>

<h2>3</h2>

<?php 
$n = 1;
if($n>10||$n<2){
  echo "n es un numero mayor a 10 o menor a 2";
}
?>

<br>

<h2>4</h2>

<?php
$numero1 = 10;
$numero2 = 5;
if($numero1>$numero2){
  echo "numero1 + numero2 = " .$numero1+$numero2."<br>";
  echo "numero1 - numero2 = " .$numero1-$numero2;
}
else if($numero2>$numero1){
  echo "numero1 * numero2 = " .$numero1*$numero2."<br>";
  echo "numero1 / numero2 = " .$numero1/$numero2."<br>";
  echo "numero1 % numero2 = " .$numero1%$numero2;
}
else{
  echo "Los números ingresados son iguales";
}
?>
<hr>
  </body>
</html>
