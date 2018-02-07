<?php
// AFFICHER CLIENTS

$query = $bdd->query('SELECT * FROM forms');

while ($forms = $query->fetch())
  {
    $index = $signup["index"];
    $last = $signup["pseudo"];
    $first = $signup["password"];
    $email = $signup["email"];
    $age = $signup["age"];
    $sexe = $signup["sexe"];


      echo $first." ".$last." ".$index." ".$age." ".$sexe."<br />";
  }

  echo "<br />";
