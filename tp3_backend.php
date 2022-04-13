<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1 style="text-align: center" >Trabajo Practico 3</h1>
<h2>1</h2>

<?php
for($i=1;$i<=100;$i++){
  echo "$i\t";
}
?>

<br>

<h2>2</h2>

<?php
for($i=100;$i>=1;$i--){
  echo "$i\t";
}
?>

<br>

<h2>3</h2>

<?php 
for($i=1;$i<=100;$i++){
  if($i%2==0){
    echo "$i\t";
  }
}
?>

<br>

<h2>4</h2>

<?php
for($i=1;$i<=100;$i++){
  if($i%2!=0){
    echo "$i\t";
  }
}
?>

<br>

<h2>5</h2>

<?php
$suma = 0;
for($i=1;$i<=20;$i++){
  $suma+=$i;
}
echo "$suma";
?>

<br>

<h2>5</h2>

<?php
$suma = 0;
for($i=1;$i<=20;$i++){
  if($i%2!=0){
    $suma+=$i;
  }
}
echo "$suma";
?>
<hr>
  </body>
</html>
