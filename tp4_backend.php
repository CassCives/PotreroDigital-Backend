<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1 style="text-align: center" >Trabajo Practico 4 bis</h1>
<h2>1</h2>


<?php
$pares = [2,4,6,8,10,12,14,16,18,20];
foreach ($pares as $value) {
  echo "$value\t";
}
?>

<br>

<h2>2</h2>

<?php
$array = ["Pedro", "Ana", 34, 1];
print "<pre>";
print_r($array);
print "</pre>";
?>

<br>

<h2>3</h2>

<?php 
$persona = ["Nombre"=> "Pedro",
"Apellido"=> "Torres",
"Dirección"=> "Av. Mayor 3703",
"Teléfono"=> 1122334455];
print "<pre>";
print_r($persona);
print "</pre>";
?>

<br>

<h2>4</h2>

<?php
$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles","Chicago"];
foreach ($ciudades as $key => $value) {
  print "<p>La ciudad con el indice " .$key. " es ".$value. " </p>\n";
}
?>

<br>

<h2>5</h2>

<?php
$ciudades2 = ["MD"=> "Madrid", "BCL"=> "Barcelona", "LD" => "Londres", "NY"=> "New York", "LA"=> "Los Ángeles", "CCG"=> "Chicago"];
foreach ($ciudades2 as $key => $value) {
  print "<p>El indice de ".$value." es ".$key."</p>\n";
}
?>
<hr>
  </body>
</html>
