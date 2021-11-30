<!-- Creare un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php
$array = [];
$numTotali = 15;
while (count($array) < $numTotali) {
  $numRandom = rand(1, 100);
  $array[] = $numRandom;
};
var_dump($array);


?>