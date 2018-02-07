<?php

if (isset($_POST['submit'])) {

$pseudo    = protection($_POST['pseudo']);
$password  = protection($_POST['password']);
$email     = protection($_POST['email']);
$sexe      = protection($_POST['sexe']);
$age       = protection($_POST['age']);

echo $pseudo."<br />".$password."<br />".$email."<br />".$sexe."<br />".$age."<br />";

if (empty($pseudo) || empty($password) || empty($email) || $sexe == "select" || empty($age)) {

  echo "Le formulaire n'est pas complet...";

} else {
// ADD CLIENT

$addClient = $bdd->prepare('INSERT INTO signup(pseudo, password, email, sexe, age)
                      VALUES(:pseudo, :password, :email, :sexe, :age)');

$addClient->execute(array(
':pseudo'     => $pseudo,
':password'   => $password,
':email'      => $email,
':sexe'       => $sexe,
':age'        => $age,

));
};
}
