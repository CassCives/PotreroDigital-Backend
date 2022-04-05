<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1 style="text-align: center" >Trabajo Practico 1</h1>
<h2>1</h2>

<?php
echo "Hola mundo";
?>

<br>

<h2>2</h2>

<?php
$Saludo="Hola Mundo";
echo $Saludo;
?>

<br>

<h2>3</h2>

<?php 

$numero1 = 15;
$numero2 = 25;

echo $numero1 + $numero2;
echo "<br>";
echo $numero1 - $numero2;
echo "<br>";
echo $numero1 * $numero2;
echo "<br>";
echo $numero1 / $numero2;
echo "<br>";
echo $numero1 % $numero2;
?>

<br>

<h2>4</h2>

<?php
$grados = 20;
echo $grados *1.8 +32;
?>

<br>

<h2>5</h2>

<?php
$base = 18;
$altura = 12;
echo "Perimetro = ";
echo 2 * $base + 2* $altura;
echo "<br>";
echo "Area = ";
echo $base * $altura;
?>
<hr>
  </body>
</html>
