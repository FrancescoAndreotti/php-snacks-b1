<!-- Snack 1
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];
//echo $name . " " . $age . " " . $email;


function is_valid($name, $email, $age)
{
  if (strlen($name) < 3) {
    return;
  };

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return;
  };

  if (!is_numeric($age)) {
    return;
  }
  echo "Accesso Riusctio";
};
is_valid($name, $email, $age)
?>